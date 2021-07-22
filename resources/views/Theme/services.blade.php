@extends("Theme.layout")
@section("main")
    <div class="agileits_header">
        <div class="w3l_offers">
            <a href="products.html">Today's special Offers !</a>
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
                                <li><a href="login.html">Login</a></li>
                                <li><a href="login.html">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w3l_header_right1">
            <h2><a href="mail.html">Contact Us</a></h2>
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
                <h1><a href="index.html"><span>Grocery</span> Store</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="events.html">Events</a><i>/</i></li>
                    <li><a href="about.html">About Us</a><i>/</i></li>
                    <li><a href="products.html">Best Deals</a><i>/</i></li>
                    <li><a href="services.html">Services</a></li>
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
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
                <li>Services</li>
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
                        <li><a href="products.html">Branded Foods</a></li>
                        <li><a href="household.html">Households</a></li>
                        <li class="dropdown mega-dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="vegetables.html">Vegetables</a></li>
                                        <li><a href="vegetables.html">Fruits</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="kitchen.html">Kitchen</a></li>
                        <li><a href="short-codes.html">Short Codes</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="drinks.html">Soft Drinks</a></li>
                                        <li><a href="drinks.html">Juices</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="pet.html">Pet Food</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="frozen.html">Frozen Snacks</a></li>
                                        <li><a href="frozen.html">Frozen Nonveg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="bread.html">Bread & Bakery</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="w3l_banner_nav_right">
            <!-- services -->
            <div class="services">
                <h3>Services</h3>
                <div class="w3ls_service_grids">
                    <div class="col-md-5 w3ls_service_grid_left">
                        <h4>cum soluta nobis est</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                            repellat.</p>
                    </div>
                    <div class="col-md-7 w3ls_service_grid_right">
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="images/18.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="images/19.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-4 w3ls_service_grid_right_1">
                            <img src="images/20.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3ls_service_grids1">
                    <div class="col-md-6 w3ls_service_grids1_left">
                        <img src="images/4.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-6 w3ls_service_grids1_right">
                        <ul>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>et voluptates repudiandae sint et molestiae</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>rerum necessitatibus saepe eveniet ut</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>placeat facere possimus, omnis voluptas</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Et harum quidem rerum facilis est et expedita</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>similique sunt in culpa qui officia deserunt</li>
                            <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>odio dignissimos ducimus qui blanditiis</li>
                        </ul>
                        <a href="single.html">Shop Now</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //services -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- services-bottom -->
    <div class="services-bottom">
        <div class="container">
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <p class="counter">89,147</p>
                <h3>Followers</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
                <p class="counter">54,598</p>
                <h3>Savings</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-export" aria-hidden="true"></i>
                <p class="counter">83,983</p>
                <h3>Support</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
                <p class="counter">45,894</p>
                <h3>Popularity</h3>
            </div>
            <div class="clearfix"> </div>
            <!-- Stats-Number-Scroller-Animation-JavaScript -->
            <script src="js/waypoints.min.js"></script>
            <script src="js/counterup.min.js"></script>
            <script>
                jQuery(document).ready(function( $ ) {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });
                });
            </script>
            <!-- //Stats-Number-Scroller-Animation-JavaScript -->

        </div>
    </div>
    <!-- //services-bottom -->
    <!-- newsletter-top-serv-btm -->
    <div class="newsletter-top-serv-btm">
        <div class="container">
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <h3>Nam libero tempore</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
                <h3>officiis debitis aut rerum</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <h3>eveniet ut et voluptates</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter-top-serv-btm -->
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
