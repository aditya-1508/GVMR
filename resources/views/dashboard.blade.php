<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Full-page background with gradient */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #f7f7f7, #e2e2e2);
            /* Light gradient background */
            color: #333;
        }

        /* Dashboard container layout */
        .dashboard-container {
            width: 90%;
            max-width: 1200px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 80px;
            /* Space for top buttons */
        }

        /* Heading style */
        h1 {
            font-size: 40px;
            margin-bottom: 40px;
            color: #333;
        }

        /* Buttons container */
        .buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1000px;
        }

        /* Styling for buttons as tiles */
        .button {
            display: block;
            padding: 30px;
            font-size: 20px;
            color: #fff;
            background: #007bff;
            /* Blue background */
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 0;
            transition: opacity 0.3s ease;
        }

        .button:hover::before {
            opacity: 0;
        }

        .button:hover {
            background: #0056b3;
            /* Darker blue on hover */
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .button:active {
            transform: translateY(3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        /* Top right corner buttons */
        .top-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            z-index: 1;
            /* Ensure buttons are above other content */
        }

        .top-button {
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background: #28a745;
            /* Green background */
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
        }

        .top-button:hover {
            background: #218838;
            /* Darker green on hover */
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .top-button:active {
            transform: translateY(1px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 20px;
                padding-top: 70px;
                /* Adjust space for top buttons */
            }

            .button {
                font-size: 18px;
                padding: 20px;
            }

            h1 {
                font-size: 32px;
            }

            .top-buttons {
                top: 10px;
                right: 10px;
                gap: 10px;
            }

            .top-button {
                font-size: 14px;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <div class="top-buttons">

            <a href="{{ url('/') }}" class="top-button">Home</a>
        </div>

        <div class="buttons">
            <a href="{{ url('/new_notice') }}" class="button">Send New Notice</a>

        </div>
    </div>
</body>

</html>