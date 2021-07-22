@extends("Theme.layout")
@section("main")
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
                <h1><a href="{{asset("user/index")}}"><span>Grocery</span> Store</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="{{asset("user/events")}}">Events</a><i>/</i></li>
                    <li><a href="{{asset("about")}}">About Us</a><i>/</i></li>
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
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{asset("user/index")}}">Home</a><span>|</span></li>
                <li>About Us</li>
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
            <!-- events -->
            <div class="events">
                <h3>Events</h3>
                <div class="w3agile_event_grids">
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>cum soluta nobis eligendi</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-bullseye" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>rerum hic tenetur a sapiente</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3agile_event_grids">
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>earum rerum tenetur sapiente</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>quibu aut officiis debitis</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3agile_event_grids">
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>necessitatibus saepe eveniet</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 w3agile_event_grid">
                        <div class="col-md-3 w3agile_event_grid_left">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-9 w3agile_event_grid_right">
                            <h4>repudiandae sint et molestiae</h4>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                voluptatibus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="events-bottom">
                    <div class="col-md-6 events_bottom_left">
                        <div class="col-md-4 events_bottom_left1">
                            <div class="events_bottom_left1_grid">
                                <h4>20</h4>
                                <p>July, 2016</p>
                            </div>
                        </div>
                        <div class="col-md-8 events_bottom_left2">
                            <img src="{{asset("images/15.jpg")}}" alt=" " class="img-responsive" />
                            <h4>ut aut reiciendis facere possimus</h4>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:00 PM</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                            </ul>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 events_bottom_left">
                        <div class="col-md-4 events_bottom_left1">
                            <div class="events_bottom_left1_grid">
                                <h4>21</h4>
                                <p>July, 2016</p>
                            </div>
                        </div>
                        <div class="col-md-8 events_bottom_left2">
                            <img src="{{asset("images/16.jpg")}}" alt=" " class="img-responsive" />
                            <h4>maxime placeat facere possimus</h4>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:30 PM</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                            </ul>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                assumenda est.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //events -->
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
