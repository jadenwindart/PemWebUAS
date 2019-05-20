<!DOCTYPE html>
<html>
<head>
	<title> Cpanel</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css')?>">
</head>
<body>
	<?php echo $navbar; ?>
	<br/>
	<br/>
	<br/>
	<br/>
	<table id="table" class='table'>
        <thead>
            <th>Username</th>
            <th>ID Cart</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php foreach( $transaction as $trans){?>
                <tr>
                    <td><?php echo $trans['username']?></td>
                    <td><?php echo $trans['idCart']?></td>
                    <td>
                        <?php 
                            switch($trans['status']){
                                case 0 : echo "Belum Checkout";
                                        break;

                                case 1 : echo "Sudah Checkout";
                                        break;
                                default: echo "Error";
                            
                            }
                        
                        ?>
                
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
</html>