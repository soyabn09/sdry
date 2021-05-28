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
                  src="/assets/season.png"
                  alt="Seasonal Items Out Now"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block img-fluid"
                  src="/assets/code.png"
                  alt="Use code HELP for 90% off"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block img-fluid"
                  src="/assets/new.png"
                  alt="New Items Released"
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
                <img
                  class="img-fluid card-img-top"
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
                <img
                  class="img-fluid card-img-top"
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
                <img
                  class="img-fluid card-img-top"
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
                <img
                  class="img-fluid card-img-top"
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
            <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
              <div class="card h-100">
                <img
                  class="img-fluid card-img-top"
                  src="/assets/polo.jpg"
                  alt="Men's Cotton Riviera Polo Shirt in Navy"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>Men's Cotton Riviera Polo Shirt in Navy</a>
                  </h5>
                  <h6>£110.00</h6>
                  <p class="card-text small">
                    <span
                      >The Riviera Polo Shirt is the essence of the James Bond
                      style. Originally tailored for Daniel Craig in Casino
                      Royale, this polo is made from a lightweight cotton mesh
                      that is not only breathable but extremely soft. Cut for a
                      slim fit and finished with matching buttons and a chest
                      pocket. A modern classic.</span
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
                <img
                  class="img-fluid card-img-top"
                  src="/assets/suit.jpg"
                  alt="Black Tux"
                />
                <div class="card-body">
                  <h5 class="card-title"><a>Black Tux</a></h5>
                  <h6>£1300.00</h6>
                  <p class="card-text small">
                    <span
                      >Presented in a choice of equally refined black or
                      charcoal grey finished with traditional contrast-trim
                      detailing, this evening suit is a cut above the rest. It's
                      woven in Italy by prestigious mill Trabaldo Togna from
                      their innovative natural stretch wool, and so promises
                      lasting comfort alongside its impeccable styling.</span
                    >
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ★</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv stock">
              <div class="card h-100">
                <img
                  class="img-fluid card-img-top"
                  src="/assets/dress.jpg"
                  alt="Chantel printed slee multi-coloured"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>Chantel printed slee multi-coloured</a>
                  </h5>
                  <h6>£130.00</h6>
                  <p class="card-text small">
                    <span
                      >You can't beat florals for occasion season and this is a
                      piece that ticks all our RSVPs: Weddings parties race days
                      or graduations we can't think of an event that this dress
                      wouldn't look great at.</span
                    >
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 filterDiv season">
              <div class="card h-100">
                <img
                  class="img-fluid card-img-top"
                  src="/assets/gold.jpg"
                  alt="Toast Lento Print Dress, Gold"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    <a>Toast Lento Print Dress, Gold</a>
                  </h5>
                  <h6>£200.00</h6>
                  <p class="card-text small">
                    <span
                      >Made from light and drapey cupro viscose twill with a
                      leafy, floral print throughout, this dress from Toast has
                      an easy cut that you can style up or down. Shaped with
                      raglan sleeves, an elegant V-neckline and curved waist
                      seam at the front with a flowing box pleat, inverted
                      pleats into the back neck adds structure with handy
                      slanted side pockets to finish.</span
                    ><br /><br /><span
                      >At Toast, viscose is used for its droopiness and
                      movement, and for its ability to carry intricate prints
                      and rich colour.</span
                    >
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
