<?php include("include/header.php"); ?>
		<?php include("include/menu.php"); ?>

   <div id="tit_paginas" class="titulos">galeria de fotos</div>

 <!-- Sobre Cancun -->
  
<div class="container">
          <div id="demo">
        <div id="owl-demo" class="owl-carousel">
          
          <div class="item"><img src="img/galerias/cancun/01.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/02.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/03.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/04.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/05.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/06.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/07.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/08.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/09.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/10.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/11.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/12.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/cancun/13.jpg" class="img-responsive center-block"></div>

        </div>
    </div>
    
</div>
    <script src="js/owl.carousel.js"></script>
    <style>
    #owl-demo .item{
        margin: 5px;
        color: #FFF;
        text-align: center;
    }
    </style>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
         navigation : false,
		pagination: true,
		autoPlay : true

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>
    <!-- Rodapé -->
     <?php include("include/footer.php"); ?>
	