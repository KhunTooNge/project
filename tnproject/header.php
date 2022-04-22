<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/63064025bf.js" crossorigin="anonymous"></script>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css"> 

</head>
<body>


<div class="header">
        <div>
            <img src="http://localhost/wordpress/wp-content/uploads/2022/04/mylogo-2.png" alt="" width = "120px" height="50px">
        </div>
        <div class="input-group mb-3">
            <input type="search" class="form-control" placeholder="Search for Products"
                aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">All Categories</span>
        </div>
        <div class="header_nav">
            <ul>
                <li>
                    <a href=""><i class="fa-solid fa-heart "></i></a>
                </li>
                <li>
                    <a href="<?= home_url(); ?>/Account" >
                        <i class="fa-solid fa-id-card "></i>
                        <div style= "display: inline-block; line-height: 16px; "><span>Hello,SignIn</span><br>Account</a></div>
                </li>
                <li>
                    <a href="<?= home_url();?>/My-Cart">
                        <i class="fa-brands fa-shopify"></i>
                        <div style= "display: inline-block; line-height:16px"><span>My Cart</span><br>$100,000</a></div>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li>
                <a href="<?= home_url(); ?>/Deperment"><i class="fa-solid fa-store" style="margin-left:2px;"></i>Deperment</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>">Home</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>/Shop">Shop</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>/Account">Account</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>/Pages">Pages</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>/Blog">Blog</a>
            </li>
            <li>
                <a href="<?= home_url(); ?>/docs-components">Docs/Components</a>
            </li>
        </ul>
    </div>







   
    