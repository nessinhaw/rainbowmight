<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Playfair+Display|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/theme.css">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item site-logo" href="https://bulma.io">
        Mana Hungry
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item navbar-teste">
          Home
        </a>

        <a class="navbar-item navbar-teste">
          Notícias
        </a>

        <a class="navbar-item navbar-teste">
          Reviews
        </a>

        <a class="navbar-item navbar-teste">
          Guias
        </a>

        <a class="navbar-item navbar-teste">
          Tecnologia
        </a>

        <a class="navbar-item navbar-teste">
          Eventos
        </a>

      </div>

      <div class="navbar-end">
        <div class="navbar-item navbar-teste">
          <p class="buttons">
            <a class="button is-small">
              <span class="icon">
                <i class="fas fa-search"></i>
              </span>
              <span>Search</span>
            </a>

            <a class="button is-small">
              <span class="icon">
                <i class="fas fa-share-alt"></i>
              </span>
              <span>Share</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </nav>

  <section class="hero is-light">
    <div class="hero-body">
      <div class="container">

        <div class="columns">
          <div class="column is-two-fifths">
            <figure class="level-item image is-16by9">
              <img src="https://bulma.io/images/placeholders/640x360.png">
            </figure>
          </div>

          <div class="column">
            <span class="tags is-pulled-right media-tags">
              <span class="tag is-dark">Noticias</span><span class="tag is-dark">Mobile</span>
            </span>
            <h1 class="title media-spacing">Titulo do Post</h1>
            <small>Em 26/01/2018</small> <small>por <a href="">Yuck</a></small>
            <p class="media-spacing">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Venenatis cras sed felis eget. A scelerisque purus semper eget. Lectus nulla at volutpat diam ut venenatis tellus in metus. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet.
            </p>
            <p><a href="">Leia mais</a></p>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="divider-title">Mais lidos</h1>
      <div class="columns">
          <div class="column">
            <article class="media media-card-featured">
              <figure class="media-left media-image">
                <p class="image is-128x128">
                  <img src="https://bulma.io/images/placeholders/128x128.png">
                </p>
              </figure>
              <div class="media-content">
                <div class="content">
                  <p class="media-spacing">
                    <span class="tags is-pulled-right media-tags">
                      <span class="tag is-dark">Noticias</span><span class="tag is-dark">Mobile</span>
                    </span>
                    <strong class="media-title">Titulo do Post</strong> <br>
                    <small>Em 26/01/2018</small> <small>por <a href="">Yuck</a></small>
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    <a href="">Leia mais</a>
                  </p>
                </div>
              </div>
              <div class="media-right">
              </div>
            </article>
          </div>

          <div class="column">
            <article class="media media-card-featured">
              <figure class="media-left media-image">
                <p class="image is-128x128">
                  <img src="https://bulma.io/images/placeholders/128x128.png">
                </p>
              </figure>
              <div class="media-content">
                <div class="content">
                  <p class="media-spacing">
                    <span class="tags is-pulled-right media-tags">
                      <span class="tag is-dark">Noticias</span><span class="tag is-dark">Mobile</span>
                    </span>
                    <strong class="media-title">Titulo do Post</strong> <br>
                    <small>Em 26/01/2018</small> <small>por <a href="">Yuck</a></small>
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    <a href="">Leia mais</a>
                  </p>
                </div>
              </div>
              <div class="media-right">
              </div>
            </article>
          </div>
        </div>

      <h1 class="divider-title">Recentes</h1>
      <div class="columns">
          <div class="column is-three-quarters">
            <div class="grid">
              <div class="grid-item noticias">
                <article class="media media-card-posts">
                  <figure class="media-left media-image">
                    <p class="image is-128x128">
                      <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p class="media-spacing">
                        <span class="tags is-pulled-right media-tags">
                          <span class="tag is-dark">Noticias</span><span class="tag is-dark">Mobile</span>
                        </span>
                        <strong class="media-title">QTitulo do Post</strong> <br>
                        <small>Em 26/01/2018</small> <small>por <a href="">Yuck</a></small>
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Venenatis cras sed felis eget. A scelerisque purus semper eget. Lectus nulla at volutpat diam ut venenatis tellus in metus.
                        <a href="">Leia mais</a>
                      </p>
                    </div>
                  </div>
                  <div class="media-right">
                  </div>
                </article>
              </div>

              <div class="grid-item reviews">
                <article class="media media-card-posts">
                  <figure class="media-left media-image">
                    <p class="image is-128x128">
                      <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p class="media-spacing">
                        <span class="tags is-pulled-right media-tags">
                          <span class="tag is-dark">Reviews</span><span class="tag is-dark">Mobile</span>
                        </span>
                        <strong class="media-title">QTitulo do Post</strong> <br>
                        <small>Em 26/01/2018</small> <small>por <a href="">Yuck</a></small>
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Nunc eget lorem dolor sed. Non pulvinar neque laoreet suspendisse interdum. Non sodales neque sodales ut etiam sit amet. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Venenatis cras sed felis eget. A scelerisque purus semper eget. Lectus nulla at volutpat diam ut venenatis tellus in metus.
                        <a href="">Leia mais</a>
                      </p>
                    </div>
                  </div>
                  <div class="media-right">
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="button-group filters-button-group">
              <ul>
                <li class="button-group-category"><button class="button is-checked is-fullwidth" data-filter="*">original order</button></li>
                <li class="button-group-category"><button class="button is-fullwidth" data-filter=".noticias">noticias</button></li>
                <li class="button-group-category"><button class="button is-fullwidth" data-filter=".reviews">reviews</button></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/theme.js"></script>
  </body>
</html>