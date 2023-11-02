
<?php include("header.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/73ba6c97c2.js"
      crossorigin="anonymous"
    ></script>
    <!-- SCRIPT FOR FORM SUBMISSION -->
    <script src="script.js" defer></script>
    <title>Smart Dookan</title>
  </head>
  <body>
    <!-- <div class="Navbar">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="logo">
            
              
            <a class="navbar-brand" href="#">
              <strong>Smart Dookan</strong></a
            >
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="buyer.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about-us.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="seller.php"
                  >Customer Support</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active button" href="seller.php"
                  >Sell Now</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div> -->
    <section class="header">
      <div class="container">
        <div class="row">
          <div
            class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"
            id="content"
          >
          <p class="h1">Join The Biggest Online Marketplace!</p>
          <p class="h2">Get the Best Audience for your Products</p>
          </div>
          <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="new_container">
              <form id="contact_form" method="post" name="google-sheet">
                <h3>Register as a seller</h3>
                <fieldset>
                  <input
                    placeholder="First Name"
                    type="text"
                    tabindex="1"
                    required
                    autofocus
                    name="First Name"
                  />
                </fieldset>
                <fieldset>
                  <input
                    placeholder="Last Name"
                    type="text"
                    tabindex="2"
                    required
                    name="Last Name"
                  />
                </fieldset>
                <fieldset>
                  <input placeholder="Phone" type="tel" tabindex="3" required name="Phone Number"/>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" type="email" tabindex="3" required name="Email"/>
                  </fieldset>
                <fieldset>
                  <textarea
                    placeholder="Address"
                    tabindex="5"
                    required
                    name="Address"
                  ></textarea>
                </fieldset>
                <input type="hidden" name="Registration Type" value="Seller" />
                <fieldset>
                  <button
                    name="submit"
                    type="submit"
                    value="Submit"
                    id="contact-submit"
                    data-submit="...Sending"
                  >
                   Register
                  </button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="PostHead">
      <div class="container">
        <div class="row">
          <div class="col"></div>
          <div class="col"></div>
        </div>
      </div>
    </section>

    <!-- Showcase -->

    <div class="showcase">
      <div class="showcase-img">
        <img src="https://blog.hubspot.com/hubfs/ecommerce-10.jpg" alt="">
      </div>
      <div class="showcase-content">
        <h4><strong>Best product Price</strong></h4>
        <hr>
        <h1><strong>Our products buying rate is Really Incredible!</strong></h1>
        <hr>
        <p>
          These days the demand for old products and notes has been on the rise and you will be surprised to know that some rare, old products can help you earn lakhs of rupees online by sitting at home. There are some currencies that were printed or minted with some fault and these products and notes also fetch good amount online.

products have a rich history, which makes collecting a rewarding hobby. People collect products for different reasons which can include the historic and artistic value of products and the investment in products intended for long-term profit.
        </p>
        <span><a href="https://wa.me/+919031504270">Know More</a></span>
      </div>
    </div>

    <!-- Features -->
    <div id="features">
      <div class="container">
        <div class="row">
          <div class="col">
            <i class="fa-solid fa-truck-fast fa-2x"></i>
            <h4><strong>Free Shipping</strong></h4>
            <h5>All India</h5>
          </div>
          <div class="col">
            <i class="fa-solid fa-users fa-2x"></i>
            <h4><strong>Engaged Audience</strong></h4>
            <h5>100% Interactive</h5>
          </div>
          <div class="col">
            <i class="fa-solid fa-money-bill-1 fa-2x"></i>
            <h4><strong>Huge Savings</strong></h4>
            <h5>At Lowest Price</h5>
          </div>
          <div class="col">
            <i class="fa-solid fa-recycle fa-2x"></i>
            <h4><strong>Easy Returns</strong></h4>
            <h5>No Questions Asked</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Call To Action -->
    <div id="call-to-action">
      <div class="container">
        <div class="cta-heading">
          <h1><strong>Get 25% more On Your First Sell!</strong></h1>
        </div>
        <div class="cta-button">
          <a href="addProducts.php">Sell Now</a>
        </div>
      </div>
    </div>

     <!-- Trending products -->
     <section class="trending-products" id="trending">
      <h1>Trending products</h1>
      <hr />
      <div class="trending">
        <div
          class="row d-flex flex-row bd-highlight mb-3 justify-content-center align-items-center"
          id="row"
        >
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="images/laptop.jpg" alt="Trending-product-1" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="images/phone.jpg" alt="Trending-product-2" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="images/wash.jpg" alt="Trending-product-3" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="images/earbuds.jpg" alt="Trending-product-4" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="images/fridge.jpg" alt="Trending-product-5" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <!-- <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="product"
          >
            <img src="pics/trproduct6.png" alt="Trending-product-6" />
            <a href="addProducts.php">Sell Now</a>
          </div> -->
        </div>
      </div>
    </section>

    <!-- Featured products -->
    <section class="trending-products" id="featured-products" >
      <h1>Featured products</h1>
      <hr />
      <div class="trending" id="featured">
        <div
          class="row d-flex flex-row bd-highlight mb-3 justify-content-center align-items-center"
          id="row"
        >
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="feproduct"
          >
            <img src="images/watch.jpg" alt="Featured-product-1" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="feproduct"
          >
            <img src="images/tv.jpg" alt="Featured-product-2" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="feproduct"
          >
            <img src="images/desktop.jpg" alt="Featured-product-3" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="feproduct"
          >
            <img src="images/headphone.jpg" alt="Featured-product-4" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          <div
            class="col d-flex flex-column p-2 bd-highlight justify-content-center align-items-center"
            id="feproduct"
          >
            <img src="images/mixer.jpg" alt="Featured-product-5" />
            <a href="addProducts.php">Sell Now</a>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Customer Reviews -->

    <!-- <section class="CustomerReviews">
      <h1>Customer Reviews</h1>
      <hr />
      <div class="customerReviews">
        <div class="card-left">
          <img src="https://oldproductmarkets.in/wp-content/uploads/2022/03/Ira-Guha-founder-and-CEO-Asan-Cup.webp" alt="firstImage">
          <p>This was our first sell on this platform, And i am very satisfied by the help and customer support.</p>
          <h2><strong>Shanaya Gupta</strong></h2>
          <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
          </div>
        </div>
        <div class="Right-Card">
          <div class="card-right card-1">
            <div class="img">
              <img src="https://oldproductmarkets.in/wp-content/uploads/2022/03/depositphotos_111091100-stock-photo-beautiful-indian-girl-in-traditional.jpeg" alt="secondImage">
            </div>
            <div class="img-content">
            <p>Highly recommended to everyone. Nice service and good price offered.</p>
            <h2><strong>Isha Sharma</strong></h2>
            <div class="rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          </div>
          <div class="card-right">
            <div class="img">
              <img src="https://oldproductmarkets.in/wp-content/uploads/2022/03/94031176_2871659389581120_3113863637630976000_n.jpeg" alt="thirdImage">
            </div>
            <div class="img-content">
            <p>I am very happy with this platform. It offers a great price and no delay in payment. 5 stars from me.</p>
            <h2><strong>Shahbaz Ali</strong></h2>
            <div class="rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
           </div>
          </div>
        </div>
      </div>
    </section> -->


    
  </body>
</html>
