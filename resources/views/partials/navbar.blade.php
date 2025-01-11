<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
Expand
message.txt
5 KB
KENEK TRUK — Today at 16:21
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
Expand
message.txt
6 KB
Aeru True DemonLord — Today at 16:46
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            font-size: 1.7rem;
            font-weight: bold;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            color: #fff;
        }
        .navbar-brand i {
            font-size: 2rem;
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin: 0 15px;
            transition: color 0.3s, background-color 0.3s;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .navbar-nav .nav-link:hover {
            background-color: #fff;
            color: #ff7e5f;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            background-color: #fff;
            border-radius: 3px;
            width: 30px;
            height: 3px;
            display: block;
            position: relative;
        }
        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            width: 30px;
            height: 3px;
            background-color: #fff;
            border-radius: 3px;
            display: block;
            position: absolute;
            left: 0;
        }
        .navbar-toggler-icon::before {
            top: -8px;
        }
        .navbar-toggler-icon::after {
            top: 8px;
        }

        /* Responsive Styling */
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
            }
            .navbar-nav .nav-link {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header class="navbar navbar-expand-lg text-white">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <i class="bi bi-film"></i> TugasMovie
        </a>
        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Role -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('roles.index') }}">
                        <i class="bi bi-people-fill"></i> Peran
                    </a>
                </li>
                <!-- User -->
... (38 lines left)
Collapse
message.txt
5 KB
﻿
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            font-size: 1.7rem;
            font-weight: bold;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            color: #fff;
        }
        .navbar-brand i {
            font-size: 2rem;
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin: 0 15px;
            transition: color 0.3s, background-color 0.3s;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .navbar-nav .nav-link:hover {
            background-color: #fff;
            color: #ff7e5f;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            background-color: #fff;
            border-radius: 3px;
            width: 30px;
            height: 3px;
            display: block;
            position: relative;
        }
        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            width: 30px;
            height: 3px;
            background-color: #fff;
            border-radius: 3px;
            display: block;
            position: absolute;
            left: 0;
        }
        .navbar-toggler-icon::before {
            top: -8px;
        }
        .navbar-toggler-icon::after {
            top: 8px;
        }

        /* Responsive Styling */
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
            }
            .navbar-nav .nav-link {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header class="navbar navbar-expand-lg text-white">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <i class="bi bi-film"></i> TugasMovie
        </a>
        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Role -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('roles.index') }}">
                        <i class="bi bi-people-fill"></i> Peran
                    </a>
                </li>
                <!-- User -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('users.index') }}">
                        <i class="bi bi-person-circle"></i> Pengguna
                    </a>
                </li>
                <!-- Cast -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('casts.index') }}">
                        <i class="bi bi-star-fill"></i> Pemeran
                    </a>
                </li>
                <!-- Genre -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('genres.index') }}">
                        <i class="bi bi-tags-fill"></i> Genre
                    </a>
                </li>
                <!-- Movie -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('movies.index') }}">
                        <i class="bi bi-film"></i> Film
                    </a>
                </li>
                <!-- Review -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('reviews.index') }}">
                        <i class="bi bi-chat-dots-fill"></i> Ulasan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>