<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>

   <div id="tit_paginas"><h1 class="titulos">oferta</h1></div>

 <!-- Sobre Cancun -->
   <div class="container">
      <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
           <div id="box_red">
            <span class="titulo_preco">SISTEMA ALL INCLUSIVE</span><br>
            <span class="tt1">A partir de:</span><br>
            <span class="tt2">R$ 2.098,00</span><br>

               <!--<span class="tt3">Entrada</span><br>
              <span class="tt3">R$</span> <span class="tt4">0000,</span> <span class="tt5">00</span><br>
              <span class="tt3">+ 0X</span> <span class="tt2">de</span><br>
              <span class="tt3">R$</span> <span class="tt4">00,</span> <span class="tt5">00</span><br>-->
              </div>
             <div id="fundo_img_oferta">
                 <a href="anuncio-campanha.php" target="_self" class="botao_oferta"><i class="fa fa-file-pdf-o"></i> Ver Anúncio da Campanha</a></div>
          </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div id="box_branco" class="texto_corrido">
               <span class="titulo_inclui">PACOTE INCLUI:</span><br>
                <ul>
                    <li>6 noites no hotel Flamingo</li>
                    <li>Traslados</li>
                    <li>Seguro viagem</li>
                </ul>


            </div></div>

         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
             <span class="tt_mini">O preço informado foi convertido em Reais no dia 30/11/2017 ao câmbio de US$ 1= R$ 3,40 e está sujeito a variação cambial na data da compra. Preço por pessoa em apto duplo. Válido para a saída até 15/Dezembro/2017. Preço válido para opções e datas mais econômicas e até 1 dia após esta publicação. Não válido para período de feiras, feriados, congressos e eventos. Não inclui parte aérea, consulte nossas ofertas. Ofertas de lugares limitada. Reservas sujeitas a disponibilidade.</span><br><br><br>


         </div>
         </div>


     </div>
     <div id="espaco"></div>
  <div class="container-fluid">
            <div id="demo">
                  <img src="img/logo_flamingo2.jpg" class="img-responsive center-block"><br>
          <div id="owl-demo" class="owl-carousel">
              <div class="item"><img src="img/galerias/h_flamingo/01.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/02.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/03.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/04.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/05.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/06.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/07.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/08.jpg" class="img-responsive center-block"></div>
              <div class="item"><img src="img/galerias/h_flamingo/09.jpg" class="img-responsive center-block"></div>
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
	