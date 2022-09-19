{{-- 2019130032 - Fedora Yoshe Juandy --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio | Data Diri</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/stylesheet.css">
    </head>

  <body>
    <!-- Navbar -->
    <nav role="navigation" class="navbar navbar-expand-lg sticky-top navbar-dark shadow-lg bg-dark">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">FYJ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#intro">Intro</a>
                    <a class="nav-link" href="#skills">Skills</a>
                    <a class="nav-link" href="#experience">Experience</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Intro -->
    <div class="container-fluid min-vh-100 d-flex align-items-center bg-image py-3" id="intro">
        <div class="container text-center">
            <div class="row">
                <h1 class="display-6">Hello! My name is</h1>
                <h1 class="display-1"><strong>Fedora Yoshe Juandy</strong></h1>
                <h1 class="display-6 mt-5">I am currently a software engineer student at STMIK LIKMI</h1>

                <hr class="mt-5">

                <figure>
                    <blockquote class="blockquote">
                        <p>Because if you take a risk, you just might find what you're looking for.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Susane Colasanti in <cite title="Source Title">Take Me There</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <!-- Skill -->
    <div class="container-fluid min-vh-100 bg-dark text-bg-dark d-flex align-items-center py-3" id="skills">
        <div class="container">
            <div class="row text-center mb-5">
                <h1 class="display-5">Skills</h1>
                <h6>What I can do</h6>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col mb-sm-4 d-flex justify-content-center">
                    <div class="card bg-secondary" style="width: 18rem;">
                        <img src="./assets/UIUX_Android.png" class="card-img-top img-fluid rounded" alt="UI/UX Prototype Example">
                        <div class="card-body">
                            <h5 class="card-title">UI/UX Prototyping</h5>
                            <p class="card-text">Make high-fidelity prototype to test its viability.</p>
                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#uiux">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-sm-4 d-flex justify-content-center">
                    <div class="card bg-secondary" style="width: 18rem;">
                        <img src="./assets/SSCode.png" class="card-img-top img-fluid rounded" alt="Code Example">
                        <div class="card-body">
                            <h5 class="card-title">Software Development</h5>
                            <p class="card-text">Develop software from either request or prototype.</p>
                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#development">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-sm-4 d-flex justify-content-center">
                    <div class="card bg-secondary" style="width: 18rem;">
                        <img src="./assets/airtable.png" class="card-img-top img-fluid rounded" alt="Airtable Logo">
                        <div class="card-body">
                            <h5 class="card-title">Project Management</h5>
                            <p class="card-text">Managing project tasks in team with software.</p>
                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#manage">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience/project/gallery -->
    <div class="container-fluid min-vh-100 bg-light d-flex align-items-center py-3" id="experience">
        <div class="container">
            <div class="row text-center mb-4">
                <h1 class="display-5">Experience</h1>
                <h6>Latest Project</h6>
                <p class="lead">From last semester internship program</p>
            </div>
            <div id="carouselProject" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./assets/user.png" class="d-block w-100" alt="User Research Diagrams">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>User Research</h5>
                            <p>Researching user's preferences and needs with various methods and diagrams.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./assets/system.png" class="d-block w-100" alt="System Research Diagrams">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>System Research</h5>
                            <p>From problems to solutions and its 'blueprint'.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/prototyping.png" class="d-block w-100" alt="A Portion of System Prototype">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="text-bg-dark">
                                <h5>Desain and Prototype</h5>
                                <p>Make the high-fidelity solution to test it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/documentation.png" class="d-block w-100" alt="Documentation Cover">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Documentation</h5>
                            <p>Documenting all base of development.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/development.png" class="d-block w-100" alt="Login Page">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Development</h5>
                            <p>Front-end development using Vuetify, Vue.js framework.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProject" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a class="btn btn-outline-dark mt-3 d-flex justify-content-center" href="https://github.com/fedorajuandy" role="button" target="_blank">Older projects on GitHub</a>
        </div>
    </div>

    <!-- About -->
    <div class="container-fluid min-vh-100 bg-dark text-bg-dark d-flex align-items-center py-3" id="about">
        <div class="container">
            <div class="row text-center mb-5">
                <h1 class="display-5">About Me</h1>
                <h6>Who I am</h6>
            </div>
            <div class="row">
                <div class="col-8">
                    <p class="lead text-justify">I love technology in general and the more complex insides alongside with other topics. I seek challenges, and often find myself solving the 'unsolvable' while learning various knowledge. Mystery is an intrigue thing that should at least be tried to be uncovered... as long as we don't find ourselves in an unfortunate place. I am searching for opportunities to help people with existing skills and knowledge also improving and adding more of them.</p>
                    <a class="btn btn-outline-light mt-3" href="https://www.linkedin.com/in/fedora-yoshe-juandy-552225204/" role="button" target="_blank">More on Linkedin</a>
                </div>
                <div class="col-4">
                    <img src="./assets/SelfPortrait.jpg" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="container-fluid min-vh-100 bg-light d-flex align-items-center py-3" id="contact">
        <div class="container">
            <div class="row mb-5">
                <h1 class="display-5">Contact Me</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-1 ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="m-0">Phone</p>
                            <p class="m-0 lead">087825751018</p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-1 ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="m-0">Address</p>
                            <p class="m-0 lead">Jujur Street 11, Pasteur, Sukajadi, Bandung City, West Java, Indonesia 40161</p>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center pt-3">
                        <div class="col-1 ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                        </div>
                        <div class="col-10">
                            <p class="m-0">Email</p>
                            <p class="m-0 lead">fedorajuandy@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <form>
                        <div class="row pt-3">
                            <label for="email" class="form-label ps-0">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="row pt-3">
                            <label for="message" class="form-label ps-0">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="What do you want to talk about?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-dark mt-5">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="pb-2 pt-3 bg-dark">
        <div class="container text-bg-dark text-center">
            <h6>&copy; 2022 Fedora Yoshe Juandy</h6>
        </div>
    </footer>

    <!-- Modals -->
    <div class="modal fade" id="uiux" tabindex="-1" aria-labelledby="uiuxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uiuxLabel">UI/UX Prototyping Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="development" tabindex="-1" aria-labelledby="developmentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="developmentLabel">Software Development Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manage" tabindex="-1" aria-labelledby="manageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manageLabel">Project Management Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Timeline</li>
                        <li class="list-group-item">Sprint</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
    <script src='/js/script.js'></script>
  </body>
</html>
