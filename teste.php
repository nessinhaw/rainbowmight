<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Playfair+Display|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/teste.css">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

  <div class="footer">
    <div class="columns">
      <div class="column">
        <h1>Quem escreve?</h1>
        <article class="media">
          <figure class="media-left">
            <p class="image is-48x48">
              <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <a href="">Nome do Autor</a>
                <br>
                Breve introdução.
              </p>
            </div>
          </div>
        </article>

        <article class="media">
          <figure class="media-left">
            <p class="image is-48x48">
              <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <a href="">Nome do Autor</a>
                <br>
                Breve introdução.
              </p>
            </div>
          </div>
        </article>
      </div>
      <div class="column">
        Somethiiiing
      </div>
      <div class="column">
        Other Somethiiiing
      </div>
    </div>
  </div>

  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        Nameless
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>

        <a class="navbar-item">
          Notícias
        </a>

        <a class="navbar-item">
          Reviews
        </a>

        <a class="navbar-item">
          Guias
        </a>

        <a class="navbar-item">
          Tecnologia
        </a>

        <a class="navbar-item">
          Eventos
        </a>

        <a href="#" id="toggle" class="navbar-item">
          Sobre
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item navbar-teste">
          <p class="buttons">
            <a href="" id="toggle2" class="button">
              <span class="icon">
                <i class="fas fa-search"></i>
              </span>
            </a>

            <a class="button">
              <span class="icon">
                <i class="fas fa-share-alt"></i>
              </span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </nav>

  <div class="search-bar has-text-centered">
    <input class="input" type="text" placeholder="Pesquisar...">
    <a class="button">
      <span class="icon is-small">
        <i class="fas fa-search"></i>
      </span>
    </a>
  </div>

  <div class="carousel">
    <div class="carousel-cell" data-flickity-bg-lazyload="https://i1.wp.com/bloody-disgusting.com/wp-content/uploads/2019/01/resident-evil-2-remake-music-cover.jpg?w=1200&ssl=1">
      <div class="is-featured">
        <div class="opacity"></div>
        <div class="overlay">
          <a class="tag">Reviews</a>
          <h1><a class="is-title" href="">Titulo do Post</a></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. <a class="is-read-more" href="">Leia mais</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-cell" data-flickity-bg-lazyload="https://www.playreplay.com.br/wp-content/uploads/2018/03/elder_scrolls_online_summerset_isles-7.jpg">
      <div class="is-featured">
        <div class="opacity"></div>
        <div class="overlay">
          <a class="tag">Reviews</a>
          <h1><a class="is-title" href="">Titulo do Post</a></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. <a class="is-read-more" href="">Leia mais</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-cell" data-flickity-bg-lazyload="https://i.ytimg.com/vi/G7-msC73Bsw/maxresdefault.jpg">
      <div class="is-featured">
        <div class="opacity"></div>
        <div class="overlay">
          <a class="tag">Reviews</a>
          <h1><a class="is-title" href="">Titulo do Post</a></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. <a class="is-read-more" href="">Leia mais</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div id="grid" class="grid">
      <div class="grid-sizer"></div>

        <div class="grid-item noticias">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://i1.wp.com/bloody-disgusting.com/wp-content/uploads/2019/01/resident-evil-2-remake-music-cover.jpg?w=1200&ssl=1" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Reviews</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>04/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-item reviews">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://www.playreplay.com.br/wp-content/uploads/2018/03/elder_scrolls_online_summerset_isles-7.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Notícias</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>04/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-item guias">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://i.ytimg.com/vi/G7-msC73Bsw/maxresdefault.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Guias</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>03/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-item noticias">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://static.altchar.com/live/media/images/950x633_ct/11833_Metro_exodus_7738dae0c72e3d877079d72679581a4e.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Notícias</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>02/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-item noticias">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://i.redd.it/2wtju8wdor101.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Reviews</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>02/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-item reviews">
          <div class="card">
            <div class="card-image">
              <div class="card-opacity"></div>
              <figure class="image is-4by3">
                <img src="https://s3.dexerto.com/thumbnails/_thumbnailLarge/Is-Fallout-76-down-Bethesda-confirms-downtime-for-nuke-silo-hot-fix-January-2.jpg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <a class="tag">Notícias</a>
              <h1><a class="is-title" href="">Titulo do Post</a></h1> <small>01/02 por <a href="">Autor</a></small>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. <a href="">Leia mais</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js"></script>
  <script src="js/teste.js"></script>
  </body>
</html>