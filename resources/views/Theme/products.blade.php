@extends("Theme.layout")
@section("main")
    <div class="agileits_header">
        <div class="w3l_offers">
            <a href="{{url("user/products")}}">Today's special Offers !</a>
        </div>
        <div class="w3l_search">
            <form action="#" method="post">
                <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <div class="product_list_header">
            <form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
        </div>
        <div class="w3l_header_right">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                    <div class="mega-dropdown-menu">
                        <div class="w3ls_vegetables">
                            <ul class="dropdown-menu drp-mnu">
                                <li><a href="{{url("user/login")}}">Login</a></li>
                                <li><a href="{{url("user/login")}}">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w3l_header_right1">
            <h2><a href="{{url("user/mail")}}">Contact Us</a></h2>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- script-for sticky-nav -->
    <script>
        $(document).ready(function() {
            var navoffeset=$(".agileits_header").offset().top;
            $(window).scroll(function(){
                var scrollpos=$(window).scrollTop();
                if(scrollpos >=navoffeset){
                    $(".agileits_header").addClass("fixed");
                }else{
                    $(".agileits_header").removeClass("fixed");
                }
            });

        });
    </script>
    <!-- //script-for sticky-nav -->
    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="/"><span>Grocery</span> Store</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="{{url("user/events")}}">Events</a><i>/</i></li>
                    <li><a href="{{url("user/about")}}">About Us</a><i>/</i></li>
                    <li><a href="{{url("user/products")}}">Best Deals</a><i>/</i></li>
                    <li><a href="{{url("user/services")}}">Services</a></li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url("/user/home")}}">Home</a><span>|</span></li>
                <li>Branded Foods</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <nav class="navbar nav_bottom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        <li><a href="{{url("user/products")}}">Products</a></li>
                        <li class="dropdown mega-dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="{{asset("user/vegetables")}}">Vegetables</a></li>
                                        <li><a href="{{asset("user/vegetables")}}">Fruits</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{url("user/kitchen")}}">Kitchen</a></li>
                        <li class="dropdown">
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">

                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{asset("user/bread")}}">Bread & Bakery</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="w3l_banner_nav_right">
            <div class="w3l_banner_nav_right_banner3">
                <h3>Best Deals For New Products<span class="blink_me"></span></h3>
            </div>
            <div class="w3l_banner_nav_right_banner3_btm">
                <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                    <div class="view view-tenth">
                        <img src="{{asset("images/13.jpg")}}" alt=" " class="img-responsive" />
                        <div class="mask">
                            <h4>Grocery Store</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                        </div>
                    </div>
                    <h4>Utensils</h4>
                    <ol>
                        <li>sunt in culpa qui officia</li>
                        <li>commodo consequat</li>
                        <li>sed do eiusmod tempor incididunt</li>
                    </ol>
                </div>
                <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                    <div class="view view-tenth">
                        <img src="{{asset("images/14.jpg")}}" alt=" " class="img-responsive" />
                        <div class="mask">
                            <h4>Grocery Store</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                        </div>
                    </div>
                    <h4>Hair Care</h4>
                    <ol>
                        <li>enim ipsam voluptatem officia</li>
                        <li>tempora incidunt ut labore et</li>
                        <li>vel eum iure reprehenderit</li>
                    </ol>
                </div>
                <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                    <div class="view view-tenth">
                        <img src="{{asset("images/15.jpg")}}" alt=" " class="img-responsive" />
                        <div class="mask">
                            <h4>Grocery Store</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                        </div>
                    </div>
                    <h4>Cookies</h4>
                    <ol>
                        <li>dolorem eum fugiat voluptas</li>
                        <li>ut aliquid ex ea commodi</li>
                        <li>magnam aliquam quaerat</li>
                    </ol>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3ls_w3l_banner_nav_right_grid">
                <h3>Popular Brands</h3>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <h6>food</h6>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/5.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>knorr instant soup (100 gm)</p>
                                                <h4>$3.00 <span>$5.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="knorr instant soup" />
                                                        <input type="hidden" name="amount" value="3.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/6.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>chings noodles (75 gm)</p>
                                                <h4>$5.00 <span>$8.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="chings noodles" />
                                                        <input type="hidden" name="amount" value="5.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/7.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>lahsun sev (150 gm)</p>
                                                <h4>$3.00 <span>$5.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="lahsun sev" />
                                                        <input type="hidden" name="amount" value="3.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/8.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>premium bake rusk (300 gm)</p>
                                                <h4>$5.00 <span>$7.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="premium bake rusk" />
                                                        <input type="hidden" name="amount" value="5.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <h6>vegetables & fruits</h6>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/9.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>fresh spinach (palak)</p>
                                                <h4>$2.00 <span>$3.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="fresh spinach" />
                                                        <input type="hidden" name="amount" value="2.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/10.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>fresh mango dasheri (1 kg)</p>
                                                <h4>$5.00 <span>$8.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="fresh mango dasheri" />
                                                        <input type="hidden" name="amount" value="5.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="tag"><img src="{{asset("images/tag.png")}}" alt=" " class="img-responsive" /></div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/11.png" )}}" alt=" " class="img-responsive" /></a>
                                                <p>fresh apple red (1 kg)</p>
                                                <h4>$6.00 <span>$8.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="fresh apple red" />
                                                        <input type="hidden" name="amount" value="6.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/12.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>fresh broccoli (500 gm)</p>
                                                <h4>$4.00 <span>$6.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="fresh broccoli" />
                                                        <input type="hidden" name="amount" value="4.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3ls_w3l_banner_nav_right_grid1">
                    <h6>beverages</h6>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/13.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>mixed fruit juice (1 ltr)</p>
                                                <h4>$3.00 <span>$4.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="mixed fruit juice" />
                                                        <input type="hidden" name="amount" value="3.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/14.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>prune juice - sunsweet (1 ltr)</p>
                                                <h4>$4.00 <span>$5.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="prune juice" />
                                                        <input type="hidden" name="amount" value="4.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="tag"><img src="{{asset("images/tag.png")}}" alt=" " class="img-responsive" /></div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/15.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>coco cola zero can (330 ml)</p>
                                                <h4>$3.00 <span>$5.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="coco cola can" />
                                                        <input type="hidden" name="amount" value="3.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 w3ls_w3l_banner_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="{{asset("images/offer.png")}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="{{asset("user/single")}}"><img src="{{asset("images/16.png")}}" alt=" " class="img-responsive" /></a>
                                                <p>sprite bottle (2 ltr)</p>
                                                <h4>$3.00 <span>$4.00</span></h4>
                                            </div>
                                            <div class="snipcart-details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="sprite bottle" />
                                                        <input type="hidden" name="amount" value="3.00" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="subscribe now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
