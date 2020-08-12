@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="w-100">
            <div class="card">
                <div class="card-header">{{ __('Mon panier') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Cart::count() >0)
                    <div class="shopping-cart">
                      <div class="column-labels">
                        <label class="product-image">Image</label>
                        <label class="product-details">Product</label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-removal">Remove</label>
                        <label class="product-line-price">Total</label>
                      </div>
                      @foreach (Cart::content() as $product)
                      <div class="product">
                        <div class="product-image">
                          <img src="https://via.placeholder.com/80x80">
                        </div>
                        <div class="product-details">
                          <div class="product-title">{{$product->model->Libelle}}</div>
                          <p class="product-description"> {{$product->model->description}}</p>
                        </div>
                        <div class="product-price">{{$product->model->prix}}</div>
                        <div class="product-quantity">
                          <input type="number" value="1" min="1">
                        </div>
                        <div class="product-removal">
                          
                          <form action="{{ route('cart.destroy',$product->rowId) }}" method="post">
                               {{ csrf_field() }}
                               @method('DELETE')
                               <button type="submit" class=" btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                           </form>
                        </div>
                        <div class="product-line-price">{{$product->model->prix}}</div>
                      </div>
                      @endforeach
                      <div class="totals">
                        <div class="totals-item">
                          <label>Sous-total</label>
                          <div class="totals-value" id="cart-subtotal">71.97</div>
                        </div>
                        <div class="totals-item">
                          <label>Tax (5%)</label>
                          <div class="totals-value" id="cart-tax">3.60</div>
                        </div>
                        <div class="totals-item">
                          <label>Livraison</label>
                          <div class="totals-value" id="cart-shipping">15.00</div>
                        </div>
                        <div class="totals-item totals-item-total">
                          <label>Total</label>
                          <div class="totals-value" id="cart-total">90.57</div>
                        </div>
                      </div>
                      <div class="input-group mb-3 col-7 text-left">
                        <input type="text" class="form-control" placeholder="utilise le coupon">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-dark"  >Utiliser le coupon</button>
                        </div>
                      </div>
                      <div>
                      <a href="{{ route('paiement.index') }}" class="btn btn-info">Passer au payement</a>
                      </div>
                    </div>
                    @else
                        <p>Votre Panier est vide</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
