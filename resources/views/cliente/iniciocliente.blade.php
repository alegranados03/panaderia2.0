@extends('layouts.baseCliente')

@section('titulo')
Tienda
@endsection

@section('links')
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('OneTech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/responsive.css')}}">

@endsection
@section('content')

  <div class="banner">
    <div class="banner_background" style="background-image:url({{asset('OneTech/images/banner_background.jpg')}})"></div>
    <div class="container fill_height">
      <div class="row fill_height">
        <div class="banner_product_image"><img src="{{asset('OneTech/images/banner_product.png')}}" alt=""></div>
        <div class="col-lg-5 offset-lg-4 fill_height">
          <div class="banner_content">
            <h1 class="banner_text">new era of smartphones</h1>
            <div class="banner_price"><span>$530</span>$460</div>
            <div class="banner_product_name">Apple Iphone 6s</div>
            <div class="button banner_button"><a href="#">Shop Now</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Characteristics -->

  <div class="characteristics">
    <div class="container">
      <div class="row">

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{asset('OneTech/images/char_1.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Free Delivery</div>
              <div class="char_subtitle">from $50</div>
            </div>
          </div>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{asset('OneTech/images/char_2.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Free Delivery</div>
              <div class="char_subtitle">from $50</div>
            </div>
          </div>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{asset('OneTech/images/char_3.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Free Delivery</div>
              <div class="char_subtitle">from $50</div>
            </div>
          </div>
        </div>

        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="char_item d-flex flex-row align-items-center justify-content-start">
            <div class="char_icon"><img src="{{asset('OneTech/images/char_4.png')}}" alt=""></div>
            <div class="char_content">
              <div class="char_title">Free Delivery</div>
              <div class="char_subtitle">from $50</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Deals of the week -->

  <div class="deals_featured">
      <div class="row">
        <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-center">
          <!-- Deals -->
          
          <!-- Featured -->
          <div class="featured">
            <div class="tabbed_container">
              <div class="tabs">
                <ul class="clearfix">
                  <li class="active">Featured</li>
                  <li>On Sale</li>
                  <li>Best Rated</li>
                </ul>
                <div class="tabs_line"><span></span></div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel active">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_1.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_2.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_3.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_4.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_5.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_6.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_7.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('OneTech/images/featured_8.png')}}" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Popular Categories -->

  <div class="popular_categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="popular_categories_content">
            <div class="popular_categories_title">Popular Categories</div>
            <div class="popular_categories_slider_nav">
              <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
              <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
            </div>
            <div class="popular_categories_link"><a href="#">full catalog</a></div>
          </div>
        </div>
        
        <!-- Popular Categories Slider -->

        <div class="col-lg-9">
          <div class="popular_categories_slider_container">
            <div class="owl-carousel owl-theme popular_categories_slider">

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="{{asset('OneTech/images/popular_1.png')}}" alt=""></div>
                  <div class="popular_category_text">Smartphones & Tablets</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="{{asset('OneTech/images/popular_2.png')}}" alt=""></div>
                  <div class="popular_category_text">Computers & Laptops</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="{{asset('OneTech/images/popular_3.png')}}" alt=""></div>
                  <div class="popular_category_text">Gadgets</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="{{asset('OneTech/images/popular_4.png')}}" alt=""></div>
                  <div class="popular_category_text">Video Games & Consoles</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="{{asset('OneTech/images/popular_5.png')}}" alt=""></div>
                  <div class="popular_category_text">Accessories</div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Banner -->

  <div class="banner_2">
    <div class="banner_2_background" style="background-image:url({{asset('OneTech/images/banner_2_background.jpg')}})"></div>
    <div class="banner_2_container">
      <div class="banner_2_dots"></div>
      <!-- Banner 2 Slider -->

      <div class="owl-carousel owl-theme banner_2_slider">

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('OneTech/images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('OneTech/images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="{{asset('OneTech/images/banner_2_product.png')}}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Adverts -->

  <div class="adverts">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 advert_col">
          
          <!-- Advert Item -->

          <div class="advert d-flex flex-row align-items-center justify-content-start">
            <div class="advert_content">
              <div class="advert_title"><a href="#">Trends 2018</a></div>
              <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
            </div>
            <div class="ml-auto"><div class="advert_image"><img src="{{asset('OneTech/images/adv_1.png')}}" alt=""></div></div>
          </div>
        </div>

        <div class="col-lg-4 advert_col">
          
          <!-- Advert Item -->

          <div class="advert d-flex flex-row align-items-center justify-content-start">
            <div class="advert_content">
              <div class="advert_subtitle">Trends 2018</div>
              <div class="advert_title_2"><a href="#">Sale -45%</a></div>
              <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>
            <div class="ml-auto"><div class="advert_image"><img src="{{asset('OneTech/images/adv_2.png')}}" alt=""></div></div>
          </div>
        </div>

        <div class="col-lg-4 advert_col">
          
          <!-- Advert Item -->

          <div class="advert d-flex flex-row align-items-center justify-content-start">
            <div class="advert_content">
              <div class="advert_title"><a href="#">Trends 2018</a></div>
              <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>
            <div class="ml-auto"><div class="advert_image"><img src="{{asset('OneTech/images/adv_3.png')}}" alt=""></div></div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script src="{{asset('OneTech/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('OneTech/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('OneTech/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('OneTech/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('OneTech/plugins/easing/easing.js')}}"></script>
<script src="{{asset('OneTech/js/custom.js')}}"></script>
@endsection