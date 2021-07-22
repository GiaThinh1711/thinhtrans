@extends("Theme.layout")
@section("main")

    <!-- header -->
    <div class="agileits_header">
        <div class="w3l_offers">
            <a href="{{asset("user/products")}}">Today's special Offers !</a>
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
                                <li><a href="{{asset("user/login")}}">Login</a></li>
                                <li><a href="{{asset("user/login")}}">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w3l_header_right1">
            <h2><a href="{{asset("user/mail")}}">Contact Us</a></h2>
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
                <h1><a href=""><span>Grocery</span> Store</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="{{asset("user/events")}}">Events</a><i>/</i></li>
                    <li><a href="{{asset("user/about")}}">About Us</a><i>/</i></li>
                    <li><a href="{{asset("user/products")}}">Best Deals</a><i>/</i></li>
                    <li><a href="{{asset("user/services")}}">Services</a></li>
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
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Home</a><span>|</span></li>
                <li>Privacy Policy & Terms of Use</li>
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
                        <li><a href="{{asset("user/products")}}">Branded Foods</a></li>

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
                        <li><a href="{{asset("user/kitchen")}}">Kitchen</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
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
            <!-- privacy -->
            <div class="privacy">
                <div class="privacy1">
                    <h3>Privacy Policy</h3>
                    <div class="banner-bottom-grid1 privacy1-grid">
                        <ul>
                            <li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
                            <li>Profile <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="glyphicon glyphicon-search" aria-hidden="true"></i></li>
                            <li>Search <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
                            <li>News Feed <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                        <ul>
                            <li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i></li>
                            <li>Applications <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
                        </ul>
                    </div>
                </div>
                <div class="privacy1">
                    <h3>Terms of Use</h3>
                    <div class="banner-bottom-grid1 privacy2-grid">
                        <div class="privacy2-grid1">
                            <h4>deserunt mollit anim id est laborum?</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="privacy2-grid1-sub">
                                <h5>1. sint occaecat cupidatat non proident, sunt</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>2.perspiciatis unde omnis iste natus error</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>3. natus error sit voluptatem accusant</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>4. occaecat cupidatat non proident, sunt in</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="privacy2-grid1-sub">
                                <h5>5. deserunt mollit anim id est laborum</h5>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //privacy -->
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
