<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="templatemo" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.php" class="logo">
                <img src="assets/images/logo.png" alt="" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
              <li><a href="index.php">Home</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="details.php" class="active">Item Details</a></li>
                <li><a href="create.php">Create Yours</a></li>
                <li><a href="author.php">Dashboard</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading normal-space">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h6>Liberty NFT Market</h6>
            <h2>View Item Details</h2>
            <span>Home > <a href="#">Item Details</a></span>
            <div class="buttons">
              <div class="main-button">
                <a href="explore.php">Explore Our Items</a>
              </div>
              <div class="border-button">
                <a href="create.php">Create Your NFT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="item-details-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h2>View Details <em>For Item</em> Here.</h2>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="left-image">
              <img
                src="assets/images/item-details-01.jpg"
                alt=""
                style="border-radius: 20px"
              />
            </div>
          </div>
          <div class="col-lg-5 align-self-center">
            <h4>Doc Leo</h4>
            <span class="author">
              <img
                src="assets/images/author-02.jpg"
                alt=""
                style="max-width: 50px; border-radius: 50%"
              />
              <h6>Liberty Artist<br /><a href="#">@libertyart</a></h6>
            </span>
            <p>
              Creating NFT's is a profit that can make as live what we wants.
            </p>
            <div class="row">
              <div class="col-3">
                <span class="bid">
                  Current Bid<br /><strong>6.06 ETH</strong><br /><em
                    >($8,025.50)</em
                  >
                </span>
              </div>
              <div class="col-4">
                <span class="owner">
                  Owner<br /><strong>DocLeo</strong><br /><em
                    >(@docleo)</em
                  >
                </span>
              </div>
              <div class="col-5">
                <span class="ends">
                  Ends In<br /><strong>3D 05H 20M 58S</strong><br /><em
                    >(January 22nd, 2024)</em
                  >
                </span>
              </div>
            </div>
            <form action="submit">
              <label for="quantity-text">Place Bid:</label>
              <input placeholder="1 ETH" class="quantity-text" />
              <button type="submit" id="form-submit" class="main-button">
                Submit Now
              </button>
            </form>
          </div>
          <div class="col-lg-12">
            <div class="current-bid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mini-heading">
                    <h4>Current Biddings Prices ( ETH )</h4>
                  </div>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <select
                      name="Category"
                      class="form-select"
                      aria-label="Default select example"
                      id="chooseCategory"
                      onchange="this.form.click()"
                    >
                      <option selected>Sort By: Latest</option>
                      <option type="checkbox" name="option1" value="old">
                        Sort By: Oldest
                      </option>
                      <option value="low">Sort By: Lowest</option>
                      <option value="high">Sort By: Highest</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-01.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Monsieur Alex</h4>
                      <a href="#">@monsieuralex</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-02.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Tanya Kips</h4>
                      <a href="#">@tanyakips</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-03.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Pau Laurel</h4>
                      <a href="#">@paulaurel</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-02.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Aila Capinpin</h4>
                      <a href="#">@ailacapinpin</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-04.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Neri Anne</h4>
                      <a href="#">@nerianne</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="item">
                    <div class="left-img">
                      <img src="assets/images/current-01.jpg" alt="" />
                    </div>
                    <div class="right-content">
                      <h4>Chapseuy Trev</h4>
                      <a href="#">@chapseuytrev</a>
                      <div class="line-dec"></div>
                      <h6>Bid: <em>0.06 ETH</em></h6>
                      <span class="date">24/07/2024, 22:00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="create-nft">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h2>Create Your NFT & Put It On The Market.</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="main-button">
              <a href="create.php">Create Your NFT Now</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="item first-item">
              <div class="number">
                <h6>1</h6>
              </div>
              <div class="icon">
                <img src="assets/images/icon-02.png" alt="" />
              </div>
              <h4>Set Up Your Wallet</h4>
              <p>
              NFT means Non-Fungible Token that are used in digital
                cryptocurrency markets. There are many different kinds of NFTs
                in the industry.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="item second-item">
              <div class="number">
                <h6>2</h6>
              </div>
              <div class="icon">
                <img src="assets/images/icon-04.png" alt="" />
              </div>
              <h4>Add Your Digital NFT</h4>
              <p>
              Easily showcase and add your digital NFTs with our platform, designed for seamless uploading and management to maximize your visibility in the marketplace.
                <a
                  rel="nofollow"
                  href="https://www.instagram.com/leomar.esc/"
                  target="_parent"
                  >our contact Tech</a
                >
                to make a PayPal/GCash contribution. Thank you.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="item">
              <div class="icon">
                <img src="assets/images/icon-06.png" alt="" />
              </div>
              <h4>Sell Your NFT &amp; Make Profit</h4>
              <p>
              Sell your NFTs and maximize your profits with our platform, designed to connect you with buyers and optimize your sales potential.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
              Copyright © 2024 <a href="#">Liberty</a> NFT Marketplace Co., Ltd.
              All rights reserved. &nbsp;&nbsp; Designed by
              <a
                href="https://www.instagram.com/leomar.esc/"
                target="_blank"
                >LeoTech</a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>