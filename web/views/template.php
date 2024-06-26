<?php
   $path = TemplateController::path();
    /*====================================================
	          Información de la base de datos
	=====================================================*/
    $url      = "templates?linkTo=active_template&equalTo=ok";
    $method   = "GET";
    $fields   = "[]";
    $template = CurlController::request($url,$method,$fields);

    if($template->status == 200)
    {
        $template = $template->results[0];   
    }else{
        //redireccionar a pagina error
    }

    $keywords = null;

    foreach(json_decode($template->keywords_template,true) as $key => $value) 
    {
      $keywords .= $value.", ";
    }

    $keywords   = substr($keywords, 0, -2);
    $fontFamily = json_decode($template->fonts_template)->fontFamily;
    $fontBody   = json_decode($template->fonts_template)->fontBody;
    $fontSlide  = json_decode($template->fonts_template)->fontSlide;
     
    $topColor      = json_decode($template->colors_template)[0]->top;
    $templateColor = json_decode($template->colors_template)[1]->template;
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $template->title_template ?></title>

        <meta name="description" content="<?php echo $template->description_template ?>">
        <meta name="keywords" content="<?php echo $keywords?>">

        <link rel="icon" href="<?php echo $path?>views/assets/img/template/<?php echo $template->id_template ?>/<?php echo $template->icon_template ?>">
         <!-- Google Font: Source Sans Pro -->
         <?php echo urldecode($fontFamily)?>
        <!-- =======================================================================================================================
                                                           CSS
            ======================================================================================================================= -->
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo $path?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Slide -->
        <link rel="stylesheet" href="<?php echo $path?>views/assets/css/plugins/jdSlider/jdSlider.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo $path?>views/assets/css/plugins/adminlte/adminlte.min.css">
        <link rel="stylesheet" href="<?php echo $path?>views/assets/css/Template/template.css">
        <!-- Products -->
        <link rel="stylesheet" href="<?php echo $path?>views/assets/css/products/products.css">
        <style>
            body {
                font-family: '<?php echo $fontBody?>', sans-serif;
            }

            .slideOpt h1,.slideOpt h2, .slideOpt h3 {
                font-family: '<?php echo $fontSlide?>', sans-serif;
            }

            .topColor {
                background: <?php echo $topColor->background ?>;
                color: <?php echo $topColor->color ?>;
            }

            .templateColor, .templateColor:hover, a.templateColor {
                background: <?php echo $templateColor->background ?> !important;
                color: <?php echo $templateColor->color ?> !important;
            }
        </style>
        <!-- =======================================================================================================================
                                                           JS
            ======================================================================================================================= -->
        <!-- jQuery -->
        <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JDSlider -->
        <script src="<?php echo $path?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>
         <!-- Knob -->
         <script src="<?php echo $path?>views/assets/js/plugins/knob/knob.js"></script>
    </head>
    <body class="hold-transition sidebar-collapse layout-top-nav">
        <div class="wrapper">
            <?php 
                include "modules/top.php"; 
                include "modules/navbar.php"; 
                include "modules/sidebar.php"; 
                include "pages/home/home.php";
                include "modules/footer.php"; 
            ?>
        </div>
        <!-- AdminLTE App -->
        <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
        <!-- Products -->
        <script src="<?php echo $path?>views/assets/js/products/products.js"></script>
    </body>
</html>
