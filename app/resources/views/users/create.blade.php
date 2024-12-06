<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Create a New User</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display Success Message -->
    @if (session('success'))
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <!-- Form to Create User -->
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br>

        <button type="submit">Create User</button>
    </form>
</body>
</html>
