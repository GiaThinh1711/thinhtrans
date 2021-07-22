<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getTrangChu(){
        return view("Theme.trangchu");
    }

    public function getAbout(){
        return view("Theme.about");
    }

    public function getBread(){
        return view("Theme.bread");
    }

    public function getCheckout(){
        return view("Theme.checkout");
    }

    public function getEvents(){
        return view("Theme.events");
    }

    public function getFaqs(){
        return view("Theme.faqs");
    }

    public function getKitchen(){
        return view("Theme.kitchen");
    }

    public function getLogin(){
        return view("Theme.login");
    }

    public function getMail(){
        return view("Theme.mail");
    }

    public function getPayment(){
        return view("Theme.payment");
    }

    public function getPrivacy(){
        return view("Theme.privacy");
    }

    public function getProducts(){
        return view("Theme.products");
    }

    public function getSingle(){
        return view("theme.single");
    }

    public function getVegetables(){
        return view("Theme.vegetables");
    }

    public function getServices(){
        return view("Theme.services");
    }

}
