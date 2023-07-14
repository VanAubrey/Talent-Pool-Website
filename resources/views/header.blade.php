<!-- resources/views/header.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Title</title>
    <!-- Include your CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Include your JavaScript files -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Your header content goes here -->
    <header>
        <h1>Your Application Header</h1>
        <!-- Add any other header elements as needed -->
    </header>
    
    <!-- The content from other views will be inserted here -->
    @yield('content')
    
    <!-- Your footer content goes here -->
    <footer>
        <p>&copy; {{ date('Y') }} Your Application Footer</p>
    </footer>
</body>
</html>
