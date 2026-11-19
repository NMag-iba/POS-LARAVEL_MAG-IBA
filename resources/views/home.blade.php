<!DOCTYPE html>
<html>
<head>
    <title>POS System - Home</title>
</head>

<body style="text-align: center;">

    <h1>Point-of-Sale System</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers.index') }}">Customer Accounts</a> |
        <a href="{{ route('users.index') }}">User Accounts</a>

        @auth
            <form method="POST"
                  action="{{ route('logout') }}"
                  style="display: inline;">
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
                        font-family: inherit;
                        font-size: inherit;
                    "
                >
                    Log Out
                </button>
            </form>
        @endauth
    </nav>

    <p>Welcome!</p>

</body>
</html>