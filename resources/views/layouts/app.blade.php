<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('flex/flexslider.css ') }}" type="text/css">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="style.js"></script>
    
    <script type="    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>   
    charset="utf-8">
       $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
    			itemWidth: 210,
    			itemMargin: 5controlNav: false,
                directionNav:true
            });
        });
    </script>
    <script>
        $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
    </script>
    <!-- Fonts -->
    
    
    <style>
        body {
    margin: 0;
    padding: 0;

    background-image: url(bg/bg.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

.post {
    padding: inherit;
    height: fit-content;
}

.bgp {
    height: fit-content;
    /*background-color:azure;*/
}

.post:hover {
    background-color: azure;
    border-radius: 15%;
    font-size: 1.5em;
}

.img-post-en {
    border-radius: 15%;
}

.body {
    padding-left: 5px;
    padding-right: 5px;
}

.nbg {
    /*background: #343a40;*/
    background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, #ffffff40 100%, rgba(0, 0, 0, 0.9) 100%);
}

.bgn {
    background: #0000003d;
}

.bgr {
    background: #21252936;
}

.bgf {
    background: #f5f5f5c9;
    padding: 10px;
}

.bgf a:hover {
    font-size: 30px;
}

article {
    width: 100%;
    height: ;
    border: 1px solid #0062cc3b;
    background: #f8f9fa24;
}

.search-en {}

* {
    box-sizing: border-box
}

img {
    max-width: 100%
}

.contenu_carou_auto {

    margin: 2rem auto;
    width: 420px;
    height: 279px;
    perspective: 8000px
}

.caroussel-image {

    animation: rotation 24s infinite alternate linear;
    transform-style: preserve-3d;
    position: relative;

}

.caroussel-image img {

    position: absolute;
    top: 0;
    left: 0;


}



.caroussel-image img {

    filter: drop-shadow(0 12px 5px hsla(0, 0%, 0%, .4));
    width: 400px;
    height: 266px;
    left: 10px;
    outline: 1px solid transparent;
    backface-visibility: hidden
}

.caroussel-image img:nth-child(1) {

    transform: translate3d(0, 0, 495px)
}

.caroussel-image img:nth-child(2) {

    transform: rotateY(45deg) translateZ(495px)
}

.caroussel-image img:nth-child(3) {

    transform: rotateY(90deg) translateZ(495px)
}

.caroussel-image img:nth-child(4) {

    transform: rotateY(135deg) translateZ(495px)
}

.caroussel-image img:nth-child(5) {

    transform: rotateY(180deg) translateZ(495px)
}

.caroussel-image img:nth-child(6) {

    transform: rotateY(225deg) translateZ(495px)
}

.caroussel-image img:nth-child(7) {

    transform: rotateY(270deg) translateZ(495px)
}

.caroussel-image img:nth-child(8) {

    transform: rotateY(315deg) translateZ(495px)
}

@keyframes rotation {
    from {
        transform: rotatey(0)
    }

    to {
        transform: rotatey(1turn)
    }
}

.rating {
    direction: rtl;
}

.rating a {
    color: #aaa;
    text-decoration: none;
    font-size: 1.5em;
    transition: color .4s;
}

.rating a:hover,
.rating a:focus,
.rating a:hover~a,
.rating a:focus~a {
    color: orange;
    cursor: pointer;
}

#animated-background {
    animation: bgfade 15s infinite;
    background-size: cover;
    background-position: center;
    background-color: #000;
    position: relative;
}

@keyframes bgfade {
    0% {
        background-image: url(bg/bg.jpg);
    }

    25% {
        background-image: url(bg/bg1.jpg);
    }

    50% {
        background-image: url(bg/bg2.jpg);
    }

    75% {
        background-image: url(bg/bg3.jpg);
    }

    100% {
        background-image: url(bg/bg5.jpg);
    }
}

/****** add a background overlay *******/
#animated-background:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: black;
    opacity: 0.3;
}

.table>tbody>tr>td,
.table>tfoot>tr>td {
    vertical-align: middle;
}

@media screen and (max-width: 600px) {
    table#cart tbody td .form-control {
        width: 20%;
        display: inline !important;
    }

    .actions .btn {
        width: 36%;
        margin: 1.5em 0;
    }

    .actions .btn-info {
        float: left;
    }

    .actions .btn-danger {
        float: right;
    }

    table#cart thead {
        display: none;
    }

    table#cart tbody td {
        display: block;
        padding: .6rem;
        min-width: 320px;
    }

    table#cart tbody tr td:first-child {
        background: #333;
        color: #fff;
    }

    table#cart tbody td:before {
        content: attr(data-th);
        font-weight: bold;
        display: inline-block;
        width: 8rem;
    }



    table#cart tfoot td {
        display: block;
    }

    table#cart tfoot td .btn {
        display: block;
    }

}

.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}

.category_block li:hover {
    background-color: #007bff;
}

.category_block li:hover a {
    color: #ffffff;
}

.category_block li a {
    color: #343a40;
}

.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}

.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}

.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}

.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}

.product_rassurance .list-inline li:hover {
    color: #343a40;
}

.reviews_product .fa-star {
    color: gold;
}

.pagination {
    margin-top: 20px;
}



.product-image {
    float: left;
    width: 20%;
}

.product-details {
    float: left;
    width: 37%;
}

.product-price {
    float: left;
    width: 12%;
}

.product-quantity {
    float: left;
    width: 10%;
}

.product-removal {
    float: left;
    width: 9%;
}

.product-line-price {
    float: left;
    width: 12%;
    text-align: right;
}

/* This is used as the traditional .clearfix class */
.group:before,
.shopping-cart:before,
.column-labels:before,
.product:before,
.totals-item:before,
.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
    content: '';
    display: table;
}

.group:after,
.shopping-cart:after,
.column-labels:after,
.product:after,
.totals-item:after {
    clear: both;
}

.group,
.shopping-cart,
.column-labels,
.product,
.totals-item {
    zoom: 1;
}

/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before,
.product .product-line-price:before,
.totals-value:before {
    content: '$';
}

/* Body/Header stuff */
body {
    padding: 0px 30px 30px 20px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 100;
}

h1 {
    font-weight: 100;
}

label {
    color: #aaa;
}

.shopping-cart {
    margin-top: -45px;
}

/* Column headers */
.column-labels label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.column-labels .product-image,
.column-labels .product-details,
.column-labels .product-removal {
    text-indent: -9999px;
}

/* Product entries */
.product {
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.product .product-image {
    text-align: center;
}

.product .product-image img {
    width: 100px;
}

.product .product-details .product-title {
    margin-right: 20px;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.product .product-details .product-description {
    margin: 5px 20px 5px 0;
    line-height: 1.4em;
}

.product .product-quantity input {
    width: 40px;
}

.product .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    font-size: 12px;
    border-radius: 3px;
}

.product .remove-product:hover {
    background-color: #a44;
}

/* Totals section */
.totals .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
}

.totals .totals-item label {
    float: left;
    clear: both;
    width: 79%;
    text-align: right;
}

.totals .totals-item .totals-value {
    float: right;
    width: 21%;
    text-align: right;
}

.totals .totals-item-total {
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
}

.img-en-product {
    width: 100%;
}
    </style>
</head>
<body id="animated-background">
    
    <nav class=" navbar-expand-md nbg shadow-sm fixed-top ">
        <div class="d-flex bd-highlight align-items-baseline">
            <div class=" flex-grow-1 bd-highlight">
                <a class="navbar-brand mr-4" href="{{ url('/') }}">
                    Swanky Shop
                </a>
                <form class="ml-2 navbar-brand">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-dark text-light form-control mr-sm-2" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
            </div>
            
            @guest
            
            <a href="{{ route('login') }}" class="btn btn-dark btn-sm bd-highlight ">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-dark btn-sm bd-highlight ">S'inscrire</a>
            @else
            <a href="#" class="btn btn-dark btn-sm bd-highlight">Notification</a>
        <a href="{{ route('cart.index') }}" class="btn btn-dark btn-sm bd-highlight"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="badge badge-pill badge-light">{{ Cart::count() }}</span></a>
            <div class="btn btn-dark btn-sm bd-highlight dropdown text-light">
                <a id="navbarDropdown " class="d-block p-0 btn btn-dark btn-sm bd-highlight dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name.' '.Auth::user()->lastname }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu text-light bg-dark dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('home') }}">
                            Mon compte
                        </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </nav>
    

    <div class="body py-1">
        <br>
        <br>
        <br>
        <br>
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    <main class="">
        @yield('content')
    </main>
    </div>
    <div id="footer" class="text-center bgf fixed-bottom">
      <div class="container">
        <div class="socials-media text-center">
          <div class="list-unstyled d-flex mb-0 justify-content-center">
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-facebook"></i></a>
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-twitter"></i></a>
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-instagram"></i></a>
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-googleplus"></i></a>
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-tumblr"></i></a>
            <a class="mr-3 ml-3" style="z-index: 1;" href="#"><i class="ion-social-dribbble"></i></a>
          </div>

        </div>

        <p>&copy; Copyrights</p>

        <div class="credits">
          Designed by <a style="z-index: 1;" href="#">Enoch</a>
        </div>

      </div>
    </div>
    <footer class="align-items-baseline">
        <div class="fixed-bottom m-0  p-2  col-2  btn-group dropup">
            <button type="button" class="btn btn-secondary pr-4 pl-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Information
            </button>
            <div class="dropdown-menu pt-0 pb-0" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item bg-dark text-light" type="button">Nos magasins</button>
                <button class="dropdown-item bg-dark text-light" type="button">Contacter Nous</button>
                <button class="dropdown-item bg-dark text-light" type="button">Mentions Legales</button>
                <button class="dropdown-item bg-dark text-light" type="button">Condition general de vente</button>
                <button class="dropdown-item bg-dark text-light" type="button">Guide et Conseils</button>
                <button class="dropdown-item bg-dark text-light" type="button">Livraison</button>
            </div>
        </div>
    </footer>
</body>
</html>
