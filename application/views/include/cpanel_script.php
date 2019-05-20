<script src="<?php echo base_url('assets/themes/js/jquery.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/themes/js/bootstrap.min.js')?>" type="text/javascript"></script>

<?php foreach($crud['js_files'] as $file){?>
    <script src="<?php echo $file?>"></script>
<?php }?>
