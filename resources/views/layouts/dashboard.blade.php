<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .dashboard-sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .dashboard-sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .dashboard-sidebar a:hover {
            background-color: #495057;
            color: white;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <aside class="dashboard-sidebar p-3">
        <h4 class="text-white mb-4">Dashboard</h4>
        <nav>
            <a href="/dashboard/books">Books</a>
            <a href="/dashboard/services">Services</a>
            <a href="/dashboard/venues">Venues</a>
            <a href="/">← Back to Home</a>
        </nav>
    </aside>

    <main class="flex-grow-1 p-4">
        <div class="container-fluid">
            <h1 class="mb-4">@yield('title', 'Dashboard')</h1>
            @yield('content')
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
