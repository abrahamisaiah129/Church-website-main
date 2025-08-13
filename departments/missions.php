<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Missions Department</title>
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
    <?php renderBanner('Missions Department'); ?>

   

    <!-- THE DEPARTMENT -->
    <div class="container church-section">
        <h2 class="church-title pb-4 text-center">HOLY POLICE DEPARTMENT</h2>
        <div class="row align-items-stretch church-row">
            <div class="col-md-5 hod-section align-items-center justify-content-center d-flex flex-column">
                <h2>Meet Our Head of Department</h2>
                <img src="../images/pastor.jpg" alt="Head of Department" class="mb-4">
                <h2>Bro. John Doe</h2>
                <p>The Benevolence Department is dedicated to supporting members in need and organizing outreach programs.</p>
                <a href="mailto:benevolence@householdofgodchurch.org">benevolence@householdofgodchurch.org</a>
            </div>
            <div class="col-md-6 d-flex">
                <div>
                    <p class="church-text">
                        The Benevolence Department coordinates the church’s efforts to provide assistance to those in need, both within and outside the church community.
                        <br><br>
                        Activities include food drives, clothing donations, and emergency relief. The department works closely with other ministries to ensure that support reaches those who need it most.
                        <br><br>
                        If you would like to volunteer or know someone in need, please contact the department head.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php renderFooter(); ?>
</body>

</html>