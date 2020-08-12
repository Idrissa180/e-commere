@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Mon compte') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @if (Auth::user()->admi=='non')
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="commande-tab" data-toggle="tab" href="#commande" role="tab" aria-controls="commande" aria-selected="true">Mes commandes</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="Favoris-tab" data-toggle="tab" href="#Favoris" role="tab" aria-controls="Favoris" aria-selected="false">Liste Favoris</a>
                      </li>
                      @endif
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="infos-tab" data-toggle="tab" href="#infos" role="tab" aria-controls="infos" aria-selected="false">Mes informations</a>
                      </li>
                      @if (Auth::user()->admi!='non')
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Liste des commandes</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="listut-tab" data-toggle="tab" href="#listut" role="tab" aria-controls="listut" aria-selected="false">Liste des utilisateur</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">Nouveau produit</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lproduct-tab" data-toggle="tab" href="#lproduct" role="tab" aria-controls="lproduct" aria-selected="false">Liste produit</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lcategorie-tab" data-toggle="tab" href="#lcategorie" role="tab" aria-controls="lcategorie" aria-selected="false">Liste categorie</a>
                          </li>
                      @endif

                      @if (Auth::user()->sadmi=='oui')
                          
                      @endif
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="commande" role="tabpanel" aria-labelledby="commande-tab">1</div>
                      <div class="tab-pane fade" id="Favoris" role="tabpanel" aria-labelledby="Favoris-tab">2</div>
                      <div class="tab-pane fade" id="infos" role="tabpanel" aria-labelledby="infos-tab">3</div>
                      <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">4</div>
                      <div class="tab-pane fade" id="listut" role="tabpanel" aria-labelledby="listut-tab">
                          <br>
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Prénom</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $users)
                            <tr>
                            <th scope="row">{{ $users->id }}</th>
                              <td>{{ $users->lastname }}</td>
                              <td>{{ $users->name }}</td>
                              <td>@mdo</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                      <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <br>
                        <form method="POST" action="{{ route('new.post') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="libelle" class="col-md-4 col-form-label text-md-right">{{ __('Nom du produit') }}</label>
                            
                                <div class="col-md-6">
                                    <input id="libelle" type="text" class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{ old('libelle') }}"  autocomplete="libelle" autofocus>
                                
                                    @error('libelle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('slug') }}</label>
                            
                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}"  autocomplete="slug" autofocus>
                                
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label for="sublibelle" class="col-md-4 col-form-label text-md-right">{{ __('Sous-titre') }}</label>
                            
                                <div class="col-md-6">
                                    <input id="sublibelle" type="text" class="form-control @error('sublibelle') is-invalid @enderror" name="sublibelle" value="{{ old('sublibelle') }}"  autocomplete="sublibelle">
                                
                                    @error('sublibelle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="new-description"></textarea>
                                
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>
                            
                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror" name="prix"  autocomplete="new-prix">
                                
                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div   class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" >
                                <label class="custom-file-label" for="image">Choose file</label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <input type="hidden" name="uid" value="{{Auth::user()->id}}">

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="lproduct" role="tabpanel" aria-labelledby="lproduct-tab">

                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Libelle</th>
                              <th scope="col">Stock</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($post as $post)
                            <tr>
                            <th scope="row">{{ $post->id }}</th>
                              <td>{{ $post->libelle }}</td>
                              <td>{{ 20 }}</td>
                              <td>@mdo</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                      <div class="tab-pane fade" id="lcategorie" role="tabpanel" aria-labelledby="lcategorie-tab">6</div>
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
<br>
@endsection
