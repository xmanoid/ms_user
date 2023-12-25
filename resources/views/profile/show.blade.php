
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        User Profile
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Name:</h5>
                                <p class="card-text">{{ Auth::user()->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <h5 class="card-title">Email:</h5>
                                <p class="card-text">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="{{ url('/') }}" class="btn btn-secondary">
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>