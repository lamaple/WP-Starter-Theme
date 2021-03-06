<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title( '', true, '' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body <?php do_action( 'add_body_data' ); ?>>
<div class="wrapper">
    <header>
        <h1>Hello World</h1>
        <div><span class="ic-bell"></span></div>
    </header>