<?php
/*
Template Name: Наши услуги
*/
?>

<?php get_header(); ?>
<div class="row">
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8">
            <div class="content">
                <h2><?php the_title();?></h2>
                <?php the_content(); ?>
                </div>

<?php get_footer(); ?>