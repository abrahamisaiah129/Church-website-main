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
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            /* Full-screen background image styling */
            background-image: url('../images//ca1.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #ffffff;
            /* Default text color for contrast */
            position: relative;
        }

        /* Add an overlay for better text readability */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Slightly darker overlay */
            z-index: -1;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.95);
            /* Semi-transparent white card, less transparent */
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 2.5rem;
        }



        /* .coming-soon-text {
            color: #6c757d;
            font-weight: 400;
        }

        .info-text {
            color: #495057;
        }

        .small-message {
            color: #888;
        }

        @media (max-width: 768px) {
            .church-title {
                font-size: 2.5rem;
            }
        } */
    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Main card container for the coming soon page -->
                <div class="card p-1 shadow-lg border-0 rounded-2">
                    <div class="card-body bg-black text-center">
                        <!-- the logo -->
                        <img src="../images/hog-logo.png" alt="House of God Church Logo" class="mb-4" style="max-width: 150px;">
                        <!-- Church Name Heading -->
                        <h1 class="card-title text-warning fw-bolder mb-3">
                            House of God Church
                        </h1>

                        <!-- Main 'Coming Soon' message -->
                        <h2 class="card-subtitle h4 text-light mb-4">
                            Our new website is coming soon!
                        </h2>

                        <!-- Church Address and Contact Information -->
                        <!-- REPLACE the text below with the actual church address and details -->
                        <div class="info-text h3  text-light fs-5 mt-4">
                            <p class="mb-1">123 Church Street, olodi apapa, Lagos State 12345</p>
                            <p class="mb-0">Email: contact@householdofgod.church</p>
                        </div>

                        <!-- Optional: A small message for visitors -->
                        <code>
                            <p class="mt-4  text-light fw-bolder small">
                                We are working hard to bring you a new online experience with God. Thank you for your patience!
                            </p>
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>