<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>

    <style>
        h1, nav {
            text-align: center;
        }

        nav {
            margin: 20px;
        }

        nav a {
            margin: 0 10px;
        }

        .details {
            width: 400px;
            margin: 40px auto;
            padding: 25px;
            border: 1px solid #ccc;
            background-color: #f9fff9;
            text-align: center;
        }

        .details p {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .avatar {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin: 10px auto;
        }

        .back-button {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            border: 1px solid #767676;
            background-color: #efefef;
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>User Details</h1>

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

    <div class="details">
        @if ($user->avatar)
            <img
                class="avatar"
                src="{{ asset('storage/' . $user->avatar) }}"
                alt="User avatar"
            >
        @endif

        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
        <p><strong>Role:</strong> {{ $user->role }}</p>

        <a class="back-button" href="{{ route('users.index') }}">
            Back to Users
        </a>
    </div>

</body>
</html>