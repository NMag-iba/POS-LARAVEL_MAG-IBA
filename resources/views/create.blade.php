<h1>Create Customer</h1>

<form method="POST" action="{{ route('customers.store') }}">
    @csrf

    <label>Full Name</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}">
    @error('full_name')
        <p>{{ $message }}</p>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror

    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone') }}">
    @error('phone')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Save Customer</button>
</form>