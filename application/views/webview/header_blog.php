<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Patazone, Patazon, Online shopping, Best prices, Buy electronics, RNG Plaza">
    <title><?= $pg_title ?></title>
    <link rel="icon" href="<?php echo base_url() ?>/az.svg" type="image/gif">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?php echo base_url(); ?>assets/css/style-prefixed.css">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css" integrity="sha512-EvFBzDO3WBynQTyPJI+wLCiV0DFXzOazn6aoy/bGjuIhGCZFh8ObhV/nVgDgL0HZYC34D89REh6DOfeJEWMwgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/grid.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/queries.css">



</head>

<body>
    <nav>
        <div class="nav-row">
            <a class="mobile-nav js--mobile-nav"><i class="fa-solid fa-bars"></i></a>
            <a href="<?php echo base_url() . 'pblog/index' ?>">
                <img src="<?= base_url() . 'assets/img/WhiteLogo.svg' ?>" alt="white_logo" class="logo"></a>
            <ul class="main-nav js--main-nav">
                <li><a href="<?php echo base_url() . 'pblog/index' ?>#motto">Our Core</a></li>
                <li><a href="<?php echo base_url() . 'pblog/index' ?>#products">Our Products</a></li>
                <li><a href="<?php echo base_url() . 'pblog/index' ?>#info">Getting Started</a></li>
                <li><a href="<?php echo base_url() . 'pblog/index' ?>#choice">101 Questions</a></li>
            </ul>
        </div>
    </nav>