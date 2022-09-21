{{-- 2019130032 - Fedora Yoshe Juandy --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FYJ | Portfolio</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/stylesheet.css">
    </head>

  <body>
    {{-- Navbar --}}
    <nav role="navigation" class="navbar navbar-expand-lg sticky-top navbar-dark shadow-lg bg-dark">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">FYJ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="/">Intro</a>
                    <a class="nav-link" href="portfolio">Portfolio</a>
                    <a class="nav-link" href="contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="bg-light">
        {{-- Top showcase; not really --}}
        <div class="container-fluid min-vh-100 d-flex align-items-center py-3">
            <div id="carouselGallery" class="carousel carousel-dark slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-target="#carouselGallery" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-target="#carouselGallery" data-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-target="#carouselGallery" data-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="/img/Diluc.png" class="d-block w-100" alt="Diluc">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Diluc</h5>
                            <p>Diluc</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="/img/Kaeya.png" class="d-block w-100" alt="Kaeya">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kaeya</h5>
                            <p>Kaeya</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Nobody.png" class="d-block w-100" alt="Nobody">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-bg-dark">
                                <h5>Nobody</h5>
                                <p>Nobody</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselGallery" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselGallery" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        {{-- Gallery --}}
        <div class="album pt-3 pb-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="cards-paket">
                    <?php
                    $category = [0, 1, 2];
                    // randomise
                    foreach ($category as $cat) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="https://placeimg.com/640/480/nature" class="cover" alt="a random image">
                            <div class="card-body">
                                <h5 class="card-title">Title goes here
                                    <span class="card-text">
                                        <?php if ($cat == 0) : ?>
                                            <span class="badge color-success">Design</span>
                                        <?php elseif ($cat == 1) : ?>
                                            <span class="badge color-warning">Project</span>
                                        <?php elseif ($cat == 2) : ?>
                                            <span class="badge color-basic">Others</span>
                                        <?php endif ?>
                                    </span>
                                </h5>
                                <p class="card-text text-muted">Made 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="pb-2 pt-3 bg-dark">
        <div class="container text-light text-center">
            <h6>&copy; 2022 Fedora Yoshe Juandy</h6>
        </div>
    </footer>

    <script src="/js/app.js"></script>
    <script src='/js/script.js'></script>
  </body>
</html>
