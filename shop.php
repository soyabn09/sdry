<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A shop template ¯\_(ツ)_/¯" />
        <meta name="author" content="Soyab Nandhla" />
        <title>SDRY - Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <script async src="https://arc.io/widget.min.js#BX2apmLr"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">SDRY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="/shop">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">SDRY</h1>
                    <div class="list-group">
                        <ul id="myUL">
                            <li><a class="list-group-item" onclick="filterSelection('all')">All</a></li>
                            <li><a class="list-group-item" onclick="filterSelection('stock')">In Stock</a></li>
                            <li><a class="list-group-item" onclick="filterSelection('released')">Just In</a></li>
                            <li><a class="list-group-item" onclick="filterSelection('gifts')">Gifts</a></li>
                            <li><a class="list-group-item" onclick="filterSelection('season')">Seasonal</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="First slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Second slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php include 'functions/rating.php' ?>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv stock">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://xcdn.next.co.uk/COMMON/Items/Default/Default/ItemImages/AltItemShot/315x472/L05906s.jpg" alt="BOSS The Scent For Him Eau De Toilette" />
                                <div class="card-body">
                                    <h4 class="card-title"><a>BOSS The Scent For Him Eau De Toilette</a></h4>
                                    <h5>£97.00</h5>
                                    <p class="card-text"><span>Boss the scent Eau de Toilette for Men by Boss Fragrances is an irresistible fragrance that invades the mind and leaves an enduring mark.</span><br><br><span>For reasons of hygiene this product cannot be returned if unwrapped, unsealed or used, unless faulty.</span></p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv released">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Two</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv gifts">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Three</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Four</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv stock">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Five</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv gifts">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Six</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv released">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Six</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
                            <div class="card h-100">
                                <img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#">Item Six</a></h4>
                                    <h5>£24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo rating(); ?></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include 'functions/copyright.php' ?>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; SDRY <?php auto_copyright("2021"); ?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
