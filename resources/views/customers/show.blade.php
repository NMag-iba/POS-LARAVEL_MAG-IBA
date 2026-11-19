<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>

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

    <h1>Customer Details</h1>

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
        <p><strong>Full Name:</strong> {{ $customer->full_name }}</p>
        <p><strong>Email:</strong> {{ $customer->email }}</p>
        <p><strong>Phone:</strong> {{ $customer->phone }}</p>

        <a class="back-button" href="{{ route('customers.index') }}">
            Back to Customers
        </a>
    </div>

</body>
</html>