<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Uv Woo
 */

get_header();
?>
    <!-- Slider -->
    <div class="slider">
        <div class="container">
            <!-- Slider code goes here -->
            slider
        </div>
    </div>

    <!-- Promotions -->
    <div class="promotions">
        <div class="container">
            <!-- Promotions code goes here -->
            promotions
        </div>
    </div>

    <!-- Popular Products -->
    <div class="popular-products">
        <div class="container">
            <!-- Popular products code goes here -->
            popular
        </div>
    </div>

    <!-- New Arrivals -->
    <div class="new-arrivals">
        <div class="container">
            <!-- New arrivals code goes here -->
            new arrivals
        </div>
    </div>

    <!-- Deal of the Week -->
    <div class="deal-of-the-week">
        <div class="container">
            <!-- Deal of the week code goes here -->
            deal of the week
        </div>
    </div>

    <!-- News -->
    <div class="news">
        <div class="container">
            <!-- News code goes here -->
            news
        </div>
    </div>
<?php get_footer(); ?>