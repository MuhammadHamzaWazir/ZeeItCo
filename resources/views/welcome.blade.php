<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
        </script>
        <title>Zee IT Co</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body id="page-top">
        <div id="app">
            <home-component />
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
         <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/typed.js/typed.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>
