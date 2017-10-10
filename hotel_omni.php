<?php include("include/header.php"); ?>

		<div id="page">
			<div class="topo_mobile">
				<a href="#menu"></a>
			</div>
			<?php include("include/menu.php"); ?>
</div>
  
   <div id="tit_paginas" class="titulos">OMNI HOTELS & RESORTS</div>

 <!-- Sobre Cancun -->
  
<div class="container-fluid">
          <div id="demo">
               <div id="fundo_slogan">
                   <a href="http://www.omnihotels.com/hotels/cancun" target="_blank"><img src="img/logo_omni.jpg" class="img-responsive center-block"></a><br>
                <a href="http://www.omnihotels.com/hotels/cancun" target="_blank" class="link_site">www.omnihotels.com</a><br>
              </div>
        <div id="owl-demo" class="owl-carousel">
          
          <div class="item"><img src="img/galerias/h_omni/01.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_omni/02.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_omni/03.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_omni/04.jpg" class="img-responsive center-block"></div>
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
		autoPlay : true,


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
	