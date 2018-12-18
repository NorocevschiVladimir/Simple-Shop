@extends('layouts.app')

@section('content')
    <div id="home">
        <home-template inline-template>
            <div>
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
                    <div class="container">
                        <div class="ml-auto">
                            <div class="cart" @click="showCart">
                                <div class="num">@{{ quantityCart }}</div>
                                <i class="fas fa-shopping-cart"></i>
                                <div class="price">Total: <b>$@{{ price_Cart }}</b></div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="home_page">
                    <div class="section section-1">
                        <div class="container">
                            <h3>Our customers are always satisfied with our services.</h3>
                            <h4>Havenly is a convenient, personal and affordable way to redecorate your home room by room. Collaborate with our professional interior designers on our online platform.</h4>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="info-block block-1">
                                        <i class="icon fas fa-car-side"></i>
                                        <h5>1 Day Delivery</h5>
                                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="info-block block-2">
                                        <i class="icon fas fa-id-card-alt"></i>
                                        <h5>Refund Policy</h5>
                                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. Very good refund policy just for you.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="info-block block-3">
                                        <i class="icon far fa-heart"></i>
                                        <h5>Popular Item</h5>
                                        <p>Share a floor plan, and we'll create a visualization of your room. This is a popular item for you or your family. Lorem ipsum Lorem ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <b-button class="goShop" size="lg" variant="primary" v-scroll-to="'#products'">Go Shop</b-button>
                        </div>
                    </div>
                    <div class="section section-2" id="products">
                        <div class="container">
                            <h3>You may also be interested in our products:</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12" v-for="(index, product) in products">
                                    <div class="product" @click="showProduct(index.id)">
                                        <div :style="{ 'background-image': 'url(' + index.image + ')' }" class="product-photo"></div>
                                        <h5>@{{ index.name }}</h5>
                                        <p class="description">@{{ index.description }}</p>
                                        <div class="footer-block">
                                            <span class="price">$@{{index.price}}</span>
                                            <b-btn @click.stop="AddCart(index.id)" variant="success" class="add_Cart">Add to Cart</b-btn>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Component -->
                        <b-modal id="productModal"
                                 :ok-title="'Buy for $' + modal_Product.price"
                                 ok-variant="success"
                                 ref="modalProduct"
                                 centered
                                 @ok="buyProduct">
                            <b-form>
                                <div class="header-form">
                                    <div :style="{ 'background-image': 'url(' + modal_Product.image + ')' }" class="product-photo"></div>
                                    <h5>@{{modal_Product.name}}</h5>
                                    <p class="description">@{{ modal_Product.description }}</p>
                                </div>
                            </b-form>
                        </b-modal>
                        <b-modal id="cartModal"
                                 ref="cartModal"
                                 hide-footer
                                 centered>
                            <ul class="products">
                                <li class="product-cart" v-for="(index, product) in cart_Products">
                                    <div class="header-form">
                                        <div :style="{ 'background-image': 'url(' + index.image + ')' }" class="product-photo"></div>
                                        <h5>@{{index.name}}</h5>
                                        <p class="description">@{{ index.description }}</p>
                                        <span class="cost">This item cost <b>$@{{ index.price }}</b></span>
                                    </div>
                                </li>
                            </ul>
                            <div class="custom-footer">
                                <b-btn v-if="cart_Products.length === 1" variant="success" class="buyCart" @click="BuyAll">Buy for $@{{ price_Cart }}</b-btn>
                                <b-btn v-else variant="success" class="buyCart" @click="BuyAll">Buy All for $@{{ price_Cart }}</b-btn>
                            </div>
                        </b-modal>
                    </div>
                </div>
            </div>
        </home-template>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('js')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
