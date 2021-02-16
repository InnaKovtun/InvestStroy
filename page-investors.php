<?php
/*
Template Name: Инвесторам
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
                    <ul class="content-links">
                        <li><a href="#" class="link">Договор займа »</a></li>
                        <li><a href="#" class="link">Договор погашения »</a></li>
                        <li><a href="#" class="link">Договор залога »</a></li>
                        <li><a href="#" class="link">Договор поручительства »</a></li>
                    </ul>
                </div>
                <!-- /.content -->
                <div class="calc">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="calc-programms">
                                <div class="calc-radio">
                                    <input type="radio" data-month="6" data-per="0.2" checked name="programms" id="first">
                                    <label for="first">
                                        <span>20% годовых<small>на 6 месяцев</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="12" data-per="0.24" name="programms" id="second">
                                    <label for="second">
                                        <span>24% годовых<small>на 1 год</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="24" data-per="0.26" name="programms" id="third">
                                    <label for="third">
                                        <span>26% годовых<small>на 2 года</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="36" data-per="0.28" name="programms" id="fours">
                                    <label for="fours">
                                        <span>28% годовых<small>на 3 года</small></span>
                                    </label>
                                </div>
                                <!-- /.calc-radio -->
                                <div class="calc-radio">
                                    <input type="radio" data-month="48" data-per="0.32" name="programms" id="fifth">
                                    <label for="fifth">
                                        <span>32% годовых<small>на 4 года</small></span>
                                    </label>
                                    <div class="calc-popular">
                                        популярная программа
                                    </div>
                                </div>
                                <!-- /.calc-radio -->
                            </div>
                            <div class="calc-legal">
                                <p>*Наша компания является налоговым агентом, удерживает и оплачивает НДФЛ Вся информация, размещенная на сайте, несет исключительно рекламный характер и не является публичной офертой.</p>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <h4>Укажите сумму инвестиций</h4>
                            <input type="text" class="calc-range" name="summ">
                            <div class="calc-summ_invest">
                                <span class="calc-summ_invest_label">Сумма:</span>
                                <span class="calc-summ_invest_num"><span>100 000</span> руб.</span>
                            </div>
                            <div class="div">
                                <span class="calc-total">
                                    <strong><span id="total">110 000</span> руб.</strong><br>
                                    <small>Сумма через <span id="month">6</span> месяцев</small>
                                </span>
                                <span class="calc-monthly">
                                    <strong><span>32 000</span> руб.</strong><br>
                                    <small>Ежемесячный доход</small>
                                </span>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.calc -->

<?php get_footer(); ?>