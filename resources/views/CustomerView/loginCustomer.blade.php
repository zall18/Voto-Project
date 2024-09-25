<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #F8F9FA;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #DBCC8F;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease-in-out;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .login-container h1 {
            font-weight: 700;
            color: #61687B;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control {
            background-color: #f5f5f5;
            border: 1px solid #61687B;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .btn-custom {
            background-color: #F8F9FA;
            color: #DBCC8F;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-weight: 600;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #61687B;
        }

        .form-text {
            color: #F8F9FA;
            text-align: center;
            margin-top: 20px;
        }

        .form-text a {
            color: #61687B;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .form-text a:hover {
            color: #DBCC8F;
        }

        .form-label {
            font-weight: 600;
            color: #F8F9FA;
        }

        .login-container:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            background-color: #F8F9FA;
            border-radius: 50px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1 style="color: #F8F9FA">Login</h1>
        <form action="/loginCustomer/proccess" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-custom">Login</button>
        </form>
        <p class="form-text mt-4">Don't have an account? <a href="/register">Sign up</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
