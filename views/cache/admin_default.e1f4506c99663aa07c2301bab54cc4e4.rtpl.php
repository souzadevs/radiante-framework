<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>
        Início
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo $resources_css; ?>

</head>

<body>

    <?php echo $header; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-light p-0">
                
                <?php echo $leftbar; ?>
            
            </div>
            <div class="col-9 p-0">
                
                <?php echo $content; ?>
                
            </div>
        </div>
    </div>



    <?php echo $resources_js; ?>

</body>

</html>