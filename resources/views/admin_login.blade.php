<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Reset default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Full-page background with linear gradient */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            /* Example gradient from pink to orange */
        }

        /* Container for centering the login box */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        /* Styling for the login box */
        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 360px;
        }

        /* Heading style */
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Styling for input fields */
        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            border-color: #6a11cb;
        }

        /* Floating labels */
        .input-group label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #aaa;
            pointer-events: none;
            transition: 0.3s ease;
        }

        .input-group input:focus+label,
        .input-group input:valid+label {
            top: -10px;
            font-size: 12px;
            color: #6a11cb;
        }

        /* Styling for the submit button */
        button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background-color: #6a11cb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2575fc;
        }

        /* Alert box for errors */
        .alert {
            margin-bottom: 15px;
            padding: 10px;
            color: #fff;
            background-color: #e74c3c;
            border-radius: 5px;
        }

        .alert.alert-danger {
            background-color: #e74c3c;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Admin Login</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>