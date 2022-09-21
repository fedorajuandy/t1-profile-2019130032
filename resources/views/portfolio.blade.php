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

    {{-- None of the images are actually... 'real, meaningful' images; not enough time to rummage throughoout dubious named folders --}}
    <main class="bg-light">
        {{-- Top showcase; not really --}}
        <div class="container-fluid min-vh-100 d-flex align-items-center py-3">
            <div id="carouselGallery" class="carousel carousel-dark slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Latest work in development project</h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Latest work in design</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work3">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-bg-dark">
                                <h5>Latest random work</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselGallery" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselGallery" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>

        <h1 class="display-4 text-center mt-5 mb-4">Gallery of Past Projects</h1>

        {{-- Gallery --}}
        <div class="container pb-5">
            <div class="card-deck">
            <?php
            $count = 0;
            $row = 3;

            while ($row > 0)
            {
            ?>
                <div class="row mb-3">
                <?php
                $category = [];

                for ($i = 0; $i < 3; $i++)
                {
                    $rannum = rand(0, 2);
                    $category[] = $rannum;
                }

                foreach ($category as $cat) :
                $year = rand(15, 22);
                ?>
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="https://placeimg.com/640/480/nature" alt="A random image">
                        <div class="card-body">
                            <h5 class="card-title">Title
                                <span class="card-text">
                                    <?php if ($cat == 0) : ?>
                                        <span class="badge badge-success">Design</span>
                                    <?php elseif ($cat == 1) : ?>
                                        <span class="badge badge-warning">Project</span>
                                    <?php elseif ($cat == 2) : ?>
                                        <span class="badge badge-danger">Others</span>
                                    <?php endif ?>
                                </span>
                            </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, eius aut iste accusamus ullam alias. Delectus, aperiam at quisquam temporibus officia corporis odit, sapiente quae porro eum autem? Velit, pariatur!</p>
                        </div>
                    <div class="card-footer text-right">
                        <small class="text-muted">Made in 20<?= $year ?></small>
                    </div>
                    </div>
                <?php
                endforeach;
                ?>
                </div>
            <?php
                $row--;
            }
            ?>
            </div>
        </div>

    {{-- Footer --}}
    <footer class="pb-2 pt-3 bg-dark">
        <div class="container text-light text-center">
            <h6>&copy; 2022 Fedora Yoshe Juandy</h6>
        </div>
    </footer>

    <script src="/js/app.js"></script>
  </body>
</html>
