<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

get_header(); ?>

    <div id="_single" class="row">
        <div id="primary" class="ninecol content-area">
            <div id="content" class="site-content _content-box" role="main">
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="unit_list_item">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="unit_list_item_logo">
                        <a href="http://topspejder.dk/files/familie_logo_100.png">
                            <img alt="" src="<?php the_field('unitLogo'); ?>" style="width: 155px;height: 100px;float: left">
                        </a>
                    </div> <!-- .unit_list_item_logo -->
                    <div class="unit_list_item_data">
                        <div class="unit_list_item_data_wrapper">
                            <div class="unit_list_item_data_item">Aldergruppe:</div><div class="unit_list_item_data_value"><?php the_field('unitTarget'); ?></div>
                        </div> <!-- .unit_list_data_wrapper -->
                        <div class="unit_list_item_data_wrapper">
                            <div class="unit_list_item_data_item">Mødetider:</div>
                            <div class="unit_list_item_data_value"><?php the_field('unitMeeting'); ?></div>
                        </div> <!-- .unit_list_data_wrapper -->
                        <div class="unit_list_item_data_wrapper">
                            <div class="unit_list_item_data_item">Kontaktperson:</div>
                            <div class="unit_list_item_data_value"><?php the_field('unitContact'); ?></div>
                        </div> <!-- .unit_list_data_wrapper -->
                        <div class="unit_list_item_data_wrapper">
                            <div class="unit_list_item_data_item">Telefon:</div>
                            <div class="unit_list_item_data_value"><?php the_field('unitContactPhone'); ?></div>
                        </div> <!-- .unit_list_data_wrapper -->
                        <div class="unit_list_item_data_wrapper">
                            <div class="unit_list_item_data_item">Email:</div>
                            <div class="unit_list_item_data_value"><?php the_field('unitContactEmail'); ?></div>
                        </div> <!-- .unit_list_data_wrapper -->
                    </div> <!-- .unit_list_item_data -->
                </div> <!-- .unit_list_item -->


            <?php the_content(); ?>
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->
            <?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
    </div><!-- #single .row -->
<?php get_footer(); ?>