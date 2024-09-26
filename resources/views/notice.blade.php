<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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

        .container {
            margin-top: 30px;
            max-width: 800px;
            padding: 20px;
        }

        .notice {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            cursor: pointer;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
            overflow: hidden;
            max-height: 100px;
        }

        .notice.open {
            max-height: 1000px;
            padding: 20px;
        }

        .notice h1 {
            font-size: 1.8em;
            margin-bottom: 10px;
            color: #333;
        }

        .notice p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
        }

        .notice .date {
            font-style: italic;
            color: #888;
            margin-bottom: 10px;
        }

        .btn-load-more {
            margin-top: 20px;
        }

        h1 {
            background-color: rgba(0, 0, 0, 0.5);
            /* Add a semi-transparent background */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    @php
    use Illuminate\Support\Facades\DB;
    use Carbon\Carbon;

    // Fetch notices from the database
    $notices = DB::table('notices')->orderBy('date', 'desc')->get();
    @endphp

    <!-- Navbar -->
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

    <!-- Main Container for Notices -->
    <div class="container">
        <div id="notices-container">
            @foreach ($notices as $notice)
            <div class="notice">
                <h1>{{ $notice->title }}</h1>
                <p class="date">Date: {{ Carbon::parse($notice->date)->format('F j, Y') }}</p>
                <p class="text-justify">{{ $notice->content }}</p> <!-- Text justified -->
            </div>
            @endforeach
        </div>
        <button id="load-more-btn" class="btn btn-primary btn-load-more">Load More</button>
    </div>

    <script>
        document.querySelectorAll('.notice').forEach(notice => {
            notice.addEventListener('click', function() {
                this.classList.toggle('open');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const notices = document.querySelectorAll('.notice');
            const loadMoreBtn = document.getElementById('load-more-btn');
            let visibleCount = 10; // Initial number of notices to show

            // Initially hide all notices except the first 10
            notices.forEach((notice, index) => {
                if (index >= visibleCount) {
                    notice.style.display = 'none';
                }
            });

            loadMoreBtn.addEventListener('click', () => {
                const hiddenNotices = Array.from(notices).filter(notice => notice.style.display === 'none');
                hiddenNotices.slice(0, 10).forEach(notice => {
                    notice.style.display = 'block';
                });

                if (hiddenNotices.length <= 10) {
                    loadMoreBtn.style.display = 'none'; // Hide button if no more notices to show
                }
            });
        });
    </script>
</body>

</html>