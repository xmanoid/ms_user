<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Object-Based Learning</title>
    <!-- Include Bootstrap CSS (you can replace this with your preferred CSS framework) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .dashboard-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            text-align: center;
        }
        .dashboard-buttons {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container dashboard-container">
    <div class="card dashboard-buttons">
        <h2 class="text-center mb-4">Object-Based Learning Dashboard</h2>
        
        @guest
            <div class="btn-container">
                <a href="{{ route('login') }}" class="btn btn-primary btn-block">Login</a>
            </div>
            <div class="btn-container">
                <a href="{{ route('register') }}" class="btn btn-secondary btn-block">Register</a>
            </div>
        @else
            <p>Hello, {{ Auth::user()->name }}! Welcome back.</p>
            <p><a href="{{ route('home') }}">Go to Home</a></p>
            <p><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</div>

<!-- Include Bootstrap JS (you can replace this with your preferred JS framework) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>