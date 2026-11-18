<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>

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

        .add-customer {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 8px 15px;
            border: 1px solid #767676;
            background-color: #efefef;
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h1>Customer Accounts</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customer Accounts</a>
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <a class="add-customer" href="{{ route('customers.create') }}">
        Add Customer
    </a>

    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer) }}">Edit</a>
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