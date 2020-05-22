<!DOCTYPE html>
<html lang="en">
<head>
    <?php View::element('header_required');?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=$view->getThemePath()?>/css/style.css" rel='stylesheet' type='text/css' media='screen and (min-width:1000px)'>
    <link href="<?=$view->getThemePath()?>/css/mobile.css" rel='stylesheet' type='text/css' media='screen and (max-width:500px)'>
</head>

<body>
    <div class="title">
         <h1>
             Title Section
         </h1>
    </div>
    <div class="body">
        <h1>
            Body Section
        </h1>
    </div>
    <div class="footer">
        <h1>
            Footer section
        </h1>
    </div>
    <?Loader::element('footer_required'); ?>
</body>

</html>