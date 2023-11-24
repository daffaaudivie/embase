<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMBASE | @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
        body {
            padding-top: 56px; /* Adjust based on your top bar height */
        }

        .sidebar {
            height: 100vh;
            background-color: #006400; /* Dark background color */
            color: white; /* Text color */
            width: 200px; /* Adjust sidebar width as needed */
            position: fixed;
            top: 56px; /* Adjust based on your top bar height */
            left: 0;
            bottom: 0;
            overflow-y: auto; /* Enable vertical scrolling if content is too long */
        }

        .sidebar a {
            color: white;
        }

        .content {
            padding: 10px;
            text-align: center; 
            margin: 0 auto; /* Add margin: 0 auto to center the element horizontally */
        }

        /* Add class flex-grow-1 to fill remaining space next to sidebar */
        .flex-grow-1 {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">EMBASE</a>
    </nav>

    <!-- Sidebar -->
    <div class="d-flex">
        <nav class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data">
                        <i class="fas fa-users"></i> Data Petugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/agen">
                        <i class="fas fa-address-card"></i> Data Agen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data-pangkalan">
                        <i class="fas fa-building"></i> Data Pangkalan
                    </a>
                </li>
                <!-- Add more links as needed -->
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content flex-grow-1"> <!-- Add flex-grow-1 class to fill remaining space -->
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
