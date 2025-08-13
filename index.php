<?php include 'component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Responsive Navbar with Nested Dropdown">
  <title>HOUSEHOLD OF GOD CHURCH</title>
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/script.js"></script>
  <!-- CDN LINKS -->
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

  <?php renderHeader(); ?>
  <!-- HERO SECTION -->
  <div class="hero-section mt-5 pt-3">
    <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/ca1.png');">
          <div class="carousel-overlay">
            <p>Welcome to</p>
            <h1>HOUSEHOLD OF GOD CHURCH</h1>
            <p>Join us in worship, experience God's presence, and grow in faith.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Sunday: 9 AM – Lagos, Nigeria</p>
            <a href="#" class="watch-btn"><i class="fa fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/ca3.png');">
          <div class="carousel-overlay">
            <p>Experience</p>
            <h1>GOD'S LOVE</h1>
            <p>Come as you are and encounter the transforming power of God.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Wednesday Bible Study: 6 PM</p>
            <a href="#" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/Rectangle\ 4.png');">
          <div class="carousel-overlay">
            <p>Join Our</p>
            <h1>COMMUNITY</h1>
            <p>Find your place in our growing family of believers.</p>
            <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Friday Prayer: 6 PM</p>
            <a href="#" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Custom indicators -->
      <div class="custom-indicators">
        <div class="custom-indicator active" data-bs-target="#churchCarousel" data-bs-slide-to="0"></div>
        <div class="custom-indicator" data-bs-target="#churchCarousel" data-bs-slide-to="1"></div>
        <div class="custom-indicator" data-bs-target="#churchCarousel" data-bs-slide-to="2"></div>
      </div>
    </div>
  </div>

  <!-- ABOUT CHURCH SECTION -->
  <div class="container church-section">
    <div class="row align-items-stretch church-row">
      <div class="col-md-5 d-flex">
        <div class="w-100 h-100">
          <img src="images/ca1.png" alt="Church Building" class="church-image h-100 w-100 object-fit-cover rounded">
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="d-flex flex-column justify-content-center w-100">
          <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
          <p class="church-text">
            The young ministry had its inaugural Sunday morning service on the 1st of February, 1987 in his living room, then in the Ikeja area of Lagos state. As membership of the young but peculiar church grew into the hundreds and thousands, the surrounding grounds of his house became sitting area for the overspill from the living room.
            <br><br>
            The young ministry had its inaugural Sunday morning service on the 1st of February, 1987 in his living room, then in the Ikeja area of Lagos state.
          </p>
          <div class="text-start mt-3">
            <a href="aboutchurch.php`" class="btn-see-more">See More. . .</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- WATCH SERMON SECTION -->
  <div class="watch-sermon">
    <div class="container">
      <h2 class="text-center mb-4">WATCH SERMONS</h2>
      <div class="row g-4">
        <div class="col-md-3 col-sm-6">
          <div class="sermon-card">
            <img src="images/ca1.png" alt="Sermon" class="img-fluid" style="height: 250px; width: 100%;">
            <div class="p-3">
              <h5>What is your purpose?</h5>
              <p class="text-muted">Pastor Chris Okotie</p>
              <div class="row">
                <div class="col">
                  <p><i class="fas fa-calendar-alt"></i> 31st Mar, 2025</p>
                </div>
                <div class="col text-end">
                  <a href="#"><i class="fas fa-bookmark me-2"></i></a>
                  <a href="#"><i class="fas fa-share"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="sermon-card">
            <img src="images/ca1.png" alt="Sermon" class="img-fluid" style="height: 250px; width: 100%;">
            <div class="p-3">
              <h5>What is your purpose?</h5>
              <p class="text-muted">Pastor Chris Okotie</p>
              <div class="row">
                <div class="col">
                  <p><i class="fas fa-calendar-alt"></i> 31st Mar, 2025</p>
                </div>
                <div class="col text-end">
                  <a href="#"><i class="fas fa-bookmark me-2"></i></a>
                  <a href="#"><i class="fas fa-share"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="sermon-card">
            <img src="images/ca1.png" alt="Sermon" class="img-fluid" style="height: 250px; width: 100%;">
            <div class="p-3">
              <h5>What is your purpose?</h5>
              <p class="text-muted">Pastor Chris Okotie</p>
              <div class="row">
                <div class="col">
                  <p><i class="fas fa-calendar-alt"></i> 31st Mar, 2025</p>
                </div>
                <div class="col text-end">
                  <a href="#"><i class="fas fa-bookmark me-2"></i></a>
                  <a href="#"><i class="fas fa-share"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="sermon-card">
            <img src="images/ca1.png" alt="Sermon" class="img-fluid" style="height: 250px; width: 100%;">
            <div class="p-3">
              <h5>What is your purpose?</h5>
              <p class="text-muted">Pastor Chris Okotie</p>
              <div class="row">
                <div class="col">
                  <p><i class="fas fa-calendar-alt"></i> 31st Mar, 2025</p>
                </div>
                <div class="col text-end">
                  <a href="#"><i class="fas fa-bookmark me-2"></i></a>
                  <a href="#"><i class="fas fa-share"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pagination mt-5">
        <a href="#"><i class="fas fa-chevron-left"></i></a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#">14</a>
        <a href="#">15</a>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
      </div>
    </div>

  </div>

  <!-- PROGRAMME SECTION -->
  <div class="container programme-section">
    <h2 class="text-center fw-bold mb-4">PROGRAMMES</h2>
    <div class="row g-4 justify-content-center">

      <div class="col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #f15c5c;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">01</div>
          <div class="programme-month">February</div>
          <div class="programme-title">Household is 32!</div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #1a0033;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">12</div>
          <div class="programme-month">September</div>
          <div class="programme-title">Wednesday Service</div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #ffaa00;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">01</div>
          <div class="programme-month">October</div>
          <div class="programme-title">Nigeria’s Independence</div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="programme-card" style="background-color: #4d1c1c;">
          <div class="programme-icon"><i class="fas fa-calendar-alt"></i></div>
          <div class="programme-date">09</div>
          <div class="programme-month">September</div>
          <div class="programme-title">Sunday Service</div>
        </div>
      </div>

    </div>

    <div class="text-center">
      <button class="btn btn-seemore">See More</button>
    </div>
  </div>

  <!-- BOOK SECTION -->
  <div class="section-container">
    <div class="container">
      <div class="row">
        <!-- Left Column -->
        <div class="col-md-6 mb-md-0">
          <h3 class="highlight-title">THE LAST OUTCAST</h3>
          <p>
            Who is the Last Outcast? | What is the mystery of iniquity?<br>
            Who is the antichrist? | What is the religion of the antichrist?<br>
            How will the antichrist enter our world?<br>
            Find out in <span class="fw-bold">THE LAST OUTCAST</span>
          </p>
          <img src="images/book.png" alt="The Last Outcast Book" class="book-img">
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
          <div class="row mb-2">
            <div class="col-md-4">
              <hr>
            </div>
            <div class="right-border-title col-md-4">Huperballó Megethos</div>
            <div class="col-md-4">
              <hr>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col-sm-5">
              <img src="images/pastor.jpg" alt="Rev. Chris Okotie" class="profile-img mb-3" />
              <div class="author-info">Rev. Chris Okotie</div>
              <div class="author-subtitle">Pastor, Household of God Church</div>
            </div>
            <div class="col-sm-7">
              <p>
                And what is the exceeding greatness of his power to us-ward who believe,
                according to the working of his mighty power, Which he wrought in Christ,
                when he raised him from the dead, and set him at his own right hand in the
                heavenly places, Far above all principality, and power, and might, and dominion
                at his own right hand in the <br><br>
                heavenly places, Far above all principality, and power, and might, and dominion...
              </p>
              <button class="btn btn-seemore">See More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <div class="contact-section" id="contact-section">
    <div class="container">
      <div class="row align-items-start g-5">
        <!-- Left column: Contact Info -->
        <div class="col-lg-6 d-flex flex-column left-column">
          <h3 class="fw-bold">SEND US A MESSAGE</h3>
          <p class="text-muted">
            Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.
          </p>
          <div class="contact-info">
            <p><i class="fas fa-location-dot"></i> Plot 4 HouseHold of God Street, Off Kudirat Abiola Way, Clay Bus–Stop, Ikeja, Lagos – Nigeria</p>
            <p><i class="fas fa-envelope"></i> info@householdofgodchurch.org</p>
            <p><i class="fas fa-phone"></i> +234 813 6633 494, +234 702 6828 318</p>
          </div>
        </div>

        <!-- Right column: Form -->
        <div class="col-lg-6">
          <div class="contact-box">
            <form>
              <h4 class="">CONTACT FORM</h4>
              <p>Kindly fill the form below to reach out to us</p>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" placeholder="Full Name" />
              </div>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" placeholder="Email Address" />
              </div>
              <div class="form-group">
                <i class="fas fa-tag"></i>
                <input type="text" class="form-control" placeholder="Subject" />
              </div>
              <div class="form-group">
                <i class="fas fa-comment-dots"></i>
                <textarea class="form-control" rows="4" placeholder="Write your message here..."></textarea>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-custom">
                  <i class="fas fa-paper-plane me-2"></i> Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER SECTION -->

  <?php renderHeader(); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>