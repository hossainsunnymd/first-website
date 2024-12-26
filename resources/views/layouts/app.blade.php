<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Custom Google font-->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href=" {{ asset('frontend/assets/favicon.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{asset('frontend/css/styles.css')}} " rel="stylesheet" />
</head>
<body>

@include('Components.nav')

 @yield('content')

@include('Components.footer')

</body>
<script src=" {{asset('frontend/js/scripts.js')}} "></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>
