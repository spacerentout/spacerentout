<script src="<?=base_url()?>assets/js/jquery-1.11.0.min.js"></script> 
<script src="<?=base_url()?>assets/js/wow.min.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap-select.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap-select.js"></script> 
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.stellar.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.flexslider-min.js"></script> 
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.sticky.js"></script> 
<script src="<?=base_url()?>assets/js/own-menu.js"></script> 
<script src="<?=base_url()?>assets/js/jquery.nouislider.min.js"></script> 
<script src="<?=base_url()?>assets/js/main.js"></script> 
<script type="text/javascript">
  /*-----------------------------------------------------------------------------------*/
/*    PRICE RANGE
/*-----------------------------------------------------------------------------------*/
$("#price-range").noUiSlider({
  range: {
      'min': [ 0 ],
      'max': [ 10000000]},
  start: [0, 10000000],
       connect:true,
       serialization:{
           lower: [
         $.Link({
          target: $("#price-min")
        })],
   upper: [
          $.Link({
          target: $("#price-max")
        })],
   format: {
      // Set formatting
          decimals: 0,
          prefix: '$'
  }}
});
</script>