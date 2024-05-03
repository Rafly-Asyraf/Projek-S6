<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gossert</title>

    
    <!-- font awesome cdn link logo  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link  -->
    <<link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>
<body>
    
<!-- header section starts -->

<header>

    <a href="<?= base_url('home'); ?>" class="logo"><i class="fas fa-ice-cream"></i>Gossert</a>

    <nav class="navbar">
        <a href="<?= base_url('home'); ?>">home</a>
        <a href="<?= base_url('home/#menu'); ?>">menu</a>
        <a href="<?= base_url('home/#about'); ?>">about</a>
        <a href="<?= base_url('order'); ?>">order</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="<?= base_url('order'); ?>" class="fas fa-shopping-cart"></a>
        <a href="<?= base_url('autentifikasi'); ?>" class="fa fa-user"></a>
        
    </div>

</header>