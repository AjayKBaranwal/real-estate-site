<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ __('MyCompany') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="/public/img/favicon.png" rel="icon">
  <link href="/public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/public/css/style.css" rel="stylesheet">

</head>
<body>

  @include('components.navigation')
  @yield('content')
  @include('components.footer')

</body>
</html>
