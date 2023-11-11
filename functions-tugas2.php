<?php


class Admin {
    public static function login_form() {
        // Implementasi form login admin
        include('../view/admin-panel/admin-login.php');
    }

    public static function login_save() {
        // Implementasi penyimpanan login admin
        include('/../view/shop/home.php');
    }

    public static function dashboard() {
        // Implementasi dashboard admin
        include('../view/admin-panel/admin-dashboard.php');
    }
}

class Customer {
    public static function login_form() {
        // Implementasi form login customer
        include('../view/forms/customer-login.php');
    }

    public static function login_save() {
        // Implementasi penyimpanan login customer
        include('/../view/shop/home.php');
    }

    public static function register_form() {
        // Implementasi form registrasi customer
        include('../view/forms/customer-register.php');
    }

    public static function register_save() {
        include('/../view/forms/customer-login.php');
    }

    public static function profile() {
        // Implementasi tampilan profil customer
        include('../view/forms/customer-profile.php');
    }

    public static function profile_edited() {
        include('/../view/forms/customer-profile.php');
    }
}

class Home {
    public static function index() {
        // Implementasi tampilan halaman utama
        include('../view/shop/home.php');
    }
}

class Item {
    public static function index() {
        // Implementasi tampilan daftar item
        include('../view/shop/item.php');
    }

    public static function show($id) {
        // Implementasi tampilan detail item
        include('../view/shop/item.php');
    }
}

class Cart {
    public static function index() {
        // Implementasi tampilan keranjang belanja
        include('../view/shop/cart.php');
    }
}

class Order {
    public static function index() {
        // Implementasi tampilan daftar pesanan
        include('../view/shop/order.php');
    }

    public static function show($id) {
        // Implementasi tampilan detail pesanan
        include('../view/shop/order.php');
    }
}

class Contact {
    public static function index() {
        // Implementasi tampilan halaman kontak
        include('../view/shop/contact.php');
    }
}

class User {
    public static function logout() {
        // Implementasi proses logout
        include('../view/forms/customer-login.php');
    }
}
?>
