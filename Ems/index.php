<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Prasangam</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Bootstrap Icons -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />

  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
<div class="logo">
  <img src="./img/logo.ico" alt="Prasangam Logo" class="logo-img" />
  <span class="logo-text">Prasan<span>gam</span></span>
</div>

  <div class="search-container" role="search" aria-label="Search events and location">
    <i class="bi bi-search search-icon" aria-hidden="true"></i>
    <input
      type="search"
      class="search-input"
      placeholder="Search events"
      aria-label="Search events"
    />
    <i class="bi bi-geo-alt location-icon" aria-hidden="true"></i>
    <input
      type="search"
      class="location-input"
      placeholder="Jamnagar"
      aria-label="Location"
    />
    <button class="search-btn" aria-label="Search">
      <i class="bi bi-search"></i>
    </button>
  </div>

  <nav role="navigation" aria-label="Primary navigation">
    <a href="#">Contact Sales</a>
    <a href="#">Create Events</a>
    <a href="#">Help Center</a>
    <a href="#">Find my tickets</a>
    <a href="./login.php">Log In</a>
    <a href="./signup.php">Sign Up</a>
  </nav>
</header>

<!-- Hero Carousel -->
<div
  id="heroCarousel"
  class="carousel slide hero-carousel"
  data-bs-ride="carousel"
  data-bs-interval="5000"
  aria-label="Hero event highlights"
>
  <div class="carousel-inner">
    <div
      class="carousel-item active"
      style="
        background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=1400&q=80');
      "
    >
      <div class="hero-text">
        <span class="highlight-orange">FROM SMOKED MEATS</span><br />
        <span class="highlight-light">TO SWEET</span>
        <span class="highlight-orange">TREATS</span><br />
        <button class="hero-btn" type="button">Get Into Food Festivals</button>
      </div>
    </div>
    <div
      class="carousel-item"
      style="
        background-image: url('https://images.unsplash.com/photo-1525610553991-2bede1a236e2?auto=format&fit=crop&w=1400&q=80');
      "
    >
      <div class="hero-text">
        <span class="highlight-orange">DISCOVER</span><br />
        <span class="highlight-light">THE BEST</span>
        <span class="highlight-orange">EVENTS</span><br />
        <button class="hero-btn" type="button">Explore Now</button>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#heroCarousel"
    data-bs-slide="prev"
    aria-label="Previous slide"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#heroCarousel"
    data-bs-slide="next"
    aria-label="Next slide"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<!-- Categories -->
<section class="categories" aria-label="Event categories">
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-mic"></i></div>
    Music
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-disc"></i></div>
    Nightlife
  </div>
  <div class="category-item long-text">
    <div class="circle-icon"><i class="bi bi-theater-masks"></i></div>
    Performing & Visual Arts
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-calendar-event"></i></div>
    Holidays
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-chat-heart"></i></div>
    Dating
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-controller"></i></div>
    Hobbies
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-briefcase"></i></div>
    Business
  </div>
  <div class="category-item">
    <div class="circle-icon"><i class="bi bi-cup-straw"></i></div>
    Food & Drink
  </div>
</section>
<!-- Featured Cities Section -->
<section class="featured-cities mt-5 px-4">
  <div class="d-flex overflow-auto gap-3 pb-2">
    <div class="city-card text-white text-start" style="background-image: url('https://cdn.pixabay.com/photo/2016/11/29/09/08/new-york-1867569_1280.jpg');">
      <h5 class="fw-bold p-3">New York</h5>
    </div>
    <div class="city-card text-white text-start" style="background-image: url('https://cdn.pixabay.com/photo/2017/01/20/00/30/los-angeles-1990603_1280.jpg');">
      <h5 class="fw-bold p-3">Los Angeles</h5>
    </div>
    <div class="city-card text-white text-start" style="background-image: url('https://cdn.pixabay.com/photo/2017/03/27/13/54/chicago-2179935_1280.jpg');">
      <h5 class="fw-bold p-3">Chicago</h5>
    </div>
    <div class="city-card text-white text-start" style="background-image: url('https://cdn.pixabay.com/photo/2015/09/06/01/40/washington-d-c-925673_1280.jpg');">
      <h5 class="fw-bold p-3">Washington</h5>
    </div>
  </div>
</section>

<!-- Popular Cities Tags -->
<section class="popular-cities px-4 mt-4 mb-5">
  <h5 class="fw-bold mb-3">Popular cities</h5>
  <div class="d-flex flex-wrap gap-2 overflow-auto pb-2">
    <button class="btn btn-light rounded-pill">Things to do in Austin</button>
    <button class="btn btn-light rounded-pill">Things to do in Abilene</button>
    <button class="btn btn-light rounded-pill">Things to do in Denver</button>
    <button class="btn btn-light rounded-pill">Things to do in Seattle</button>
    <button class="btn btn-light rounded-pill">Things to do in Phoenix</button>
    <button class="btn btn-light rounded-pill">Things to do in Detroit</button>
    <button class="btn btn-light rounded-pill">Things to do in Albuquerque</button>
    <button class="btn btn-light rounded-pill">Things to do in Anaheim</button>
    <button class="btn btn-light rounded-pill">Things to do in Raleigh</button>
    <button class="btn btn-light rounded-pill">Things to do in Baltimore</button>
    <button class="btn btn-light rounded-pill">Things to do in Indianapolis</button>
    <button class="btn btn-light rounded-pill">Things to do in Wichita</button>
    <button class="btn btn-light rounded-pill">Things to do in San Antonio</button>
  </div>
</section>
<footer class="footer bg-dark text-light py-5 mt-5">
  <div class="container">
    <div class="row">

      <div class="col-6 col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Use Eventbrite</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-light text-decoration-none">Create Events</a></li>
          <li><a href="#" class="text-light text-decoration-none">Find Events</a></li>
          <li><a href="#" class="text-light text-decoration-none">Pricing</a></li>
          <li><a href="#" class="text-light text-decoration-none">Eventbrite App</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Plan Events</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-light text-decoration-none">Sell Tickets Online</a></li>
          <li><a href="#" class="text-light text-decoration-none">Professional Event Planning</a></li>
          <li><a href="#" class="text-light text-decoration-none">Eventbrite Pricing</a></li>
          <li><a href="#" class="text-light text-decoration-none">Event Management Software</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Find Events</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-light text-decoration-none">New Orleans Food & Drink Events</a></li>
          <li><a href="#" class="text-light text-decoration-none">Los Angeles Music Events</a></li>
          <li><a href="#" class="text-light text-decoration-none">Chicago Business Events</a></li>
          <li><a href="#" class="text-light text-decoration-none">Seattle Networking Events</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Connect With Us</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-light text-decoration-none">Contact Support</a></li>
          <li><a href="#" class="text-light text-decoration-none">About Eventbrite</a></li>
          <li><a href="#" class="text-light text-decoration-none">Careers</a></li>
          <li><a href="#" class="text-light text-decoration-none">Become a Partner</a></li>
        </ul>
      </div>

    </div>

    <hr class="border-light" />

    <div class="text-center small">
      &copy; 2025 Eventbrite, Inc. All rights reserved.
    </div>
  </div>
</footer>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
