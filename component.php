<?php
// All components that are used in the website

function getBasePath()
{
    $current = $_SERVER['PHP_SELF'];
    if (stripos($current, '/departments/') !== false) {
        return '../';
    }
    if (stripos($current, '/about/') !== false) {
        return '../';
    }
    if (stripos($current, '/media/') !== false) {
        return '../';
    }
    if (stripos($current, '/events/') !== false) {
        return '../';
    }
    return '';
}

/**
 * $pageTitle: string - The main title (e.g. "Benevolence Department", "About our Pastor", etc.)
 * $highlight: string - The highlighted yellow text (e.g. "DEPARTMENT", "EVENTS", etc.)
 */
$pageTitleVar = '';
function renderPageHeader($pageTitle)
{
?>
    $pageTitleVar = <?php echo json_encode($pageTitle); ?>;
<?php
}
function renderBanner($title)
{
    $base = getBasePath();
?>
    <!-- HERO SECTION -->
    <div class="hero-section mt-5 pt-3">
        <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('<?php echo $base; ?>images/ca1.png');">
                    <div class="carousel-overlay">
                        <p>Welcome to</p>
                        <h1><?php echo $title; ?></h1>
                        <p>Join us in worship, experience God's presence, and grow in faith.</p>
                        <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Sunday: 9 AM – Lagos, Nigeria</p>
                        <a href="#" class="watch-btn"><i class="fa fa-video"></i> Watch Live</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $base; ?>images/ca3.png');">
                    <div class="carousel-overlay">
                        <p>Welcome to</p>
                        <h1><?php echo $title; ?></h1>
                        <p>Come as you are and encounter the transforming power of God.</p>
                        <p class="service-time"><i class="fa-regular fa-calendar-days"></i> Wednesday Bible Study: 6 PM</p>
                        <a href="#" class="watch-btn"><i class="fa-solid fa-video"></i> Watch Live</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $base; ?>images/Rectangle%204.png');">
                    <div class="carousel-overlay">
                        <p>Welcome to</p>
                        <h1><?php echo $title; ?></h1>
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
<?php
}
function renderHeader()
{
    $base = getBasePath();
?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base; ?>index.php">
                    <img src="<?php echo $base; ?>images/hog-logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" id="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo $base; ?>index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base; ?>about/aboutchurch.php">Our Church</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>about/aboutpastor.php">Our Pastor</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Departments</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/childrens.php">Children's Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/singles.php">Singles Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/works.php">Works Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/publication.php">Publication Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/evangelism.php">Evangelism Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/holy.php">Holy Police</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/technical.php">Technical Crew</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/villa.php">Villa Sanitation</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/pastoral.php">Pastoral Care</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/missions.php">Missions Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/protocol.php">Protocol Department</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base; ?>departments/benevolence.php">Benevolence Department</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>events/event.php">Events</a></li>
                        </li>
                        <li class="nav-item ">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>media/gallery.php">Media</a></li>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php#contact-section">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
}

function renderFooter()
{
?>
    <footer class="footer text-white">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <img src="../images/hog-logo.png" alt="Logo" height="60" />
                </div>
                <div class="col-md-6">
                    <form class="input-group" action="#" method="POST">
                        <span class="input-group-text bg-white border-0 rounded-start">
                            <i class="fas fa-envelope text-secondary"></i>
                        </span>
                        <input
                            type="email"
                            class="form-control border-0"
                            placeholder="youremailaddress@gmail.com" />
                        <button class="btn btn-subscribe rounded-end bg-secondary" type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <hr style="color: #ffffff" />
            <div class="row text-start mt-4">
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">ADDRESS</h6>
                    <p>
                        Plot 4 HouseHold of God Street,<br />
                        Off Kudirat Abiola Way, Clay Bus-Stop,<br />
                        Ikeja, Lagos - Nigeria
                    </p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">#OKOTIESLETTER</h6>
                    <p>Get Okotie’s Letternow for free</p>
                    <button class="newsletter-btn px-4 py-2 bg-secondary rounded w-100">
                        <i class="fas fa-download "></i>
                    </button>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">FOLLOW US</h6>
                    <p>Follow us on our social Media</p>
                    <div class="social-icons">
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">INFO</h6>
                    <div class="info-item">
                        <img src="../images/footer-hh-logo.png" alt="Prayer" />
                        <div>
                            <div>Prayer Meeting</div>
                            <small>6pm - 7pm Weekdays</small>
                        </div>
                    </div>
                    <div class="info-item">
                        <img src="../images/footer-hh-logo.png" alt="Proclaimers" />
                        <div>
                            <div>Proclaimers</div>
                            <small>9pm Saturdays</small>
                        </div>
                    </div>
                    <div class="info-item">
                        <img src="../images/ca1.png" alt="Apokalupsis" />
                        <div>
                            <div>Apokalupsis</div>
                            <small>7am Sundays on Raypower 100.5fm</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php
}
?>