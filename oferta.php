<?php include("include/header.php"); ?>
<?php include("include/menu.php"); ?>

   <div id="tit_paginas"><h1 class="titulos">oferta</h1></div>

 <!-- Sobre Cancun -->
   <div class="container">
      <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
           <div id="box_red">
            <span class="titulo_preco">INFOS</span><br>
            <span class="tt1">A partir de:</span><br>
            <span class="tt2">à vista R$ 00000</span><br>
            <span class="tt3">Entrada</span><br>
            <span class="tt3">R$</span> <span class="tt4">0000,</span> <span class="tt5">00</span><br>
            <span class="tt3">+ 0X</span> <span class="tt2">de</span><br>
            <span class="tt3">R$</span> <span class="tt4">00,</span> <span class="tt5">00</span><br>
            </div>
           <div id="fundo_img_oferta">
               <a href="atendimento.php" target="_blank" class="botao_oferta"><i class="fa fa-file-pdf-o"></i> Solicitar Oferta</a></div>
        </div>

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div id="box_branco" class="texto_corrido">
             <span class="titulo_inclui">INCLUI</span><br>
              <ul>
                  <li>Passagem aérea em voo direto Guarulhos / Cancún / Guarulhos</li>
                  <li>Traslados aeroporto / hotel / aeroporto</li>
                  <li>07 noites de hospedagem no hotel Flamingo Cancun</li>
                  <li>01 jantar grátis (por pessoa) no restaurante Sr. Frogs</li>
                  <li>US$ 30 de crédito (por apartamento) para nado com golfinhos</li>
                  <li>Wi-Fi grátis nas dependências do hotel Flamingo</li> 
                  <li>Seguro assistencial de viagem</li>  
              </ul>
              
              
          </div></div>
      
       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div id="fundo_img_oferta"><img src="img/img_oferta.jpg" class="img-responsive"></div>
           <span class="tt_mini">Os preços informados foram convertidos em Reais no dia 08/12/2015 ao câmbio de US$ 1= R$ 3,98 e está sujeito a variação cambial na data da compra. Preço por pessoa em apto duplo. Válido para saída aos sábados de 18/Fev. a 18/Jun/2016.  Parcelamento: Entrada de 25% à vista e saldo em até 9x no cartão de crédito ou cheque pré-datado. Preço válido para opções e datas mais econômicas e até 1 dia após esta publicação. Não válido para período de feiras, feriados, congressos e eventos. Inclui parte aérea e terrestre. Não inclui taxas de embarque aeroportuárias, obrigatórias, no valor de US$ 73 por pessoa ida/volta. Ofertas de lugares limitada. Reservas sujeitas a disponibilidade.</span><br><br><br>
           <a href="" target="_blank" class="botao_oferta"><i class="fa fa-file-pdf-o"></i> Faça o Download da Oferta</a>
       
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
	