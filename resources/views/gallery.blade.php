<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/4acb7377c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css12/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #ff4e50, #f9d423, #69ff97, #2bcbba, #8e44ad, #3498db, #ff6347);
            background-size: 400% 400%;
            animation: gradientAnimation 20s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Keyframe animation for the gradient */

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Gallery container */

        .gallery-container {
            width: 90%;
            max-width: 1200px;
            text-align: center;
            color: white;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
        }

        /* Gallery title */

        .gallery-container h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #f9d423;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Gallery items */

        .gallery-item {
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 15px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.6);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.2);
        }

        /* Image caption overlay */

        .gallery-item::before {
            content: attr(alt);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 1.2em;
            text-align: center;
            opacity: 0;
            transform: translateY(100%);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .gallery-item:hover::before {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <section id="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark text-dark fixed-top bg-light" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="container-fluid">
                <!-- Navbar Brand (Logo) -->
                <a class="navbar-brand" href="#">
                    <img src="img/IMG-20240729-WA0021-removebg-preview.png" alt="Brand Logo" style="height: 5rem; width: 7rem;">
                </a>

                <!-- Toggler for Mobile View -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Content -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                        <!-- Nav Items -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>

                <!-- Search Form -->
                <div class="d-flex justify-content-end">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>


    <div class="gallery-container">
        <h1>Image Gallery</h1>
        <div class="row">
            <!-- Add your images here -->
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2391.JPG" alt="Image 1">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2415.JPG" alt="Image 3">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2477.JPG" alt="Image 5">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2478.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2490.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2503.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2506.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_2507.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_3271.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_3461.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_4220.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230705-WA0006.jpg" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_4167.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230713-WA0018.jpg" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230708-WA0059.jpg" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230705-WA0009.jpg" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/DSC_6886.JPG" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230713-WA0026.jpg" alt="Image 6">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="img/New folder/IMG-20230713-WA0023.jpg" alt="Image 6">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>