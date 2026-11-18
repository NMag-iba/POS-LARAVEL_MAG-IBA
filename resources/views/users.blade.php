<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>

    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #d9f2d9;
        }

        h1, nav {
            text-align: center;
        }

        nav a {
            margin: 0 10px;
        }

        .add-user {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 8px 15px;
            border: 1px solid #767676;
            background-color: #efefef;
            color: black;
            text-decoration: none;
        }

        .add-user:hover {
            background-color: #dcdcdc;
        }
    </style>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customer Accounts</a>
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <a class="add-user" href="{{ route('users.create') }}">
        Add User
    </a>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->role }}</td>

                    <td>
                        @if ($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}"
                                alt="{{ $user->full_name }} avatar"
                                width="80">
                        @else
                            No avatar
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('users.edit', $user) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @if (session('success'))
        <p style="text-align: center;">
            {{ session('success') }}
        </p>
    @endif

</body>
</html>