<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .nav-link {
        position: relative;
        color: white;
        font-weight: bold;
    }

    .nav-link::after {
        opacity: 0;
        transition: all 0.2s;
        content: '';
        height: 5px;
        width: 100%;
        background-color: turquoise;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .nav-link:hover::after {
        opacity: 1;
    }

    .nav-item:hover {
        background-color: #48484882;
        border-radius: 5px;
        color: turquoise;
    }

    .navbar {
        margin-bottom: 20px;
        background-color: rgba(128, 128, 128, 0.445);
    }

    .container {
        margin-top: 20px;
    }

    .navbar-nav .nav-item {
        margin-right: 10px;
    }

    .navbar-brand {
        margin-left: 50px;
        margin-right: 50px;
    }

    footer {
        margin-top: 50px;
        padding: 5px;
        background-color: rgba(0, 0, 0, 0.5);
        top: 0;
        left: 0;
        z-index: -1;
    }

    .foot{
        font-size: 12px;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/assets/logo (2).png" alt="logo" style="max-width: 600px; max-height: 90px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color: wheat">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="movieDetails" style="color: wheat">Series Chronological</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about" style="color: wheat">About Author</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
</nav>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="foot">&copy; 2023 Harry Potter: The Chronicles. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
