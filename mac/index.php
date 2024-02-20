<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./mobile.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./images/logo.svg" alt="">
            </div>
            <div class="main-menu">
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Services</li>
                    <li>Industries</li>
                    <li>Portfolio</li>
                    <li>Blogs</li>
                </ul>
            </div>
            <div class="search-contact">
                <div class="search-comtainer">
                    <img src="./images/search.svg" alt="">
                    <button class="navbar-contact-us-button">Contact Us</button>
                </div>
            </div>
        </nav>
        <div class="header-image">
            <img src="./images/net-copy.svg" class="net-design" width="100%" height="100%" alt="">
            <div class="header-image-col center-the-header-text">
                <div class="header-text">
                    <h1><span>Custom software</span> <br>
                        Development Services</h1>
                    <p>Drive profitable growth with our innovation-led mobile app development <br>
                        services that meets business objectives with simplified user experience.</p>
                </div>
            </div>
            <div class="header-image-col">
                <div class="header-background"></div>
                <img src="./images/header-person.png" width="100%" height="100%" alt="">
            </div>
        </div>
    </header>
    <section class="service">
        <p>Home / Services / <b>Custom Software Development</b></p>
        <h2>Services</h2>
        <div class="services-box-grid">
            <div class="service-list">
                <div class="service-list-inner-box">

                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Legacy System<br>Modernization</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box active-service-box">
                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Custom<br>Software</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Enterprise Software</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Custom CRM Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Software Product<br>Development</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
            <div class="service-list">
                <div class="service-list-inner-box">
                    <div class="service-icon-box">
                        <img src="./images/custom-software.svg" alt="">
                    </div>
                    <strong>Data Analytics &<br>Information</strong>
                    <p>We offer tailored software solutions, automating processes, scaling products, providing real-time analytics, and agile innovation for your business.</p>
                </div>
            </div>
        </div>
    </section>
    <div style="position: fixed;top:5%;height:5%" id="width"></div>

    <section class="section3">
        <img src="./images/section3.svg" class="section3-back" width="100%" height="100%" alt="">
        <div class="section3-w">
            <div class="section3-img"><img src="./images/section3_.svg" width="100%" height="100%" alt=""></div>

            <div class="section3-txt">
                <h2>Our <br>
                    Custom Software <br>
                    Development Process</h2>
                <p>Building intuitive user interface for custom solutions by combining
                    your ideas and our end-to-end front-end development expertise</p>
            </div>
        </div>
    </section>

    <div class="section4">
        <h2>Macwiq: Your Custom <br>
            Software Development Partner </h2>
        <div class="section4-flex">
            <div class="section4-cards">
                <div class="section4-icon"></div>
                <strong>Engineering <br>Excellence</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, odio. consectetur adipisicing elit. Neque, odio.</p>
            </div>
            <div class="section4-cards">
                <div class="section4-icon"></div>
                <strong>Futur-ready <br>Solutions</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, odio. consectetur adipisicing elit. Neque, odio.</p>
            </div>
            <div class="section4-cards">
                <div class="section4-icon"></div>
                <strong>Timely Marketing</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, odio. consectetur adipisicing elit. Neque, odio.</p>
            </div>
            <div class="section4-cards">
                <div class="section4-icon"></div>
                <strong>Smart Solutions</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, odio. consectetur adipisicing elit. Neque, odio.</p>
            </div>
        </div>
    </div>

    <script>
        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;

        document.getElementById('width').innerText = windowWidth + ',' + windowHeight;

        // Output the window size
    </script>
</body>

</html>