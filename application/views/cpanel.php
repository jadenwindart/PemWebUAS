<!DOCTYPE html>
<html>
<head>
    <?php echo $style; ?>
</head>
<body>
    <?php echo $navbar;?>
    <div class="container-fluid">
        <div class="row" style="margin-top:100px;">
            <div class="col-md-12"><?php echo $crud['output'];?></div>
        </div>
    </div>
</body>
    <?php echo $script?>
</html>