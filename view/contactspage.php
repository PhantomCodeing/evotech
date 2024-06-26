<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

global $userInfo;
if (isset($_SESSION["uid"])) {
    ReLogInUser();
}

// Check if $userInfo is set, and then set the username
if (isset($userInfo)) {
    $username = $userInfo->getUsername();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EvoTech</title>
    <link rel="stylesheet" href="/view/css/contactpage.css">
</head>

<body>
    <?php include __DIR__ . '/nav.php' ?>

    <section class="bg-success p-5  py-4">

    </section>
    <header>
        <h1>Contact EvoTech</h1>
    </header>

    <section class="contact-container">
        <div class="contact-form">
            <h2>Contact Form</h2>
            <form id="contactForm" action="mailto:info@evotech.com" method="get" enctype="text/plain">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="description">Description of issue:</label>
                <textarea id="description" name="description" rows="4" required></textarea>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <button type="submit">Submit</button>
                <script src="/view/js/contacspage.js"></script>
            </form>

        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email: info@evotech.com</p>
            <p>Phone: 1234567891011</p>
            <p>Address: Aston St, Birmingham B4 7ET.</p>
        </div>
    </section>


    <section id="customer-reviews" class="p-5 bg-light">
        <div class="container">
            <h2 class="text-center text-dark">Customer Reviews</h2>
            <p class="lead text-center text-dark mb-5">
                See what our customers have to say about us 
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light h-100"> 
                        <div class="card-body text-center">
                            <img src="view/images/ginge.jpg" alt="Customer 1" width="150px" class="rounded-circle mb-3" alt=""/>
                            <p class="card-text">Evotech goes beyond selling; their customer support is stellar. Quick responses, 
                                knowledgeable staff – they make tech troubleshooting a breeze, 
                                setting a gold standard for customer care. </p>
                            <p>Date: 01/01/2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light h-100"> 
                        <div class="card-body text-center">
                            <img src="view/images/mrbean.jpg" width="150px" height="150px" class="rounded-circle mb-3" alt=""/>
                            <p class="card-text">Responsive team and excellent 
                                communication. We are satisfied with their work</p>
                            <p>Date: 15/02/2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light h-100">
                        <div class="card-body text-center">
                            <img src="view/images/danny.webp" width="150px" class="rounded-circle mb-3" alt=""/>
                            <p class="card-text">EvoTech went above and beyond our expectations. 
                                Will definitely will buy there products again.</p>
                            <p>Date: 13/06/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    <section class="customer-reviews-section">
        <h2>Customer Reviews</h2>
        <div class="row">
            <div class="col-sm">
                <div class="customer-reviews">
                    <div class="review-box">
                        <img src="view/images/ginge.jpg" alt="Customer 1">
                        <p>"Evotech goes beyond selling; their customer support is stellar. Quick responses, knowledgeable staff – they make tech troubleshooting a breeze, setting a gold standard for customer care."</p>
                        <p>Date: 01/01/2023</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="customer-reviews">
                    <div class="review-box">
                        <img src="view/images/mrbean.jpg" alt="Customer 2">
                        <p>Responsive team and excellent communication. We are satisfied with their work.</p>
                        <p>Date: 15/02/2023</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="customer-reviews">
                    <div class="review-box">
                        <img src="view/images/danny.webp" alt="Customer 3">
                        <p>"EvoTech went above and beyond our expectations. Will definitely will buy there products again."</p>
                        <p>Date: 13/06/2023</p>
                    </div>
                </div>
            </div>
        </div>
        </section>
        !-->

    <footer>
    <?php include __DIR__ . '/footer.php'?>

</footer>
</body>

</html>