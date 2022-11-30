@include('includes.head')

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="{{url('tel:+919305390145')}}" class="mr-2"><span class="fa fa-phone mr-1"></span> +91
                            9628319979</a>
                        <a href="{{url('mailto:soni.dfreeindia.com')}}"><span class="fa fa-paper-plane mr-1"></span>
                            <span class="__cf_email__"
                                data-cfemail="146d7b61667179757d78547179757d783a777b79">shivam786098jais00@gmail.com</span></a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media mr-4">
                        <!-- <p class="mb-0 d-flex">
<a href="{{url('/')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
<a href="{{url('/')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
<a href="{{url('/')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
<a href="{{url('/')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Jaiswal <span>Sweets</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('/products')}}" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
