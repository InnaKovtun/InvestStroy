<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>СтройИнвест - корпоративный сайт</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <?php wp_head()?>    
</head>
<body>
    
    <div class="container">
        <div class="top-nav">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-auto col-sm-3 ">
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <!-- /.col-md -->
                <div class="col-md-auto col-sm-9">
                    <button class="top-nav_btn">
                        <i class="icon-menu"></i>
                    </button>
                    <?php wp_nav_menu( array(
                      'container' => 'ul',
                      'menu_class' => 'top-nav_menu',
                      'echo' => true,
                    ) );?>
                </div>
                <!-- /.col-md -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.top-nav -->
