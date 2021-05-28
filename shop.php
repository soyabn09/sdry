<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="SDRY Company ¯\_(ツ)_/¯" />
    <meta name="author" content="Soyab Nandhla" />
    <title>SDRY - Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
    <script async src="https://arc.io/widget.min.js#BX2apmLr"></script>
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">SDRY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item active">
              <a class="nav-link" href="/shop">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
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
              <li>
                <a class="list-group-item" onclick="filterSelection('all')"
                  >All</a
                >
              </li>
              <li>
                <a class="list-group-item" onclick="filterSelection('stock')"
                  >In Stock</a
                >
              </li>
              <li>
                <a class="list-group-item" onclick="filterSelection('released')"
                  >Just In</a
                >
              </li>
              <li>
                <a class="list-group-item" onclick="filterSelection('gifts')"
                  >Gifts</a
                >
              </li>
              <li>
                <a class="list-group-item" onclick="filterSelection('season')"
                  >Seasonal</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div
            class="carousel slide my-4"
            id="carouselExampleIndicators"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                class="active"
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img
                  class="d-block img-fluid"
                  src="/assets/slide1.png"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block img-fluid"
                  src="/assets/slide2.png"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block img-fluid"
                  src="/assets/slide3.png"
                  alt="Third slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 filterDiv released">
              <div class="card h-100">
                <img class="img-fluid card-img-top"
                  src="/assets/hoodie.jpg"
                  alt="Champion Youth Black Hoodie"
                />
                <div class="card-body">
                  <h5 class="card-title"><a>Champion Youth Black Hoodie</a></h5>
                  <h6>£45.00</h6>
                  <p class="card-text small">
                    <span
                      >Designed with classic Champion branding. 100%
                      Cotton.</span
                    >
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv released">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/shirt.jpg"
                  alt="Mix/American Vintage Son31 T-Shirt"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>Mix/American Vintage Son31 T-Shirt</a>
                  </h5>
                  <h6>£70.00</h6>
                  <p class="card-text small">
                    <span
                      >A wardrobe staple that you'll reach for again and again,
                      the Mix/American Vintage T-shirt is designed with a deep V
                      neck and a close-fitting shape for a flattering fit.
                      Crafted from comfortable thick cotton that is perfect for
                      wearing alone or layering on cooler days.</span
                    ><br /><br /><span>100% Cotton.</span>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ★</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv gifts">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/boss.jpg"
                  alt="BOSS The Scent For Him Eau De Toilette"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>BOSS The Scent For Him Eau De Toilette</a>
                  </h5>
                  <h6>£97.00</h6>
                  <p class="card-text small">
                    <span
                      >Boss the scent Eau de Toilette for Men by Boss Fragrances
                      is an irresistible fragrance that invades the mind and
                      leaves an enduring mark.</span
                    ><br /><br /><span
                      >For reasons of hygiene this product cannot be returned if
                      unwrapped, unsealed or used, unless faulty.</span
                    >
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv gifts">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/bracelet.jpg"
                  alt="Thomas Sabo Beaded Charm Club Bracelet"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>Thomas Sabo Beaded Charm Club Bracelet</a>
                  </h5>
                  <h6>£40.00</h6>
                  <p class="card-text small">
                    <span>100% Silver (Sterling).</span>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ★</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv stock">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/oxford.jpg"
                  alt="GANT Blue Regular Oxford Shirt"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>GANT Blue Regular Oxford Shirt</a>
                  </h5>
                  <h6>£110.00</h6>
                  <p class="card-text small">
                    <span
                      >The most versatile and classic shirt in your closet, the
                      Regular Fit Oxford Shirt is a preppy essential that can be
                      dressed up or down. Impeccably crafted and designed to
                      flatter, this shirt is a timeless icon that will always be
                      in style.</span
                    ><br /><br /><span>Machine washable.</span><br /><br /><span
                      >100% Cotton.</span
                    >
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv stock">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/six.png"
                  alt="Item Six"
                />
                <div class="card-body">
                  <h5 class="card-title"><a>Item Six</a></h5>
                  <h6>£24.99</h6>
                  <p class="card-text small">
                    <span>Item Six Desc</span>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ★</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/seven.png"
                  alt="Item Seven"
                />
                <div class="card-body">
                  <h5 class="card-title"><a>Item Seven</a></h5>
                  <h6>£24.99</h6>
                  <p class="card-text small">
                    <span>Item Seven Desc</span>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
              <div class="card h-100">
              <img class="img-fluid card-img-top"
                  src="/assets/eight.png"
                  alt="Item Eight"
                />
                <div class="card-body">
                  <h5 class="card-title"><a>Item Eight</a></h5>
                  <h6>£24.99</h6>
                  <p class="card-text small">
                    <span>Item Eight Desc</span>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ★</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <?php include 'functions/copyright.php' ?>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; SDRY
          <?php auto_copyright("1979"); ?>
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
  </body>
</html>
