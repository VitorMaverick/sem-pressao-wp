<?php

/*
Template Name: Home Page
*/
get_header();
 ?>

<div class="content-area">
 <main>

   <section id="intro" class="clearfix intro">
     <div class="container d-flex h-100">
       <div class="row justify-content-center align-self-center">
         <div class="col-md-6 intro-info order-md-first order-last">
           <h2>Sua saúde importa!</h2>
           <div>
             <a href="#about" class="btn-get-started scrollto">Saiba mais</a>
           </div>
         </div>
       </div>

     </div>
   </section>
   <!--==========================
      SOBRE NÓS
    ============================-->

    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="<?php echo get_bloginfo('template_url') ?>/inc/img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Sobre nós</h2>
              <p>A Sem Pressão trata de uma equipe multidisciplinar, com o objetivo <br >minimizar os riscos que comprometem o bem estar que resultam <br>
              em doenças ocupacionais e na baixa produtividade dos colaboradores.<br>
              Utilizando recursos alternativos e de baixo custo, como Quick Massage,<br> Mindfulness e Atendimento Psicológico. Entre contato conosco e conheça<br> nossos serviços!</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==================
    FIM DE SOBRE NÓS
   =====================-->


    <!--==========================
      SECTION DE SERVIÇOS
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Serviços</h3>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Mindfulness</a></h4>
              <p class="description">Mindfulness é um conjunto de técnicas
                práticas, possíveis e cientificamente
                comprovadas que te ajudam a focar no
                momento presente, sem deixar o passado ou
                o futuro te afetarem, tornando sua mente
                mais desperta e saudável, sendo sua aliada.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Quick Massage</a></h4>
              <p class="description">A Quick Massage é uma combinação das
                massagens orientais Shiatsu e Anmá, e sua
                introdução às empresas foi feita por um
                terapeuta que trabalhava para a Apple, chamado
                David Palmer. Ele precisava lidar com o crescente
                número de funcionários afastados por questões
                de saúde. Os resultados foram tão positivos que a
                técnica se espalhou por outras empresas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background:#fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Atendimento Psicologico</a></h4>
              <p class="description">O Atendimento Psicológico tem a finalidade de
                ajudar e trabalhar em todas as questões emocionais,
                comportamentais, relacionamento, carreira, profissão,
                família, casamento, timidez, ansiedades, depressão,
                questões psiquiátricas ou existenciais.</p>
            </div>
          </div>


        </div>

      </div>
    </section>

    <!--====================
    FIM DE SECTION SERVIÇOS
    ======================-->

    <!--==========================
      SECTION TEAM
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Equipe</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Deise Rodrigues</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/deise-rodrigues-bbba16179/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Déborah Rodrigues</h4>
                  <span>CO-Chief Executive Officer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/d%C3%A9borah-rodrigues-598792a9"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aline Fonseca</h4>
                  <span>Socia Colaboradora</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/aline-fonseca-a101b419a"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hilha Maia</h4>
                  <span>Socia Colaboradora</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/h%C3%ADlia-maia-7480a019a"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--=====================
      FIM DE SECTION TEAM
    ========================-->


 </main>
</div>
<?php get_footer(); ?>
