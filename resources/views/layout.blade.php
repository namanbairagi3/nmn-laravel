{{-- resources/views/layout.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel CRUD')</title>
    <!-- Add any common styles or scripts here -->
</head>
<body>
    <header>
        <!-- Optionally, add static header content here -->
    </header>

    <div class="container">
        @yield('content') <!-- The section where page content will be injected -->
    </div>

    <footer>
        <!-- Optionally, add static footer content here -->
    </footer>
</body>
</html>
 