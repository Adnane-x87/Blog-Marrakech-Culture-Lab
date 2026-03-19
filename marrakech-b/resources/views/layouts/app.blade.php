<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marrakech Cultural Scene - Discover Local Arts & Events</title>
    <meta name="description" content="Discover Marrakech's vibrant cultural scene. Find art exhibitions, music concerts, theater performances, and cultural workshops in the heart of Morocco.">
        
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

  @include('frontend.partials.style')
<base target="_blank">
</head>
<body>
    @include('frontend.partials.nav')

  

    <!-- Hero Section with Video -->
       @yield('content')

    <!-- Footer -->
   

    @include('frontend.partials.footer')

    <!-- Bootstrap 5 JavaScript -->

    @include('frontend.partials.script')
    @stack('scripts')
 
</body>
</html>