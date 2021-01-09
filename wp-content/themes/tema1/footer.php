<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">


              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Links</h4>
                  <?php
                    wp_nav_menu(
                      array(
                        'theme_location'=>'tema1_footer_menu',
                        'depth' => 1
                      )
                    );
                   ?>
                </div>

                <div class="footer-links">
                  <h4>Entre em contato</h4>
                    <strong>Telefone:</strong>(98) 9 8275-9907<br>
                    <strong>Email:</strong>startup.sempressao@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a target="_blank" href="https://twitter.com/PressaoSem" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a target="_blank" href="https://www.facebook.com/Sem-Press%C3%A3o-101121591313827/" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a target="_blank" href="https://www.instagram.com/_sem_pressao_/" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a target="_blank" href="https://www.linkedin.com/in/sem-press%C3%A3o-818332199/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

          </div>

        </div>

        <div class="col-lg-6">

          <!---====================
            FORMULARIO DE CONTATO
          =======================-->

            <div class="form">

                <h4>Entre em Contato</h4>
                <form action="salva_mensagem.php" method="POST" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Por favor! Digite seu nome!" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor! Digite um email valido!" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Objetivo" data-rule="minlen:4" data-msg="Por favor! Digite seu objetivo!" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor! Digite sua mensagem!" placeholder="Mensagem"></textarea>
                    <div class="validation"></div>
                  </div>

                  <div id="sendmessage">Sua mensagem foi enviada. Obrigado(a)!</div>
                  <div id="errormessage"></div>

                  <div class="text-center"><button type="submit" title="Send Message">Enviar</button></div>
                </form>
              </div>

              <!--=================
                FIM DE FORMULARIO DE CONTATO
              ====================-->
      </div>

    </div>
  </div>



  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Sem Pressão</strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
