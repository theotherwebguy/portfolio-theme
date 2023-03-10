<?php
/**
 * Header Template
 * 
 * @package Portfolio
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes( ) ?>">
<head>
    <meta charset="<?php bloginfo( charset ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Theme</title>
    <?php wp_head() ?>
</head>
<body <?php body_class( ); ?>>

    <!-- helps to inject GA or tracking scripts -->

    <?php
        if(function_exists('wp_body_open')){
            wp_body_open(  );
        }
     ?>
    <div id="page" class="site">
        <header id="mustheaf" class="site-header">

        </header>
        <div id="content" class="site-content">

