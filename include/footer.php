 <!-- Rodapé -->

 <div id="fundo_rodape" class="txt_direitos">© 2017/2018 Visite Cancún - Todos os direitos reservados</div>



        		<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>

           <script src="js/jquery.splitflap.js"></script>
<script>
    (function ($) {
        $(document).ready(function () {
            $('.do-splitflap')
                    .splitFlap();

            $('.click-splitflap')
                    .splitFlap({
                        textInit:   'click',
                        autoplay:   false,
                        onComplete: function () {
                            console.log('Done !');
                        }
                    })
                    .click(function () {
                        $(this).splitFlap('splitflap').animate();
                    });

            $('.empty-splitflap')
                    .splitFlap({
                        text: 'This is JS'
                    });

            var ratio = 0.5;
            $('.resized-splitflap')
                    .splitFlap({
                        charWidth:  50 * ratio,
                        charHeight: 100 * ratio,
                        imageSize:  (2500 * ratio) + 'px ' + (100 * ratio) + 'px'
                    });
        });
    })(jQuery);
</script>

 <script type="text/javascript">
     /* <![CDATA[ */
     var google_conversion_id = 824974657;
     var google_custom_params = window.google_tag_params;
     var google_remarketing_only = true;
     /* ]]> */
 </script>
 <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
 </script>
 <noscript>
     <div style="display:inline;">
         <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/824974657/?guid=ON&amp;script=0"/>
     </div>
 </noscript>




	</body>
</html>