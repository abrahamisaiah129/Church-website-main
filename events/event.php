<?php include '../component.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Church Events</title>

    <link rel="stylesheet" href="../css/style.css" />
    <script defer src="../js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php renderHeader(); ?>



    <div class="container py-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-warning mb-2">Explore Our Events</h2>
            <p class="lead text-secondary">From monthly fellowships to special annual celebrations, find an event to be a part of.</p>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mb-5">
            <div class="position-relative flex-grow-1 w-100 w-md-auto">
                <input type="text" id="searchInput" placeholder="Search events..." class="form-control rounded-pill ps-4 pe-5" onkeyup="filterEvents()">
                <i class="fas fa-search text-muted position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
            <select id="monthFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterEvents()">
                <option value="">All Months</option>
            </select>
            <select id="yearFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterEvents()">
                <option value="">All Years</option>
            </select>
            <select id="eventTypeFilter" class="form-select w-100 w-md-auto rounded-pill" onchange="filterEvents()">
                <option value="">All Events</option>
                <option value="Fellowship Sunday">Fellowship Sunday</option>
                <option value="Christmas Carol Competition">Christmas Carol Competition</option>
                <option value="Halleluyah Party">Halleluyah Party</option>
                <option value="Baby Dedication">Baby Dedication</option>
                <option value="Weddings">Weddings</option>
                <option value="Queen Esther">Queen Esther</option>
                <option value="Grace">Grace</option>
                <option value="Christmas Lights">Christmas Lights</option>
            </select>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="eventsGallery">
            <div class="col-12 text-center text-muted py-5">
                <p>Loading events...</p>
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

    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title fw-bold text-dark" id="eventModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalMainImage" src="" class="img-fluid rounded-3 mb-3" alt="" />

                    <div id="modalCarousel" class="d-flex justify-content-center gap-3 my-3">
                    </div>

                    <p id="modalEventType" class="text-muted small mb-1"></p>
                    <p id="modalDate" class="text-muted small mb-1"></p>
                    <p id="modalDescription" class="lead"></p>
                </div>
            </div>
        </div>
    </div>

    <?php renderFooter(); ?>

    <script>
        // Event data array for all event types
        const eventData = [
            // Fellowship Sunday
            {
                title: 'January Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'January 2025',
                month: 'January',
                year: '2025',
                description: 'A wonderful fellowship to start the new year.',
                images: ['../images/ca1.png', '../images/ca3.png']
            },
            {
                title: 'February Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'February 2025',
                month: 'February',
                year: '2025',
                description: 'Celebrating love and faith during our monthly fellowship.',
                images: ['../images/pastor.jpg']
            },
            {
                title: 'March Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'March 2025',
                month: 'March',
                year: '2025',
                description: 'Joining together for a time of worship and community.',
                images: ['../images/Rectangle 4.png']
            },
            {
                title: 'April Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'April 2025',
                month: 'April',
                year: '2025',
                description: 'A special Easter fellowship service.',
                images: ['../images/book.png']
            },
            {
                title: 'May Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'May 2025',
                month: 'May',
                year: '2025',
                description: 'Honoring mothers and family during our May fellowship.',
                images: ['../images/ca1.png']
            },
            {
                title: 'June Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'June 2025',
                month: 'June',
                year: '2025',
                description: 'Father\'s Day celebration at our monthly fellowship.',
                images: ['../images/ca3.png']
            },
            {
                title: 'July Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'July 2025',
                month: 'July',
                year: '2025',
                description: 'Summer worship and gathering.',
                images: ['../images/pastor.jpg']
            },
            {
                title: 'August Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'August 2025',
                month: 'August',
                year: '2025',
                description: 'A special worship session for the youth.',
                images: ['../images/Rectangle 4.png']
            },
            {
                title: 'September Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'September 2025',
                month: 'September',
                year: '2025',
                description: 'Back to school prayer and fellowship.',
                images: ['../images/book.png']
            },
            {
                title: 'October Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'October 2025',
                month: 'October',
                year: '2025',
                description: 'Celebrating grace and thanksgiving.',
                images: ['../images/ca1.png']
            },
            {
                title: 'November Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'November 2025',
                month: 'November',
                year: '2025',
                description: 'A time of deep prayer and reflection.',
                images: ['../images/ca3.png']
            },
            {
                title: 'December Fellowship Sunday',
                type: 'Fellowship Sunday',
                date: 'December 2025',
                month: 'December',
                year: '2025',
                description: 'A final fellowship of the year, filled with joy.',
                images: ['../images/pastor.jpg']
            },
            // Christmas Carol Competition
            {
                title: 'Christmas Carol Competition 2024',
                type: 'Christmas Carol Competition',
                date: 'December 2024',
                month: 'December',
                year: '2024',
                description: 'Our annual competition of carols.',
                images: ['../images/Rectangle 4.png']
            },
            // Halleluyah Party
            {
                title: 'Halleluyah Party 2024',
                type: 'Halleluyah Party',
                date: 'December 2024',
                month: 'December',
                year: '2024',
                description: 'An end-of-year celebration filled with praise.',
                images: ['../images/book.png']
            },
            // Baby Dedication
            {
                title: 'Baby Dedication - Smith Family',
                type: 'Baby Dedication',
                date: 'October 26, 2024',
                month: 'October',
                year: '2024',
                description: 'The dedication of a child is a public commitment.',
                images: ['../images/ca1.png']
            },
            {
                title: 'Baby Dedication - Johnson Family',
                type: 'Baby Dedication',
                date: 'November 15, 2024',
                month: 'November',
                year: '2024',
                description: 'A special day for the Johnson family.',
                images: ['../images/ca3.png']
            },
            // Weddings
            {
                title: 'Wedding of John and Jane',
                type: 'Weddings',
                date: 'September 10, 2024',
                month: 'September',
                year: '2024',
                description: 'Celebrating the union of John and Jane.',
                images: ['../images/pastor.jpg']
            },
            {
                title: 'Wedding of Mark and Mary',
                type: 'Weddings',
                date: 'October 5, 2024',
                month: 'October',
                year: '2024',
                description: 'A joyous celebration for Mark and Mary.',
                images: ['../images/Rectangle 4.png']
            },
            // Queen Esther
            {
                title: 'Queen Esther 2017',
                type: 'Queen Esther',
                date: '2017',
                month: '',
                year: '2017',
                description: 'Celebrating our Queen Esther for the year 2017.',
                images: ['../images/book.png']
            },
            {
                title: 'Queen Esther 2016',
                type: 'Queen Esther',
                date: '2016',
                month: '',
                year: '2016',
                description: 'Celebrating our Queen Esther for the year 2016.',
                images: ['../images/ca1.png']
            },
            // Grace
            {
                title: 'Grace 2019',
                type: 'Grace',
                date: '2019',
                month: '',
                year: '2019',
                description: 'A year of amazing grace.',
                images: ['../images/ca3.png']
            },
            {
                title: 'Grace 2018',
                type: 'Grace',
                date: '2018',
                month: '',
                year: '2018',
                description: 'Showcasing the grace of God in our lives.',
                images: ['../images/pastor.jpg']
            },
            // Christmas Lights
            {
                title: 'Christmas Lights 2024',
                type: 'Christmas Lights',
                date: 'December 2024',
                month: 'December',
                year: '2024',
                description: 'Our church and community Christmas lights display.',
                images: ['../images/Rectangle 4.png']
            },
        ];

        // Get references to the new filter dropdowns
        const monthFilterSelect = document.getElementById('monthFilter');
        const yearFilterSelect = document.getElementById('yearFilter');
        const searchInput = document.getElementById('searchInput');
        const eventTypeFilterSelect = document.getElementById('eventTypeFilter');

        // Months array for easier reference
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        /**
         * Populates the month and year dropdowns based on the event data.
         */
        function populateFilters() {
            const uniqueMonths = new Set();
            const uniqueYears = new Set();

            // Populate sets with unique months and years from event data
            eventData.forEach(event => {
                if (event.month) {
                    uniqueMonths.add(event.month);
                }
                if (event.year) {
                    uniqueYears.add(event.year);
                }
            });

            // Sort months by order of the year, and years in descending order
            const sortedMonths = months.filter(m => uniqueMonths.has(m));
            const sortedYears = Array.from(uniqueYears).sort((a, b) => b - a);

            // Populate the month dropdown
            sortedMonths.forEach(month => {
                const option = document.createElement('option');
                option.value = month;
                option.textContent = month;
                monthFilterSelect.appendChild(option);
            });

            // Populate the year dropdown
            sortedYears.forEach(year => {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearFilterSelect.appendChild(option);
            });
        }

        /**
         * Filters the events based on search query and dropdown selections.
         */
        function filterEvents() {
            const searchQuery = searchInput.value.toLowerCase();
            const eventType = eventTypeFilterSelect.value;
            const month = monthFilterSelect.value;
            const year = yearFilterSelect.value;

            const filtered = eventData.filter(item => {
                // Search query match
                const searchMatch = item.title.toLowerCase().includes(searchQuery) ||
                    item.description.toLowerCase().includes(searchQuery);

                // Event type match
                const typeMatch = eventType === '' || item.type === eventType;

                // Month match
                const monthMatch = month === '' || item.month === month;

                // Year match
                const yearMatch = year === '' || item.year === year;

                return searchMatch && typeMatch && monthMatch && yearMatch;
            });

            renderGallery(filtered);
        }

        /**
         * Renders the event cards in the gallery.
         */
        function renderGallery(items) {
            const gallery = document.getElementById('eventsGallery');
            gallery.innerHTML = '';

            if (items.length === 0) {
                gallery.innerHTML = '<div class="col-12 text-center text-muted py-5"><p>No events found matching your criteria.</p></div>';
                return;
            }

            items.forEach(item => {
                // Escape single quotes for the onclick function call
                const safeTitle = item.title.replace(/'/g, "\\'");
                const safeDescription = item.description.replace(/'/g, "\\'");
                const safeImages = JSON.stringify(item.images).replace(/"/g, "'");

                const cardHtml = `
                    <div class="col">
                        <div class="card h-100 shadow-sm rounded-3 hover-shadow" onclick="openEventModal('${safeTitle}', '${safeDescription}', '${item.type}', '${item.date}', ${safeImages})">
                            <img src="${item.images[0]}" class="card-img-top rounded-top-3" alt="${item.title}" style="height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">${item.title}</h5>
                                <p class="card-text text-secondary">${item.description}</p>
                            </div>
                        </div>
                    </div>
                `;
                gallery.innerHTML += cardHtml;
            });
        }

        /**
         * Opens the modal with the details of the selected event.
         */
        function openEventModal(title, description, type, date, images) {
            // Set the content of the modal
            document.getElementById('eventModalLabel').textContent = title;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('modalEventType').textContent = `Event Type: ${type}`;
            document.getElementById('modalDate').textContent = `Date: ${date}`;

            // Clear previous thumbnails
            const carousel = document.getElementById('modalCarousel');
            carousel.innerHTML = '';

            // Set the main image and populate the carousel
            if (images && images.length > 0) {
                document.getElementById('modalMainImage').src = images[0];
                document.getElementById('modalMainImage').alt = title + ' 1';

                images.forEach((imageSrc, index) => {
                    const imgElement = document.createElement('img');
                    imgElement.src = imageSrc;
                    imgElement.alt = `${title} ${index + 1}`;
                    imgElement.classList.add('img-thumbnail', 'rounded-3');
                    // Add custom width/height and cursor style
                    imgElement.style.width = '100px';
                    imgElement.style.height = '60px';
                    imgElement.style.cursor = 'pointer';
                    imgElement.style.opacity = '0.7';

                    if (index === 0) {
                        imgElement.classList.add('active');
                        imgElement.style.border = '2px solid #ffc107';
                        imgElement.style.opacity = '1';
                    }
                    imgElement.onclick = () => changeMainImage(imageSrc, imgElement);
                    carousel.appendChild(imgElement);
                });
            }

            // Create a new Bootstrap modal instance and show it
            const eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
            eventModal.show();
        }

        /**
         * Changes the main image in the modal when a thumbnail is clicked.
         */
        function changeMainImage(imageSrc, clickedThumb) {
            const mainImage = document.getElementById('modalMainImage');
            mainImage.src = imageSrc;

            // Update active state on thumbnails
            const thumbnails = document.querySelectorAll('#modalCarousel img');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('active');
                thumb.style.border = '';
                thumb.style.opacity = '0.7';
            });

            clickedThumb.classList.add('active');
            clickedThumb.style.border = '2px solid #ffc107';
            clickedThumb.style.opacity = '1';
        }

        document.addEventListener('DOMContentLoaded', () => {
            populateFilters();
            renderGallery(eventData);
        });
    </script>
</body>

</html>