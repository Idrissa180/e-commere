@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
        			<div class="row">
        			    <div class="col-6 p-5">
        			        <img class="img-en-product" src="{{asset('post/1.jpg')}}" alt="">
        			    </div>
        			    <div class="col-6 p-5">
        			        <h3>Nom du produit</h3>
        			        <br>
        			        <hr>
        			        <h4>Prix: <strong>250$</strong></h4>
        			        <ul>
        			            <li>Delivrer en seulement 7 jours ouvrable</li>
        			            <li>Produit certifier meilleur qualité</li>
        			        </ul>
        			        <hr>
        			        <section>
        			            <div class="nav nav-tabs" id="nav-tab" role="tablist">
        			                <a class="nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">Description</a>
        			                <a class="nav-link" id="nav-specification-tab" data-toggle="tab" href="#nav-specification" role="tab" aria-controls="nav-specification" aria-selected="false">Specification</a>
        			                <a class="nav-link" id="nav-commentaire-tab" data-toggle="tab" href="#nav-commentaire" role="tab" aria-controls="nav-commentaire" aria-selected="false">Commentaires</a>
        			            </div>
        			        </section>
        			        <div class="tab-content" id="nav-tabContent">
        			            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">...</div>
        			            <div class="tab-pane fade" id="nav-specification" role="tabpanel" aria-labelledby="nav-specification-tab">...</div>
        			            <div class="tab-pane fade" id="nav-commentaire" role="tabpanel" aria-labelledby="nav-commentaire-tab">
        			                <div class="chat-body no-padding profile-message">
        			                    <div>
        			                        <div class="message">
        			                            <img width="25px" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="online" />
        			                            <span class="message-text">
        			                                <a href="#" class="username">
        			                                    Nom utilisateur
        			                                </a>
        			                                <br>
        			                                Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved
        			                            </span>
        			                            <div class=" font-xs d-flex">
        			                                <div>
        			                                    <a href="#" class="text-info"><i class="fa fa-thumbs-up"></i>(22)</a>
        			                                </div>
        			                                <div class="pull-right text-left">
        			                                    <small class="text-muted pull-right ultra-light"> Poster le 01/08/2020 </small>
        			                                </div>
        			                            </div>
        			                        </div>
        			                    </div>
        			                </div>
        			            </div>
        			            <hr>
        			            <div class="d-flex">
        			                <div class="col-6 text-left">
        			                    <form action="">
        			                        <button type="submit" class="btn btn-success">Ajouter au panier</button>
        			                    </form>
        			                </div>
        			                <div class="col-6 text-right">
        			                    <form action="">
        			                        <button type="submit" class="btn btn-info">Contacter le vendeur</button>
        			                    </form>
        			                </div>
        			            </div>
        			        </div>
        			    </div>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection