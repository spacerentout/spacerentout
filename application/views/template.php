<?php $this->load->view('includes/doctype'); ?>
<head>
	<?php $this->load->view('includes/html_header');?>
</head>

<body>

<!-- wrapper (start)-->
<div id="wrap" class="home-1">
    
    <?php $this->load->view('includes/header');?>
  
    <?php $this->load->view('modules/'.$module);?>
  
    <?php $this->load->view('includes/footer');?>

</div>
<!-- wrapper (end)-->
<?php $this->load->view('includes/html_footer');?>

</body>
</html>