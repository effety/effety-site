<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robot" content="">
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
    <title>Bitcoin Trading</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css" integrity="sha512-lauN4D/0AgFUGvmMR+knQnbOADyD/XuQ8VF18I8Ll0+TLvsujshyxvU+uzogmQbSq6qJd5jnUdYtK8ShxXMlSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{("assets/home/crypto-club/css/style.css")}}">
</head>
<body>

    <header class="header col-md-10 mx-md-auto rounded-pill my-md-1 border" id="header">
        <div class="container-md">
            <nav class="navbar navbar-expand-md py-2">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav">
                    <ul class="navbar-nav my-2 my-md-0 me-auto flex-column flex-md-row"> <!-- Added flex for column on small screens -->
                        <li class="nav-item"><a class="nav-link active text-white" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/features">Features</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/resources">Resources</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
                    </ul>
                    <button class="btn btn-light rounded-pill ms-auto p-2 bd-highlight fit-content">
                        <a href="/get-started" class="text-decoration-none">Get Started</a>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="footer bg-body py-3" id="footer">
        <div class="container-md">
            <div class="row">
                <div class="col-md-8 mx-md-auto">
                    <div class="footer-info d-flex flex-column align-items-center">
                        <div class="logo my-2">
                            <img src="{{("assets/home/crypto-club/img/logo.jpg")}}" alt="logo" width="160" height="160" class="d-block mx-=auto">
                        </div>
                        <div class="footer-icons d-flex justify-content-center w-100 border-bottom gap-2 my-3 py-3">
                            <a href="/"><i class="fa fa-brands fa-twitter"></i></a>
                            <a href="/"><i class="fa fa-brands fa-linkedin"></i></a>
                            <a href="/"><i class="fa fa-brands fa-facebook"></i></a>
                            <a href="/"><i class="fa fa-brands fa-github"></i></a>
                            <a href="/"><i class="fa fa-brands fa-dribbble"></i></a>
                            <a href="/"><i class="fa fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="copyright text-center my-2">
                            <p class="lead">Copyright 2025 &copy; Swiss Crypto Club All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js" integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js" integrity="sha512-wb6S3DSfVBkb+hSBITIgbDGVQP+2h6cHRCSGjWXHqbyehs8kLtjgaIwp/vvZJNxX0NaVxhTGUetfD11t/vD2bw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/v4-shims.min.js" integrity="sha512-T2pk94x1bkMAO9y5NzvtA0wQUt9ddhz1NWlWLLV/Tu51fB/g0Sd6I5sCax5DR2/rgZ4fqRaCH4dS8P5dt9rvmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{('assets/home/crypto-club/js/purecounter_vanilla.js')}}"></script>
    <script src="{{('assets/home/crypto-club/js//script.js')}}"></script>
</body>
</html>