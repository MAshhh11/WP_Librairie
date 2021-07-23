<?php

/**
 * Template Name: about Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$asset = get_site_url() . '/assets/img/';

get_header();

// $args = array(
// 		'numberposts'      => 4,
// 		'post_type'        => 'materiel',
// );

// $materiels = get_posts( $args );

// var_dump($materiels);
?>

<div class="container-fluid">
    <div class="row main-img" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>);">
    </div>
    <div class="row main">
        <div class="col-12">
            <div class="container">
                <div class="row mt-5">
                    <div class="the-title mt-5">
                        <h2><?= the_title() ?></h2>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-12 p-5 mb-3">
                        <?= the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $image = get_field('image');
    ?>
    <div class="row mt-5">
        <div class="col-12">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                            <img src="<?= $image['url']; ?>" alt="image" style="width: 33%;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        get_footer();
