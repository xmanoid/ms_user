<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Object-Based Learning</title>
    <!-- Include Bootstrap CSS (you can replace this with your preferred CSS framework) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
        .register-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container register-container">
    <div class="card register-form">
        <h2 class="text-center mb-4">Register</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <p class="text-center mt-3">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </p>
    </div>
</div>

<!-- Include Bootstrap JS (you can replace this with your preferred JS framework) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>