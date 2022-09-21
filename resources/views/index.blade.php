{{-- 2019130032 - Fedora Yoshe Juandy --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FYJ | Intro</title>
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
        {{-- Intro --}}
        <div class="container-fluid min-vh-100 d-flex align-items-center bg-image">
            <div class="container">
                <div class="row">
                    <h1 class="display-6">Hello! My name is</h1>
                    <h1 class="display-1 pb-5"><strong>Fedora Yoshe Juandy</strong></h1>
                    <figure class="pt-5">
                        <blockquote class="blockquote">
                            <p>Because if you take a risk, you just might find what you're looking for.</pc>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Susane Colasanti in <cite title="Source Title">Take Me There</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                {{-- In-page navigation --}}
                <div class="col-md-2 col-sm-12 left-col pb-3">
                    <div id="list-spy" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#about">About</a>
                        <a class="list-group-item list-group-item-action" href="#experience">Experience</a>
                        <a class="list-group-item list-group-item-action" href="#education">Education</a>
                        <a class="list-group-item list-group-item-action" href="#skills">Skills</a>
                    </div>
                </div>

                <div class="col-md-10 col-sm-12 right-col bg-dark text-light py-5 px-5">
                    {{-- About --}}
                    <div data-target="#list-spy" data-offset="0" class="row" id="about">
                        <div class="col-12 mb-3">
                            <h1 class="display-6">About myself</h1>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-9">
                                    <p class="text-justify">I am currently an undergraduate student at STMIK LIKMI majoring in software engineering. I love technology in general and the more complex insides alongside with other topics. I seek challenges, and often find myself solving the 'unsolvable' while learning various knowledge. Mystery is an intrigue thing that should at least be tried to be uncovered... as long as we don't find ourselves in an unfortunate place. I am searching for opportunities to help people with existing skills and knowledge also improving and adding more of them.</p>
                                    <p class="text-justify">My past time hobbies vary as my interest shift onto some new, exciting stuff; be it music, literature, more technology, or something else. My main, persisting hobbiea are listening to music (both instrumental and vocal), exploring random stuff on the internet, writing and reading (both fictions and non-fictions), and playing games. I do have immense interest in languages, although sadly limited time makes me not able to practice or explore them furthermore.</p>
                                    <a class="btn btn-outline-light mt-3" href="https://www.linkedin.com/in/fedora-yoshe-juandy-552225204/" role="button" target="_blank">Linkedin</a>
                                </div>
                                <div class="col-3">
                                    <img src="/img/SelfPortrait.jpg" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5">

                    {{-- Experience --}}
                    <div data-target="#list-spy" data-offset="0" class="row" id="education">
                        <div class="col-12 mb-3">
                            <h1 class="display-6">Latest experience</h1>
                            <p class="lead">From last semester internship program</p>
                        </div>
                        <div class="col-12">
                            <p class="text-justify">I got accepted as a UI/UX designer in a software company. While everyone has their own main position, each person got trained first for three first month to understand the work of a full software engineering project cycle; from research to deployment. The method of researching until final design using Design Thinking while developing the software using Agile. Long story short:</p>
                            <ul>
                                <li>Gather information about needs and wants according from the end user's preferences</li>
                                <li>Analyse and eliminate suggested sollutions to the existing problems</li>
                                <li>Explore ideas while keepign the main functions needed and keeps the other functions for later version</li>
                                <li>Make a high-fidelity prototype of choosen functions using Figma</li>
                                <li>Document all requirements for further development</li>
                                <li>Design most-efficient database</li>
                                <li>Start developing its front-end using Vue.js framework</li>
                            </ul>
                            <div id="carouselProject" class="carousel carousel-dark slide" data-ride="carousel">
                                <div class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="10000">
                                        <img src="/img/user.png" class="d-block w-100" alt="User Research Diagrams">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>User Research</h5>
                                            <p>Researching user's preferences and needs with various methods and diagrams.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="/img/system.png" class="d-block w-100" alt="System Research Diagrams">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>System Research</h5>
                                            <p>From problems to solutions and its 'blueprint'.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/prototyping.png" class="d-block w-100" alt="A Portion of System Prototype">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="text-bg-dark">
                                                <h5>Desain and Prototype</h5>
                                                <p>Make the high-fidelity solution to test it.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/documentation.png" class="d-block w-100" alt="Documentation Cover">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Documentation</h5>
                                            <p>Documenting all base of development.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/development.png" class="d-block w-100" alt="Login Page">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Development</h5>
                                            <p>Front-end development using Vuetify, Vue.js framework.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselProject" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselProject" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                            <a class="btn btn-outline-light mt-3 d-flex justify-content-center" href="https://github.com/fedorajuandy" role="button" target="_blank">Older projects on GitHub</a>
                        </div>
                    </div>

                    <hr class="mt-5">

                    {{-- Skills --}}
                    <div data-target="#list-spy" data-offset="0" class="row" id="skills">
                        <div class="col-12 mb-3">
                            <h1 class="display-6">Skills</h1>
                        </div>
                        <div class="col-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                <div class="col mb-sm-4 d-flex justify-content-center">
                                    <div class="card bg-secondary" style="width: 18rem;">
                                        <img src="/img/UIUX_Android.png" class="card-img-top img-fluid rounded" alt="UI/UX Prototype Example">
                                        <div class="card-body">
                                            <h5 class="card-title">UI/UX Prototyping</h5>
                                            <p class="card-text">Make high-fidelity prototype to test its viability.</p>
                                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#uiux">Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-sm-4 d-flex justify-content-center">
                                    <div class="card bg-secondary" style="width: 18rem;">
                                        <img src="/img/SSCode.png" class="card-img-top img-fluid rounded" alt="Code Example">
                                        <div class="card-body">
                                            <h5 class="card-title">Software Development</h5>
                                            <p class="card-text">Develop software from either request or prototype.</p>
                                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#development">Details</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-sm-4 d-flex justify-content-center">
                                    <div class="card bg-secondary" style="width: 18rem;">
                                        <img src="/img/airtable.png" class="card-img-top img-fluid rounded" alt="Airtable Logo">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Management</h5>
                                            <p class="card-text">Managing project tasks in team with software.</p>
                                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#manage">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    {{-- Modals --}}
    {{-- UI/UX --}}
    <div class="modal fade" id="uiux" tabindex="-1" aria-labelledby="uiuxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uiuxLabel">UI/UX Prototyping Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">User research</li>
                        <li class="list-group-item">Problem identifying and analysis</li>
                        <li class="list-group-item">Problem solving</li>
                        <li class="list-group-item">Designing and prototyping solution</li>
                        <li class="list-group-item">Testing and documentating prototype</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Development --}}
    <div class="modal fade" id="development" tabindex="-1" aria-labelledby="developmentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="developmentLabel">Software Development Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">System representation using diagrams</li>
                        <li class="list-group-item">Database design</li>
                        <li class="list-group-item">Used programming languages:
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Java</li>
                                <li class="list-group-item">Pyton</li>
                                <li class="list-group-item">SQL</li>
                                <li class="list-group-item">HTML</li>
                                <li class="list-group-item">CSS</li>
                                <li class="list-group-item">Javascript</li>
                                <li class="list-group-item">C</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Management --}}
    <div class="modal fade" id="manage" tabindex="-1" aria-labelledby="manageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageLabel">Project Management Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Timeline</li>
                        <li class="list-group-item">Sprint</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>
