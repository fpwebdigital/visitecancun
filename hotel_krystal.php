<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>

   <div id="tit_paginas" class="titulos">KRYSTAL GRAND PUNTA CANCÚN</div>

 <!-- Sobre Cancun -->
  
<div class="container-fluid">
          <div id="demo">
               <div id="fundo_slogan" class="centralizar">
                   <a href="http://www.krystal-hotels.com.mx/" target="_blank"><img src="img/logo_krystal.jpg" class="img-responsive center-block"></a>
                <a href="http://www.krystal-hotels.com.mx/" target="_blank" class="link_site">www.krystal-hotels.com.mx</a><br>
              </div>
        <div id="owl-demo" class="owl-carousel">
          
          <div class="item"><img src="img/galerias/h_krystal/01.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/02.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/03.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/04.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/05.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/06.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/07.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_krystal/08.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_krystal/09.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_krystal/10.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_krystal/11.jpg" class="img-responsive center-block"></div>
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
	