<?php
/*
Template Name: О компании
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
                <!-- /.content -->
                <h2>Руководство компании</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/img/team/1.png" alt="1">                      
                            <h4>Петров Дмитрий</h4>
                            <p>Руководитель компании</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/team/2.png" alt="2">
                            <h4>Иванов Васисилий</h4>
                            <p>Директор, руководитель Департамента по работе с недвижимостью</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/team/3.png" alt="3"></img>
                            <h4>Василькова Анна</h4>
                            <p>Руководитель Департамента по работе с клиентами</p>
                        </div>
                    </div>
                </div>

<?php get_footer(); ?>