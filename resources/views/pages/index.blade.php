@extends('layouts.site',['title' => 'accueil'])
    @section('content')
        <!--slider area start-->
            <section class="slider_section slider_two mb-50">
                <div class="slider_area owl-carousel">
                    <div class="single_slider d-flex align-items-center" data-bgimg="/assets/asset_site/img/slider/slider6.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_content">
                                        <h2>NDSPIECE</h2>
                                        <h1>Leader De La Vente De Voiture Et De Pièce En Guinée</h1>
                                        {{-- <a class="button" href="shop.html">shopping now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="single_slider d-flex align-items-center" data-bgimg="/assets/asset_site/img/slider/slider4.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_content">
                                        <h2>NDSPIECE</h2>
                                        <h1>Nous Vous Offrons 25% De Réduction</h1>
                                        {{-- <a class="button" href="shop.html">shopping now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider d-flex align-items-center" data-bgimg="/assets/asset_site/img/slider/slider5.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_content">
                                        <h2>NDSPIECE</h2>
                                        <h1>Vous Satisfaire Est Notre Priorité</h1>
                                        {{-- <a class="button" href="shop.html">shopping now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--slider area end-->
        <!--shipping area start-->
            <section class="shipping_area mb-50">
                <div class="container">
                    <div class=" row">
                        <div class="col-12">
                            <div class="shipping_inner">
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <img src="/assets/asset_site/img/about/shipping1.png" alt="">
                                    </div>
                                    <div class="shipping_content">
                                        <h2>Economique</h2>
                                        <p>Nous vous offrons 25% de réduction</p>
                                    </div>
                                </div>
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <img src="/assets/asset_site/img/about/shipping3.png" alt="">
                                    </div>
                                    <div class="shipping_content">
                                        <h2>100% satisfait ou remboursé</h2>
                                        <p>Nous offrons une garantie</p>
                                    </div>
                                </div>
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <img src="/assets/asset_site/img/about/shipping4.png" alt="">
                                    </div>
                                    <div class="shipping_content">
                                        <h2>Simple & Rapide</h2>
                                        <p>Achater les pièces au meilleur prix</p>
                                    </div>
                                </div>
                                <div class="single_shipping">
                                    <div class="shipping_icone">
                                        <img src="/assets/asset_site/img/about/shipping2.png" alt="">
                                    </div>
                                    <div class="shipping_content">
                                        <h2>Assistance</h2>
                                        <p>Contactez-nous 24h/24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--shipping area end-->
        <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Nos</strong>Produits</span></h2>
                        <ul class="product_tab_button nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#brake" role="tab" aria-controls="brake" aria-selected="true">Accessoires</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#wheels" role="tab" aria-controls="wheels" aria-selected="false">Moteurs</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#turbo" role="tab" aria-controls="turbo" aria-selected="false">Pneus</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="brake" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product6.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product8.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product9.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                        {{-- <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Fugit eum cupiditate necessitatibus similique </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                        {{-- <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Fugit eum cupiditate necessitatibus similique</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html"> repellendus quas ratione voluptas.</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product5.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                        {{-- <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">repellendus quas ratione voluptas.</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                        {{-- <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Etiam Gravida 16GB Factory Unlocked </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25% de réduction</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="wheels" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-57%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$3200.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product5.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$150.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$175.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$180.00</span>
                                            <span class="old_price">$420.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$140.00</span>
                                            <span class="old_price">$320.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product19.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product3.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="turbo" role="tabpanel">
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$3200.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$150.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$175.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$180.00</span>
                                            <span class="old_price">$420.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="current_price">$140.00</span>
                                            <span class="old_price">$320.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product5.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list">
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="single_product">
                                {{-- <div class="product_name">
                                    <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                    <p class="manufacture_product"><a href="#">Accessories</a></p>
                                </div> --}}
                                <div class="product_thumb">
                                    <a class="primary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-25%</span>
                                    </div>

                                    {{-- <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product_content">
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    {{-- <div class="product_footer d-flex align-items-center">
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
    <!--product area start-->
    <section class="new_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_button tab_button2">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true"><span>Offres</span> spéciales</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="false"><span>Accessoires</span> Au</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="false"><span>Meilleur</span> Prix</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="featured" role="tabpanel">
                    <div class="new_product_container">
                        <div class="sample_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Nous vous offrons 25% de réduction avec </a></h3>
                                <div class="manufacture_product">
                                    <p><a href="#">une garantie</a></p>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a href="#"><img src="/assets/asset_site/img/product/product19.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">Contact: </span>
                                    <span class="old_prices">622 57 13 11 / 662 92 85 29</span><br>
                                    <span class="current_price">E-mail: </span>
                                    <span class="old_prices">yagoubabah2@gmail.com</span>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>

                        </div>
                        <div class="product_carousel product_bg  product_column2 owl-carousel">
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product5.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">Contact: </span>
                                            <span class="old_prices"><br>622 57 13 11 / 662 92 85 29</span><br>
                                            <span class="current_price">E-mail: </span>
                                            <span class="old_prices">yagoubabah2@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="view" role="tabpanel">
                    <div class="new_product_container">
                        <div class="sample_product">
                            <div class="product_name">
                                <h3><a href="#">Nous Vous Offrons 25% De Réduction Avec Une Garantie</a></h3>
                                {{-- <div class="manufacture_product">
                                    <p><a href="#">Canon</a></p>
                                </div> --}}
                            </div>
                            <div class="product_thumb">
                                <a href="#"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$180.00</span>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>

                        </div>
                        <div class="product_carousel product_bg  product_column2 owl-carousel">
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$280.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Kodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$280.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Kodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product17.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product18.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JKodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product19.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bestseller" role="tabpanel">
                    <div class="new_product_container">
                        <div class="sample_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss KPH7 Lightweight Portable Headphone</a></h3>
                                <div class="manufacture_product">
                                    <p><a href="#">Accessories</a></p>
                                </div>
                            </div>
                            <div class="product_thumb">
                                <a href="#"><img src="/assets/asset_site/img/product/product3.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$180.00</span>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>

                        </div>
                        <div class="product_carousel product_bg  product_column2 owl-carousel">
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product5.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product6.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$280.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product7.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Kodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$160.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product8.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product9.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$280.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product10.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Kodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product11.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product12.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product13.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product">
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product14.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JKodak PIXPRO Astro Zoom AZ421 16 MP 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="regular_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product15.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$160.00</span>
                                            <span class="old_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="/assets/asset_site/img/product/product16.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
    <!--banner area start-->
    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_container">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="/assets/asset_site/img/bg/banner3.jpg" alt=""></a>
                                <div class="banner_text">
                                    <h3>Haut-Parleur</h3>
                                    <h2>Au Meilleur Prix</h2>
                                    {{-- <a href="shop.html">Shop Now</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="/assets/asset_site/img/bg/banner4.jpg" alt=""></a>
                                <div class="banner_text">
                                    <h3>NDS PIECE</h3>
                                    <h2>Simple & Rapide</h2>
                                    {{-- <a href="shop.html">Shop Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->
    <!--banner area start-->
    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner banner_fullwidth">
                        <div class="banner_thumb">
                            <a href="#"><img src="/assets/asset_site/img/bg/banner5.jpg" alt=""></a>
                            <div class="banner_text">
                                <h2>Pneus</h2>
                                <h3>De Qualité</h3>
                                <p>Au Meilleur Prix Avec 25% De Réduction</p>
                                {{-- <a href="shop.html">Discover Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--testimonials section start-->
    {{-- <div class="testimonial_are">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial_titile">
                        <h1>What Our Custumers Say ?</h1>
                    </div>
                </div>
                <div class="testimonial_active owl-carousel">
                    <div class="col-12">
                        <div class="single_testimonial">
                            <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                            <img src="/assets/asset_site/img/about/testimonial4.jpg" alt="">
                            <span class="name">Kathy Young</span>
                            <span class="job_title">CEO of SunPark</span>
                            <div class="product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single_testimonial">
                            <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                            <img src="/assets/asset_site/img/about/testimonial5.jpg" alt="">
                            <span class="name">Kathy Young</span>
                            <span class="job_title">CEO of SunPark</span>
                            <div class="product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single_testimonial">
                            <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                            <img src="/assets/asset_site/img/about/testimonial6.png" alt="">
                            <span class="name">Kathy Young</span>
                            <span class="job_title">CEO of SunPark</span>
                            <div class="product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--testimonials section end-->


    @endsection






{{-- <!DOCTYPE html>
<html lang="fr">

<head>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- Titre de la page -->
<title>{{ page_title('') }}</title>
<!-- Start Bootstrap And CSS Files -->
<link rel="stylesheet" href="/assets/asset_acceuil/css/bootstrap.min.css">
<!-- fonts -->

<!-- end fonts -->
<link rel="stylesheet" href="/assets/asset_acceuil/css/ionicons.min.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/owl.carousel.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/owl.theme.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/style.css">
<link rel="stylesheet" href="/assets/asset_acceuil/css/box-shadow.css">
<!-- icons -->
<link href="/assets/asset_principal/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- End Bootstrap And CSS Files -->
<script type="text/javascript" async="" src="assets/asset_acceuil/js/ga.js"></script>

</head>
<body>
    <!-- Start Header -->
        <header id="home" class="gradient-violat">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span
                            class="logo-wraper logo-white"> <img src="assets/asset_acceuil/images/Logo.png"
                                alt="">
                        </span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse"
                        id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav  navbar-right">
                            <li class="active"><a href="#home">Home <span
                                    class="sr-only">(current)</span></a></li>
                            <li><a href="#customer-support">Contact</a></li>
                            <li><a href="#blog-card"
                                class="btn btn-orange border-none btn-rounded-corner btn-navbar"
                                target="_blank">Connexion<span class="icon-on-button"><i
                                        class="glyphicon glyphicon-log-in"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <hr class="navbar-divider">
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
    <!-- End Header -->
    <!-- Start Pub -->
        <section id="introduction"
            class="gradient-violat padding-top-90 home-slider">
            <div id="home-slider" class="owl-carousel">
                <div>
                    <div
                        class="sliding-card-with-bottom-image text-center padding-top-90">
                        <h2 class="cta-heading text-white">Admin Voiture</h2>
                        <br>
                        <p class="text-white slider-para">La solution incontournable pour une</br> Adminstration
                            simple et efficace
                        </p>
                        <div class="image-container text-center sm-display-none">
                            <img id="fond_ecran" class="img-responsive" src="images/photos/voitures/toto.png" alt="">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="row">
                            <div class="image-right-slide-bg clearfix"
                                style="background-image: url(images/photos/voitures/toto.png)">
                                <div class="col-md-12">
                                    <h2 class="cta-heading text-white"></h2>
                                    <br>
                                    <p class="text-white slider-para">
                                        Le logiciel complet pour l'administration et<br>
                                        la gestion des pièces détachées
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Pub -->
    <!-- Start Mode De Connexion -->
        <section id="blog-card" class="padding-top-bottom-90">
            <div class="container">
                <div class="heading-wraper text-center margin-bottom-80">
                    <h4 class="text-black">Connectez-Vous en tant que : </h4>
                    <hr class="heading-devider gradient-orange">
                </div>
                <div class="row">
                    <div class="demo-area">
                        <div class="correct-way a-way">
                            <div class="correct-wrapper item-wrapper">
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Superviseur</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/superviseur.png" alt="Superviseur">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Agents Administratifs</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/agent_administratif.png" alt="Agents Administratifs">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br><br><br>
                <div class="row">
                    <div class="demo-area">
                        <div class="correct-way a-way">
                            <div class="correct-wrapper item-wrapper">
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Enseigant(e)</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/enseignant.png" alt="Enseigant">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <h4 class="mb-4 section-heading">Comptable</h4>
                                    <a href="{{ route('login') }}">
                                        <div class="correct-item item">
                                            <div class="card">
                                                <img class="card-img-top img-responsive max-width-100"
                                                    src="assets/asset_acceuil/images/comptable.png" alt="Comptable">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Mode De Connexion -->
    <!-- Start About Admin-School -->
        <section id="cta" class="gradient-violat cta padding-top-bottom-90">
            <div class="container">
                <div class="heading-wraper text-center margin-bottom-80">
                    <h4>Pourquoi Choisir Admin School ???</h4>
                    <hr class="heading-devider gradient-orange">
                    <br>
                    <p class="text-white slider-para">
                        Admin School est un logiciel complet pour l'administration automatisée de l'etablissement scolaire,
                        il permet de faire des traitements complexes de façon sûre et simple.
                        Son interface est vraiment intuitive et convient à tous type d'utilisateurs.</br>
                        Admin School à été developpé dans le but de permettre aux responsables d'un Etablissement Scolaire
                        d'avoire la maitrise permanente et totale de la gestion des activités principale de l'Etablissement
                    </p>
                </div>
            </div>
        </section>
    <!-- End About Admin-School -->
    <!-- Start Contact -->
        <section id="customer-support" class="overflow-x-hidden">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-wraper">
                        <img class="img-responsive" src="assets/asset_acceuil/images/about.svg" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div
                        class="customer-support-content padding-top-bottom-120 sm-padding-top-bottom-50-75">
                        <h4>Un service client toujours à vôtre écoute</h4>
                        <p class="margin-top-bottom-30">
                            Nous sommes toujours heureux de vous aider.Pour toutes questions
                            ou assistance,veuillez nous envoyer un mail à <a href="mailto:adminschool@gmail.com">adminschool@gmail.com</a>
                            ou nous contactez sur les numéros suivants : <br>
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; 623 89 77 08 &nbsp;
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp; 660 59 82 86 &nbsp;
                        </p>
                        <a class="btn btn-orange border-none btn-rounded-corner" href="">Admin School Vous satisfaire est notre priorité.
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Contact -->
    <!-- Start Footer -->
        <footer class="">
            <hr class="footer-divider">
            <div class="copyright-cta">
                <p class="text-uppercase">
                    All rights Reserved By <a href="#"><span
                        class="span text-violat ">Redstar Theme</span></a>
                </p>
            </div>
        </footer>
    <!-- End Footer -->
	<div id="scroll-top-div" class="scroll-top-div">
		<div class="scroll-top-icon-container">
			<i class="ion-ios-arrow-thin-up"></i>
		</div>
    </div>


	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="assets/asset_acceuil/js/jquery.min.js"></script>
	<script src="assets/asset_acceuil/js/bootstrap.min.js"></script>
	<script src="assets/asset_acceuil/js/owl.carousel.min.js"></script>
	<script src="assets/asset_acceuil/js/script.js"></script>
	<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7944098-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
      <!--start include flashy -->
        @include ('flashy::message')
      <!-- end include flashy -->
</body>
</html> --}}
