<?php defined('BASEPATH') OR exit('No direct script access allowed')?>
<!DOCTYPE html>
<html>
<head>
    <title>Week14</title>
    <?php 
        echo $style;
        echo $script;
    ?>
</head>
<body>
    <div id="ModalLogin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign In</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('Cpanel/Login'); ?>
                    <div class="form-group">
                        <label class="col-sm-2" for="Email">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>
                        <?php echo form_error('username');?>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="pass" placeholder="Password" required>
                        </div>
                        <?php echo form_error('pass');?>
                    </div>    
                        <input type="submit" value="Login" class="btn btn-primary">
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#ModalLogin').modal({
            keyboard:false,
            show:true ,
            backdrop:'static'
        })
    } );
</script>
</html>