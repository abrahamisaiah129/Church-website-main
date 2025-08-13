<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About our church</title>
  <link rel="stylesheet" href="../css/style.css" />
  <script defer src="../js/script.js"></script>
  <!-- CDN LINKS -->
  <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script
    defer
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php renderHeader(); ?>
  <!-- HERO SECTION -->
  <div class="hero-section  mt-5 pt-3">
    <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('../images/ca1.png')">
          <div class="carousel-overlay">
            <p>Welcome to</p>
            <h1>HOUSEHOLD OF GOD CHURCH</h1>
            <p>
              Join us in worship, experience God's presence, and grow in
              faith.
            </p>
            <p class="service-time">
              <i class="fa-regular fa-calendar-days"></i> Sunday: 9 AM
              – Lagos, Nigeria
            </p>
            <a href="#" class="watch-btn"><i class="fa fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div
          class="carousel-item"
          style="background-image: url('../images/ca3.png')">
          <div class="carousel-overlay">
            <p>Experience</p>
            <h1>GOD'S LOVE</h1>
            <p>
              Come as you are and encounter the transforming power of God.
            </p>
            <p class="service-time">
              <i class="fa-regular fa-calendar-days"></i> Wednesday Bible
              Study: 6 PM
            </p>
            <a href="#" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
        <div
          class="carousel-item"
          style="background-image: url('../images/Rectangle 4.png')">
          <div class="carousel-overlay">
            <p>Join Our</p>
            <h1>COMMUNITY</h1>
            <p>Find your place in our growing family of believers.</p>
            <p class="service-time">
              <i class="fa-regular fa-calendar-days"></i> Friday Prayer: 6 PM
            </p>
            <a href="#" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#churchCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#churchCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Custom indicators -->
      <div class="custom-indicators">
        <div
          class="custom-indicator active"
          data-bs-target="#churchCarousel"
          data-bs-slide-to="0"></div>
        <div
          class="custom-indicator"
          data-bs-target="#churchCarousel"
          data-bs-slide-to="1"></div>
        <div
          class="custom-indicator"
          data-bs-target="#churchCarousel"
          data-bs-slide-to="2"></div>
      </div>
    </div>
  </div>

  <!-- ABOUT CHURCH SECTION -->
  <div class="container church-section">
    <div class="row align-items-stretch church-row">
      <div class="col-md-5 d-flex">
        <div class="w-100 h-100">
          <img src="../images/ca1.png" alt="Church Building" class="church-image h-100 w-100 object-fit-cover rounded">
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="d-flex flex-column justify-content-center w-100">
          <h2 class="church-title">The Household Of God International Ministries</h2>
          <p class="church-text">
            The young ministry had its inaugural Sunday morning service on the 1st of February, 1987 in his living room, then in the Ikeja area of Lagos state. As membership of the young but peculiar church grew into the hundreds and thousands, the surrounding grounds of his house became sitting area for the overspill from the living room. The ministry of the church and the person of Reverend Chris Okotie as a minister of the gospel became nationally recognized when the Lord Jesus Christ inspired the inauguration of the GRACE PROGRAMME and the television ministry, APOKALUPSIS.
          </p>
        </div>
      </div>
    </div>

    <p class="church-text mt-4">The charity driven GRACE programme was instituted in 1990 and has become a major benevolence channel of the ministry on an annual basis. The objective of the programme as directed by the Lord Jesus is to extend the arm of care and sharing to the less privileged in the society through recognized non governmental organizations who deal directly with such people. In 1996 the KARIS AWARD, yet another inspiration by the Lord Jesus, which is aimed at appreciating Nigerians who have positively impacted the nation but have not been recognized by the government, was instituted and subsumed into the GRACE programme.
    </p>
  </div>

  <!-- FOOTER SECTION -->

  <?php renderFooter(); ?>
</body>

</html>