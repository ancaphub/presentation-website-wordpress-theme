<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

<?php get_header(); ?>

<div id="home">
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="#presentation" class="current">Apresentação</a></li>
          <li><a href="#features">Funções</a></li>
          <li><a href="#news">Novidades</a></li>
        </ul>
      </nav>
    </header>
    <div id="header-wrapper"></div>

    <section id="presentation">
      <h3 class="section-title">AncapHub</h3>
      <p class="section-description">
        A plataforma que vai conectar e formar libertários em todo planeta
      </p>

      <div class="plyr__video-embed" id="video-player">
        <iframe
          src="https://www.youtube.com/embed/sOtMRISWjQQ?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
          allowfullscreen allowtransparency allow="autoplay"></iframe>
      </div>
    </section>

    <section id="features">
      <h3 class="section-title">Funções</h3>
      <p class="section-description">Confira todas as funções já confirmadas:</p>
      <ul>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-search-location"></i>
            </div>
            <h4 class="info-title">Localizador</h4>
            <p>
              Caso você ativar a função de localização poderá encontrar outros
              usuários que tenham a função ativada em um raio de até 300km.
            </p>
          </div>
        </li>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-user"></i>
            </div>
            <h4 class="info-title">Perfil Personalizado</h4>
            <p>
              Será possível utilizar o site sem cadastro, porém usuários
              cadastrados podem preencher seu perfil, publicar atualizações e
              seguir outros usuários.
            </p>
          </div>
        </li>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-folder-open"></i>
            </div>
            <h4 class="info-title">Biblioteca</h4>
            <p>
              Possuiremos uma coleção recheada de livros, artigos e vídeos que
              falem sobre libertarianismo. Esta será alimentada pelos próprios
              usuários.
            </p>
          </div>
        </li>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-users"></i>
            </div>
            <h4 class="info-title">Grupos de Estudo</h4>
            <p>
              Crie seu próprio grupo de estudos e conte com ferramentas para
              comunicação e organização de atividades.
            </p>
          </div>
        </li>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-calendar-alt"></i>
            </div>
            <h4 class="info-title">Eventos</h4>
            <p>
              Confira e marque eventos libertários que irão acontecer mundo
              afora. Você poderá confirmar sua presença e compartilhar o
              evento.
            </p>
          </div>
        </li>
        <li>
          <div class="hestia-info">
            <div class="icon" style="color: #dbbb1e;">
              <i class="fa fa-lightbulb"></i>
            </div>
            <h4 class="info-title">Projetos</h4>
            <p>
              Publique seu projeto e tenha a disposição ferramentas que irão
              lhe ajudar a explicá-lo, arrecadar doações e deixar seus
              seguidores informados de atualizações.
            </p>
          </div>
        </li>
      </ul>
    </section>

    <section id="news">
      <h3 class="section-title">Novidades</h3>
      <p class="section-description">Confira as últimas atualizações do projeto</p>
      <div class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <div class="thumbnail">
            <div class="post-date">
              <i class="fa fa-calendar"></i>
              <?php the_date() ?>
            </div>
            <a href="<?php the_permalink() ?>">
              <img src="<?php the_post_thumbnail_url() ?>" alt="">
            </a>
          </div>
          <h3><?php the_title(); ?></h3>
        </div>
        <?php endwhile; endif; ?>
        <div>
    </section>
  </div>
</div>

<script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
<script> const player = new Plyr('#video-player'); </script>
<?php get_footer(); ?>