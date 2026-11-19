<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>

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
            font-size: 13px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover,
        .back-button:hover {
            background-color: #dcdcdc;
        }
    </style>
</head>

<body>

    <h1>Edit Customer</h1>

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

    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="full_name">Full Name:</label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name', $customer->full_name) }}"
            >

            @error('full_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $customer->email) }}"
            >

            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>

        <input
            type="tel"
            id="phone"
            name="phone"
            value="{{ old('phone', $customer->phone) }}"
            inputmode="numeric"
            minlength="11"
            maxlength="11"
            pattern="[0-9]{11}"
            required
        >

            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit">Update Customer</button>

            <a class="back-button" href="{{ route('customers.index') }}">
                Go Back
            </a>
        </div>
    </form>

</body>
</html>