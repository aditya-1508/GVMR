<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4acb7377c4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            margin-bottom: 30px;
        }

        .container {
            max-width: 900px;
            padding: 60px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        body {
            /* URL of your background image */
            background-image: url('/img/pexels-javon-swaby-197616-3314328.jpg');

            /* Make the background cover the entire area */
            background-size: cover;

            /* Keep the image fixed to the viewport */
            background-attachment: fixed;

            /* Center the background image */
            background-position: center;

            /* Ensure that the background fills the container */
            background-repeat: no-repeat;

            /* This makes sure the container takes up the full height */
            height: 100vh;

            /* Optional: You can overlay content on the image */
            color: white;

            font-family: 'Roboto', sans-serif;
            background-color: #F7F9F2;
            margin: 0;
            padding-top: 80px;
            /* To avoid content being hidden behind the navbar */
            color: #333;
        }

        .navbar {
            background-color: #ffffff;
            padding: 10px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            /* Ensure navbar stays above other elements */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* Optional: add a shadow to the navbar */
        }

        .navbar .navbar-brand img {
            height: 40px;
        }


        .contact-form input,
        .contact-form textarea {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 15px;
            width: 100%;
            font-size: 1em;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            border: none;
            border-radius: 5px;
            padding: 15px;
            background-color: #007bff;
            color: white;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .contact-form button:active {
            background-color: #003d80;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #343a40;
            font-size: 2.5em;
            font-weight: 700;
            animation: fadeIn 1s ease-in-out;
        }

        .alert-success {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <section id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img style="height:5rem; width:7rem;" src="img/IMG-20240729-WA0021-removebg-preview.png" alt=""></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item text-dark"><a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item text-dark"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
                        <li class="nav-item text-dark"><a class="nav-link active" aria-current="page" href="{{url('/contact')}}">Contact</a></li>
                        <li class="nav-item text-dark"><a class="nav-link" href="{{url('/notice')}}">Notice</a></li>
                        <li class="nav-item text-dark"><a class="nav-link" href="{{url('/admin')}}"><button class="btn btn-primary">Admin ?</button></a></li>

                    </ul>
                    <form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success" type="submit">Search</button></form>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <h1>Contact Us</h1>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea name="message" rows="4" placeholder="Your Message" required>{{ old('message') }}</textarea>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>