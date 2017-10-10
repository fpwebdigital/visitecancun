<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>

   <div id="tit_paginas" class="titulos">IBEROSTAR HOTELS & RESORTS</div>

 <!-- Sobre Cancun -->
  
<div class="container">
          <div id="demo">
               <div id="fundo_slogan" class="centralizar">
                   <a href="https://www.iberostar.com/pt/hoteis/cancun/iberostar-cancun/ofertas" target="_blank"><img src="img/logo-iberostar.jpg" class="img-responsive center-block"></a><br>
                <a href="https://www.iberostar.com/pt/hoteis/cancun/iberostar-cancun/ofertas" target="_blank" class="link_site">www.iberostar.com</a><br>
              </div>
        <div id="owl-demo" class="owl-carousel">
          
          <div class="item"><img src="img/galerias/h_iberostar/01.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_iberostar/02.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_iberostar/03.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_iberostar/04.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_iberostar/05.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_iberostar/06.jpg" class="img-responsive center-block"></div>
            <div class="item"><img src="img/galerias/h_iberostar/07.jpg" class="img-responsive center-block"></div>
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
	