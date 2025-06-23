<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barista Cafe HTML CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/vegas.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dr+Sugiyama&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
<style>
    h2 {
    font-family: 'Dr Sugiyama', cursive;
    word-spacing: 10; /* Adjust this value as needed */
}

p {
      font-family: 'Harmattan', sans-serif;
      font-size: 1.2rem;
      line-height: 1.6;     /* Adjusts spacing between lines */
      word-spacing: 2px;    /* Adjusts spacing between words */
      letter-spacing: 0.5px;/* Adjusts spacing between letters */
      color: #444;
    }

    </style>

    <!--

Tooplate 2137 Barista Cafe

https://www.tooplate.com/view/2137-barista-cafe

Bootstrap 5 HTML CSS Template

-->
</head>

<body>
    @include('partials.navigationBar')
    @yield('content')
    @yield('About Us')
    @include('partials.footer')
</body>
<!-- JAVASCRIPT FILES -->
<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/click-scroll.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/custom.js"></script>

<!-- AOS Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- AOS Init -->
<script>
    AOS.init(
        {
            duration: 800, // Animation duration in milliseconds
            easing: 'ease-in-out', // Animation easing function
            offset: 100, // Offset (in pixels) from the original trigger point
        }
    );

</script>

</html>
