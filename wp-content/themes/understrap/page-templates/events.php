<?php

/**
 * Template Name: events Template
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
                <div class="row">
                    <div class="the-title mt-5">
                        <h2><?= the_title() ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5">
                        <?= the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$articles = get_field('article');
?>
<div class="row articles justify-content-center">
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="row justify-content-around mb-5">
                    <?php foreach ($articles as $article) : ?>
                        <div class="card" style="width: 80%;">
                            <img class="card-img-top" src="<?= $article['image']['url']; ?>" alt="Card image cap">
                            <div class="card-body p-5">
                                <h4><?= $article['titre']; ?></h4>
                                <p class="card-text"><?= $article['texte']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
