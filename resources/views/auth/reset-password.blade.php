<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #1E90FF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
    @endif

    <h2>Reset Password</h2>
    
    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{request()->token}}">
        <input type="hidden" name="email" value="{{request()->email}}">

        <input type="hidden" name="token" value="{{ $token }}">

        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Update Password</button>
    </form>
</div>

</body>
</html>
