@extends("Theme.layout")
@section("main")
    <!-- header -->
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
                <li>Mail Us</li>
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
            <!-- mail -->
            <div class="mail">
                <h3>Mail Us</h3>
                <div class="agileinfo_mail_grids">
                    <div class="col-md-4 agileinfo_mail_grid_left">
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                            <li>address<span>868 1st Avenue NYC.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li>email<span><a href="mailto:info@example.com">info@example.com</a></span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                            <li>call to us<span>(+123) 233 2362 826</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 agileinfo_mail_grid_right">
                        <form action="#" method="post">
                            <div class="col-md-6 wthree_contact_left_grid">
                                <input type="text" name="Name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
                                <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                            </div>
                            <div class="col-md-6 wthree_contact_left_grid">
                                <input type="text" name="Telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
                                <input type="text" name="Subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
                            </div>
                            <div class="clearfix"> </div>
                            <textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Clear">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //mail -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- map -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96748.15352429623!2d-74.25419879353115!3d40.731667701988506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshopping+mall+in+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1467205237951" style="border:0"></iframe>
    </div>
    <!-- //map -->
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
