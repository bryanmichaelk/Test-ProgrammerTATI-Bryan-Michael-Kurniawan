<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex min-h-screen">
        <!-- Sidebar -->
       @include('layouts.sidebar')

        <!-- Main Content -->
        <main class="flex-grow bg-white shadow-md p-6">
            @yield('contents')
        </main>
    </div>
</body>
</html>