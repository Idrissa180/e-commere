@extends('layouts.app')

@section('content')
<div class="bgp">
    <div class="contenu_carou_auto ">
        <div class="caroussel-image">
            <img src="bg/bg1.jpg" alt>
            <img src="bg/bg2.jpg" alt>
            <img src="bg/bg3.jpg" alt>
            <img src="bg/bg.jpg" alt>
            <img src="bg/bg5.jpg" alt>
            <img src="bg/bg6.jpg" alt>
            <img src="bg/bg7.jpg" alt>
            <img src="bg/bg8.jpg" alt>
        </div>
    </div>
    </div>
 <div class="row">
     <div class="col-9">
        <article class="mt-20 mb-20 mx-auto">
            <ul class="nav   bgn" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="acceuil-tab" data-toggle="tab" href="#acceuil" role="tab" aria-controls="acceuil" aria-selected="true">acceuil</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="mode1-tab" data-toggle="tab" href="#mode1" role="tab" aria-controls="mode1" aria-selected="false">Homme</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="mode2-tab" data-toggle="tab" href="#mode2" role="tab" aria-controls="mode2" aria-selected="false">Femme</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">
                    <div class="row p-3">
                        @foreach ($product as $product)
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="{{asset('storage/').$product->lien}}" width="100%">
                            <h4>{{ $product->libelle }}</h4>
                            <p>prix: {{ $product->description }}dh</p>
                                <p>prix: {{ $product->prix }}dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('affiche.product',$product->id) }}" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('cart.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                        @endforeach
                        <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/2.jpg" width="100%">
                            <h4>produit2</h4>
                                <p>prix: 300dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/3.jpg" width="100%">
                            <h4>produit3</h4>
                                <p>prix: 350dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/4.jpg" width="100%">
                            <h4>produit4</h4>
                                <p>prix: 500dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/5.jpg" width="100%">
                            <h4>produit5</h4>
                                <p>prix: 170dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/6.jpg" width="100%">
                            <h4>produit6</h4>
                                <p>prix: 175dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/7.jpg" width="100%">
                            <h4>produit7</h4>
                                <p>prix: 260dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/8.jpg" width="100%">
                            <h4>produit8</h4>
                                <p>prix: 325dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                            <div class="post col-3 mx-auto text-center">
                                <img class="img-post-en img-thumbnail" src="post/9.jpg" width="100%">
                            <h4>produit9</h4>
                                <p>prix: 400dh</p>
                                <div class="rating">
                                   <a href="#5" title="Donner 5 étoiles">☆</a>
                                   <a href="#4" title="Donner 4 étoiles">☆</a>
                                   <a href="#3" title="Donner 3 étoiles">☆</a>
                                   <a href="#2" title="Donner 2 étoiles">☆</a>
                                   <a href="#1" title="Donner 1 étoile">☆</a>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </form>
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="">
                                    <button type="submit" class="btn btn-warning pt-0 pb-0"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                </form>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mode1" role="tabpanel" aria-labelledby="mode1-tab">
                    <nav>
                      <div class="nav " id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-hchaussure-tab" data-toggle="tab" href="#nav-hchaussure" role="tab" aria-controls="nav-hchaussure" aria-selected="true">Chaussures</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-hchemise" role="tab" aria-controls="nav-hchemise" aria-selected="false">Chémises</a>
                        <a class="nav-link" id="nav-hpantalon-tab" data-toggle="tab" href="#nav-hpantalon" role="tab" aria-controls="nav-hpantalon" aria-selected="false">Pantalons</a>
                        <a class="nav-link" id="nav-haccessoire-tab" data-toggle="tab" href="#nav-haccessoire" role="tab" aria-controls="nav-haccessoire" aria-selected="false">Accessoires</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-hchaussure" role="tabpanel" aria-labelledby="nav-hchaussure-tab">...</div>
                      <div class="tab-pane fade" id="nav-hchemise" role="tabpanel" aria-labelledby="nav-hchemise-tab">...</div>
                      <div class="tab-pane fade" id="nav-hpantalon" role="tabpanel" aria-labelledby="nav-hpantalon-tab">...</div>
                      <div class="tab-pane fade" id="nav-haccessoire" role="tabpanel" aria-labelledby="nav-haccessoire-tab">...</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mode2" role="tabpanel" aria-labelledby="mode2-tab">
                    <nav>
                      <div class="nav " id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-fchaussure-tab" data-toggle="tab" href="#nav-fchaussure" role="tab" aria-controls="nav-fchaussure" aria-selected="true">Chaussures</a>
                        <a class="nav-link" id="nav-fchemise-tab" data-toggle="tab" href="#nav-fchemise" role="tab" aria-controls="nav-fchemise" aria-selected="false">Chémises</a>
                        <a class="nav-link" id="nav-fpantalon-tab" data-toggle="tab" href="#nav-fpantalon" role="tab" aria-controls="nav-fpantalon" aria-selected="false">Pantalons</a>
                        <a class="nav-link" id="nav-faccessoire-tab" data-toggle="tab" href="#nav-faccessoire" role="tab" aria-controls="nav-faccessoire" aria-selected="false">Accessoires</a>
                        <a class="nav-link active" id="nav-frobe-tab" data-toggle="tab" href="#nav-frobe" role="tab" aria-controls="nav-frobe" aria-selected="true">Robe</a>
                        <a class="nav-link" id="nav-fbeauté-tab" data-toggle="tab" href="#nav-fbeauté" role="tab" aria-controls="nav-fbeauté" aria-selected="false">Beauté et Soin</a>
                        <a class="nav-link" id="nav-ftradi-tab" data-toggle="tab" href="#nav-ftradi" role="tab" aria-controls="nav-ftradi" aria-selected="false">Habits traditionnelle</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-hchaussure" role="tabpanel" aria-labelledby="nav-hchaussure-tab">...</div>
                        <div class="tab-pane fade" id="nav-hchemise" role="tabpanel" aria-labelledby="nav-hchemise-tab">...</div>
                        <div class="tab-pane fade" id="nav-hpantalon" role="tabpanel" aria-labelledby="nav-hpantalon-tab">...</div>
                        <div class="tab-pane fade" id="nav-haccessoire" role="tabpanel" aria-labelledby="nav-haccessoire-tab">...</div>
                        <div class="tab-pane fade show active" id="nav-frobe" role="tabpanel" aria-labelledby="nav-frobe-tab">...</div>
                        <div class="tab-pane fade" id="nav-fbeauté" role="tabpanel" aria-labelledby="nav-fbeauté-tab">...</div>
                        <div class="tab-pane fade" id="nav-ftradi" role="tabpanel" aria-labelledby="nav-ftradi-tab">...</div>
                    </div>
                </div>
            </div>
        </article>
        </div>
        <div class="col-3 fixed-left bgr">
            <div class="single-gd  tech-btm text-left">
        <h4>Citation du jour</h4>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href="single.html">
                    <img src="images/vie.jpg" class="card-img-top img-fluid" alt="">
                </a>
                <p>La vie c'est des étapes... La plus douce c'est l'amour... La plus dure c'est la séparation... La plus pénible c'est les adieux... La plus belle c'est les retrouvailles.</p>
            </div>
            <div class="blog-grid-right">

                <h5>
                    <a href="#"></a>
                </h5>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="tech-btm">
        <h4></h4>
        <ul class="list-group single">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Epanuissement
                <span class="badge badge-primary badge-pill">1</span>
            </li>
        </ul>
    </div>
    <br>
    <div class="tech-btm">
        <h4>L'article le plus aimé</h4>

        <div class="blog-grids row mb-3">
            <div class="col-md-5 blog-grid-left">
                <a href="afficheart.php?id=1">
                    <img src="images/voyage.jpg" class="card-img-top img-fluid" alt="">
                </a>
            </div>
            <div class="col-md-7 blog-grid-right">

                <h5>
                    <a href="afficheart.php?id=1">Voyage </a>
                </h5>
                <div class="sub-meta">
                    <span>
                        <i class="far fa-clock"></i></span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="tech-btm">
        <h4>Les articles recentes</h4>

        <div class="blog-grids row mb-3 text-left">
            <div class="col-md-5 blog-grid-left">
                <a href="#">
                    <img src="images/voyage.jpg" class="card-img-top img-fluid" alt="">
                </a>
            </div>
            <div class="col-md-7 blog-grid-right">

                <h5>
                    <a href="afficheart.php?id=1">voyage</a>
                </h5>
                <div class="sub-meta">
                    <span>
                        <i class="far fa-clock"></i></span>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

@endsection
