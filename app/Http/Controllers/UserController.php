<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\Laravel\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:100', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:100'],
            'role' => ['required', 'string', 'max:50'],
        ]);

        User::create($validated);

        return redirect()
            ->route('users')
            ->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:100',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
            'full_name' => ['required', 'string', 'max:100'],
            'role' => ['required', 'string', 'max:50'],
            'avatar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ],
        ]);

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->makeDirectory('avatars');

            $oldAvatar = $user->avatar;

            $fileName = 'avatar_' . Str::uuid() . '.jpg';
            $relativePath = 'avatars/' . $fileName;
            $absolutePath = Storage::disk('public')->path($relativePath);

            Image::read($request->file('avatar'))
                ->cover(300, 300)
                ->save($absolutePath);

            $validated['avatar'] = $relativePath;

            $user->update($validated);

            if ($oldAvatar) {
                Storage::disk('public')->delete($oldAvatar);
            }
        } else {
            $user->update($validated);
        }

        return redirect()
            ->route('users')
            ->with('success', 'User updated successfully.');
    }
}