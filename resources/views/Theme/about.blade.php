@extends("Theme.layout")
@section("main")
    <div class="agileits_header"    >
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
            <!-- about -->
            <div class="privacy about">
                <h3>About Us</h3>
                <p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                    rerum facilis est et expedita distinctio.</p>
                <div class="agile_about_grids">
                    <div class="col-md-6 agile_about_grid_right">
                        <img src="images/31.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-6 agile_about_grid_left">
                        <ol>
                            <li>laborum et dolorum fuga</li>
                            <li>corrupti quos dolores et quas</li>
                            <li>est et expedita distinctio</li>
                            <li>deleniti atque corrupti quos</li>
                            <li>excepturi sint occaecati cupiditate</li>
                            <li>accusamus et iusto odio</li>
                        </ol>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //about -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3>Meet Our Amazing Team</h3>
            <div class="agileits_team_grids">
                <div class="col-md-3 agileits_team_grid">
                    <img src="images/32.jpg" alt=" " class="img-responsive" />
                    <h4>Martin Paul</h4>
                    <p>Manager</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="images/33.jpg" alt=" " class="img-responsive" />
                    <h4>Michael Rick</h4>
                    <p>Supervisor</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="images/34.jpg" alt=" " class="img-responsive" />
                    <h4>Thomas Carl</h4>
                    <p>Supervisor</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid">
                    <img src="images/35.jpg" alt=" " class="img-responsive" />
                    <h4>Laura Lee</h4>
                    <p>CEO</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="w3_testimonials_grids">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Andrew Smith <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Thomson Richard <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Crisp Kale <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>John Paul <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rosy Carl <span>Customer</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                        repellat.</p>
                                    <h4>Rockson Doe <span>Customer</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
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