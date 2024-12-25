<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand fw-semibold text-white" href="#" style="margin-left: 50px;">
                <img src="logo.png" alt="Logo" style="width: 100px; height: auto; margin-right: 100px;">
            </a>

            <!-- Toggle button untuk mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (!Auth::check())
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link text-white" href="{{ route('profile') }}">Daftar Menu</a>
                    <a class="nav-link text-white" href="{{ route('about') }}">Profil</a>
                    <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
            <div class="d-flex">
                <a href="{{ route('signup') }}" class="btn btn-light mx-2">Signup</a>
                <a href="{{ route('signin') }}" class="btn btn-light mx-2">Signin</a>
            @else
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link text-white" href="{{ route('profile') }}">Daftar Menu</a>
                    <a class="nav-link text-white" href="{{ route('about') }}">Profile</a>
                    <a class="nav-link text-white" href="{{ route('categories.index') }}">Category</a>
                    <a class="nav-link text-white" href="{{ route('posts') }}">Posts</a>
                    <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
            <a href="{{route('logout')}}" class="btn btn-light mx-2">Log out</a>
            @endif
        </div>
    </nav>

    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

<style>
    /* Custom styles for the navbar */
    .navbar {
        padding: 10px 0; /* Adjust navbar height */
    }

    .navbar-brand img {
        width: 100px; /* Logo width */
        height: auto;
    }

    .navbar-nav .nav-item .nav-link {
        font-size: 16px; /* Font size for navbar links */
        font-weight: 500; /* Make the links bold */
        color: #fff !important; /* White color for the links */
        padding: 8px 15px; /* Padding around the links */
    }

    .navbar-nav .nav-item .nav-link:hover {
        background-color: rgba(134, 134, 134, 0.1); /* Background on hover */
        border-radius: 5px; /* Rounded corners on hover */
    }

    .navbar-dark .navbar-toggler-icon {
        background-color: #fff; /* White toggle icon */
    }

    .navbar-nav .nav-item .btn-light {
        background-color: rgb(191, 191, 191); /* Light button background */
        color: #000; /* Dark text color */
        font-weight: 500;
    }

    .navbar-nav .nav-item .btn-light:hover {
        background-color: rgb(255, 255, 255); /* Button hover color */
        color: #000; /* Text color stays the same */
    }

    /* Custom background for navbar items */
    .custom-navbar {
        background-color:rgba(255, 132, 0, 0.76); /* Ganti dengan warna pilihan Anda */
    }

    /* Custom spacing for the navbar */
    .container-fluid {
        padding-left: 50px; /* Adjust padding on the left side of the container */
    }

    @media (max-width: 768px) {
        /* Adjustments for smaller screens */
        .navbar {
            padding: 5px 0; /* Smaller padding on mobile */
        }

        .navbar-brand img {
            width: 80px; /* Smaller logo on mobile */
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 14px; /* Smaller font size for navbar links on mobile */
            padding: 8px; /* Reduce padding on mobile */
        }

        .navbar-nav .nav-item .btn-light {
            font-size: 14px; /* Smaller button text on mobile */
            padding: 5px 10px; /* Reduce padding for the button */
        }
    }
</style>
