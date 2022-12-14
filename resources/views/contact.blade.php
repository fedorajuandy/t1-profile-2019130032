{{-- 2019130032 - Fedora Yoshe Juandy --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FYJ | Contact</title>
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

    {{-- Contact --}}
    <main class="bg-light">
        <div class="container-fluid min-vh-100 d-flex align-items-center py-3" id="contact">
            <div class="container">
                <div class="card text-white bg-dark text-center shadow-sm">
                    <div class="card-header">
                        <h1 class="display-5 mb-0">Contact Me</h1>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill pr-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            Phone
                        </h5>
                        <p class="card-text">087825751018</p>
                        <br>
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill pr-1" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            Address
                        </h5>
                        <p class="card-text">Jujur Street 11, Pasteur, Sukajadi, Bandung City, West Java, Indonesia 40161</p>
                        <br>
                        <h5 class="card-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill pr-1" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                            Email
                        </h5>
                        <p class="card-text">fedorajuandy@gmail.com</p>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <form>
                        <div class="row pt-3">
                            <label for="email" class="form-label ps-0">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="row pt-3">
                            <label for="message" class="form-label ps-0">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="What do you want to talk about?"></textarea>
                        </div>
                        <div class="row mt-3">
                            <button type="submit" class="btn btn-outline-dark ">Send</button>
                        </div>
                    </form>
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
  </body>
</html>
