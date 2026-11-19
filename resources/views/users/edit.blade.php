<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <style>
        h1 {
            text-align: center;
        }

        nav {
            text-align: center;
            margin: 20px;
        }

        nav a {
            margin: 0 10px;
        }

        form {
            width: 400px;
            margin: 20px auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .error {
            display: block;
            color: red;
            margin-top: 5px;
        }

        .current-avatar {
            width: 100px;
            height: 100px;
            object-fit: cover;
            display: block;
            margin-top: 10px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        button,
        .back-button {
            padding: 8px 15px;
            border: 1px solid #767676;
            border-radius: 2px;
            background-color: #efefef;
            color: black;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>Edit User</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.index') }}">Customer Accounts</a>
        <a href="{{ route('users.index') }}">User Accounts</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf

        <button
            type="submit"
            style="
                margin-left: 10px;
                border: none;
                background: none;
                color: #0000ee;
                text-decoration: underline;
                cursor: pointer;
                font-size: 16px;
                font-family: inherit;
                font-size: inherit;
            "
        >
            Log Out
        </button>
    </form>
    </nav>

    <form method="POST"
          action="{{ route('users.update', $user) }}"
          enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="username">Username:</label>

            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username', $user->username) }}"
            >

            @error('username')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="full_name">Full Name:</label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name', $user->full_name) }}"
            >

            @error('full_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="role">Role:</label>

            <input
                type="text"
                id="role"
                name="role"
                value="{{ old('role', $user->role) }}"
            >

            @error('role')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar">Profile Picture:</label>

            <input
                type="file"
                id="avatar"
                name="avatar"
                accept=".jpg,.jpeg,.png"
            >

            @error('avatar')
                <span class="error">{{ $message }}</span>
            @enderror

            @if ($user->avatar)
                <img
                    class="current-avatar"
                    src="{{ asset('storage/' . $user->avatar) }}"
                    alt="Current avatar"
                >
            @endif
        </div>

        <div class="form-actions">
            <button type="submit">Update User</button>

            <a class="back-button" href="{{ route('users.index') }}">
                Go Back
            </a>
        </div>
    </form>

</body>
</html>