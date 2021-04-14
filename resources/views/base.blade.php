<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Biologia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        {{-- <link href="img/favicon.ico" rel="icon"> --}}

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>Bio</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ route('index') }}" class="nav-item nav-link active">Domov</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Rocniky</a>
                                    <div class="dropdown-menu">
                                        @foreach($levels as $level)
                                            <a href="{{ route('level', ['id' => $level->id]) }}" class="dropdown-item">{{ $level->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Stiahni vsetko</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            @yield('content')

            <!-- Newsletter Start -->
            {{-- <div class="newsletter"> --}}
            {{--     <div class="container"> --}}
            {{--         <div class="section-header"> --}}
            {{--             <h2>Subscribe Our Newsletter</h2> --}}
            {{--         </div> --}}
            {{--         <div class="form"> --}}
            {{--             <input class="form-control" placeholder="Email here"> --}}
            {{--             <button class="btn">Submit</button> --}}
            {{--         </div> --}}
            {{--     </div> --}}
            {{-- </div> --}}
            <!-- Newsletter End -->


            <!-- Footer Start -->
            <div class="footer">
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('storage/js/main.js') }}"></script>
    </body>
</html>
