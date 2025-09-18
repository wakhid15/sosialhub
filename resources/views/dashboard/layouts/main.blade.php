<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Icons & Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-rem.png') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Sosial-Hub</title>
</head>


<body>

    @include('dashboard.partials.navbar')
    @include('dashboard.partials.sidebar')
    <div id="scrollspyHeading1">

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-3">
                @yield('container')
            </div>
        </main>

    </div>
</body>


<script>
    $(document).ready(function() {

        [...document.querySelectorAll('.first-column')].map(column => {
            column.style.setProperty('--animation', 'slide');
            column.style.setProperty('height', '200%');
            column.innerHTML = column.innerHTML + column.innerHTML;
        });

    });
</script>
<script>
    $(window).on('load', function() {
        $(".loadding-page").delay(1000).fadeOut(200);
        $(".cssload-box-loading").on('click', function() {
            $(".cssload-box-loading").fadeOut(200);
        })
    })
</script>


</html>
