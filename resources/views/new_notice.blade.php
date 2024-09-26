<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar {
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 40px;
            /* Adjust the logo size */
            width: auto;
        }

        .navbar-nav .nav-link {
            margin-right: 1rem;
            /* Adjust spacing between nav items */
        }

        .navbar-toggler {
            border: none;
            /* Remove border from the toggler */
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"%3E%3Cpath stroke="currentColor" stroke-width="2" d="M4 6h22M4 15h22M4 24h22" /%3E%3C/svg%3E');
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

    <div class="container mt-5">
        <h1>Create New Notice</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{url('/notices')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Notice</button>
        </form>
    </div>
</body>

</html>