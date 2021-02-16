<?php
/*
Template Name: Контакты
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
                    <h2>Контакты</h2>
                    <div class="contacts">
                        <p class="contacts-phone">
                            <img class="contacts-img" src="img/phone.png" alt="phone">
                            8 (800) 200-30-40
                        </p>
                        <p class="contacts-mail">
                            <img class="contacts-img" src="img/mail.png" alt="mail">
                            pochta@mail.ru
                        </p>
                        <a href="#" class="contacts-address">569447 г. Москва, ул. Морозова, д.12, 3 этаж</a>
                        <a href="#" class="contacts-address">569447 г. Москва, ул. Ленина, д. 23, офис 2</a>
                        <a href="#" class="btn btn-primary contacts-btn">Задать вопрос</a>
                    </div>
                    <div class="contacts-social-links">
                        <ul>
                            <li><a href="#"><i class="icon-vkontakte"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.content -->

<?php get_footer(); ?>