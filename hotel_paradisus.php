<?php include("include/header.php"); ?>

		<div id="page">
			<div class="topo_mobile">
				<a href="#menu"></a>
			</div>
			<?php include("include/menu.php"); ?>
</div>
  
   <div id="tit_paginas" class="titulos">PARADISUS CANCUN RESORT</div>

 <!-- Sobre Cancun -->
  
<div class="container-fluid">
          <div id="demo">
               <div id="fundo_slogan">
                   <a href="http://www.paradisus.com/" target="_blank"><img src="img/logo_paradisus.jpg" class="img-responsive center-block"></a><br>
                <a href="http://www.paradisus.com/" target="_blank" class="link_site">www.paradisus.com</a><br>
              </div>
        <div id="owl-demo" class="owl-carousel">
          
          <div class="item"><img src="img/galerias/h_paradisus/01.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_paradisus/02.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_paradisus/03.jpg" class="img-responsive center-block"></div>
          <div class="item"><img src="img/galerias/h_paradisus/04.jpg" class="img-responsive center-block"></div>
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
	