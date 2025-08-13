<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About our Pastor</title>
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

  <!-- ABOUT PASTOR SECTION -->
  <div class="container church-section">
    <div id="carouselExampleIndicators" class="carousel slide gap-3">
      <div class="carousel-inner mb-4">
        <div class="carousel-item active">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Our Pastor"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  The young ministry had its inaugural Sunday morning service on
                  the 1st of February, 1987 in his living room, then in the Ikeja
                  area of Lagos state. As membership of the young but peculiar
                  church grew into the hundreds and thousands, the surrounding
                  grounds of his house became sitting area for the overspill from
                  the living room. The ministry of the church and the person of Reverend Chris
                  Okotie as a minister of the gospel became nationally recognized
                  when the Lord Jesus Christ inspired the inauguration of the
                  GRACE PROGRAMME and the television ministry, APOKALUPSIS.
                  <br /><br />

                  The charity driven GRACE programme was instituted in 1990 and
                  has become a major benevolence channel of the ministry on an
                  annual basis. The objective of the programme as directed by the Lord Jesus is to extend the arm of care and sharing to the less privileged in the society through recognized non governmental organizations who deal directly with such people.
                  <br> <br>In 1996 the KARIS AWARD, yet another inspiration by the Lord Jesus, which is aimed at appreciating Nigerians who have
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Church Building"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  positively impacted the nation but have not been recognized by the government, was instituted and subsumed into the GRACE programme. The ministry of the church and the person of Reverend Chris
                  Okotie as a minister of the gospel became nationally recognized
                  when the Lord Jesus Christ inspired the inauguration of the
                  GRACE PROGRAMME and the television ministry, APOKALUPSIS.
                  <br /><br />
                  The KARIS award has been given over the years to distinguished Nigerians like Mallam Aminu Kano, Tai Solarin, Hajia Gambo Sawaba, Gen. Murtala Mohammed (posthumous), DIG Chris Omeben, Mr. Taiwo Akinkunmi, Mrs. Margaret Ekpo, Chief Michael Imuodu and many others. The year 2010 KARIS award recipient was Chief Gani Fawehinmi, SAN, who was so honoured, though posthumously for his contributions to the practice of law and the fight for good governance and human rights in Nigeria. It is worthy of note that some of the awardees of the programme have been subsequently recognized by government at various levels.

                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Church Building"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  The GRACE programme has several beneficiaries, charity organizations who have become traditional recipients of the charitable disposition of Reverend Chris Okotie and the members of the Household of God Church on an annual basis.
                  <br /><br />

                  They include the Sunshine Foundation, the Pacelli School for the Blind and Partially Sighted, The Little Saints’ Orphanage and The Spinal Cord Injuries Association of Nigeria. Each of these organizations receives five hundred thousand naira from the ministry. The Lord Jesus Christ again inspired the television ministry of the Household of God Church, known popularly as Apokalupsis, which was instituted in 1999 to carry the message of the grace of God presented with a balanced biblical perspective beyond the walls of the local assembly to a larger audience both locally and more recently, internationally. The international audience can download messages online, and the live streaming of church services is also in the works. The television ministry has received many awards including that from the
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Church Building"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  ...Nigerian Television Authority network in the year 2002. By 1990, the location of the church in Reverend Chris Okotie’s house could no longer be sustained as membership had grown to several thousands, though two services were being held each Sunday morning.
                  <br /><br />

                  The need for the ministry to move to a permanent location had become clear for all to see. After a prolonged search and by divine direction, a run down factory in the Oregun area of Ikeja in Lagos was found and a lease agreement entered into with the owner. The ministry moved in and held its first Sunday service at the newly renovated auditorium on the 19th of December, 1992. The date coincided with the day of GRACE 1992. This site and all the surrounding land in the immediate vicinity thus became a target of faith for Reverend Chris Okotie and the church members and indeed the ministry now owns a vast expanse of land in the area by the grace of the Lord Jesus Christ.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Church Building"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  In the year 1999, Reverend Chris Okotie once again, with instructions from the Lord Jesus, left Nigeria on a retreat during which he wrote the manuscript of the iconic best selling novel, THE LAST OUTCAST.
                  <br /><br />

                  The manuscript was subjected to intense review over a period of time and the finished book was eventually published in 2002 and received rave reviews from all quarters. The novel thus exposed another aspect of Reverend Chris Okotie’s talent and the hand of the Lord Jesus upon him to the general public. By the grace and provident disposition of the Lord Jesus Christ, the ministry right now is in the process of building a new seven-storey facility to house the Children’s Church which will be moved out of its present location as soon as the SILVER CITADEL is completed. In November 2005, on receiving a word from the Lord Jesus, the joint celebration of birthdays by members of the church born in the same month of the year was instituted by Reverend Chris Okotie as a means of creating yet another forum for fellowship...
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex align-items-stretch church-row">
            <div class="col-md-5">
              <div class="w-100 h-100">
                <img
                  src="../images/ca1.png"
                  alt="Church Building"
                  class="church-image h-100 w-100 object-fit-cover rounded" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center w-100">
                <h2 class="church-title">A CHURCH WHERE GRACE MEETS GLORY</h2>
                <p class="church-text">
                  ...among members, aside from the several departments in the ministry, which are more administratively based.
                  <br /><br />

                  These celebrations have brought out the creativity in the people of the Household of God Church and indeed made the church a lot livelier.In the year 2006, the Queen Esther beauty pageant was also created by Reverend Chris Okotie based on an inspiration from the Lord, to project biblical character values for women and to correct the global wrong estimation and perception of feminine beauty as that which is from the outward appearance. The pageant involves ladies who are members of the church dressed as different female characters
                  from the bible, and who are then judged on their representation of suchbiblical characters and the creativity displayed in their costumes. Thepageant has broadened in its conceptualization with each passing year sinceits inception. The pageant is subsumed in the annual GRACE Programme.
                  <br>
                  The KARIS award now carries a cash prize of two million naira....
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- controls and indicators -->
      <div class="carousel-custom-navigation d-flex align-items-center justify-content-center">
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1">1</button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2">2</button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3">3</button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4">4</button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5">5</button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="5"
            aria-label="Slide 6">6</button>
        </div>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <?php renderFooter(); ?>
</body>

</html>