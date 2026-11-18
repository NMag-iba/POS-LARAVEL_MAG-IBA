<h1>Edit Customer</h1>

<form method="POST" action="{{ route('customers.update', $customer) }}">
    @csrf
    @method('PATCH')

    <label>Full Name</label>
    <input type="text" name="full_name"
           value="{{ old('full_name', $customer->full_name) }}">

    @error('full_name')
        <p>{{ $message }}</p>
    @enderror

    <label>Email</label>
    <input type="email" name="email"
           value="{{ old('email', $customer->email) }}">

    @error('email')
        <p>{{ $message }}</p>
    @enderror

    <label>Phone</label>
    <input type="text" name="phone"
           value="{{ old('phone', $customer->phone) }}">

    @error('phone')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Update Customer</button>
</form>