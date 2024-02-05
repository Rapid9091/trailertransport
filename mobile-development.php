<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="csss/main.css" rel="stylesheet" defer>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: "Inter";

        }

        .mobile-header {
            background: url(./images/pxfuel.com\ copy\ 3.webp) center center no-repeat;
            background-size: cover;
            height: 50vh;
            width: 100%;
        }

        .head-content {
            width: 100%;
            height: 100%;
            margin: auto;
            padding-top: 4%;
            padding-left: 10%;
        }

        .head-content h2 {
            font-size: 50px;
            letter-spacing: 3px;
            line-height: 56px;
            text-transform: uppercase;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            filter: drop-shadow(-0.174px 0.985px 2.5px rgba(0, 0, 0, 0.75));

        }

        .head-content h4 {
            -webkit-text-stroke: .5px rgba(0, 0, 0, 0.838);
            font-size: 50px;
            color: #21D0B3;
            font-weight: lighter;
            outline: black 1px;
            letter-spacing: 1.5px;
            margin-bottom: -.5%;
        }

        .head-content {
            font-size: 18px;
            color: white;
            font-weight: lighter;
            letter-spacing: .5px;
        }

        .title {
            display: flex;
            margin-left: 7%;
            gap: 5px;
            margin-top: 20px;
        }

        .title p {
            font-size: 20px;
            color: #012442;
        }

        .title p:hover {
            font-weight: 600;
            color: #011527;
        }

        .mobile-service {
            font-size: 50px;
            line-height: 25px;
            color: #000000;
            font-weight: 600;
            font-family: "Inter";
            margin-left: 6%;
            margin-bottom: 45px;
            margin-top: 45px;
        }


        .mobile-card {
            border: #d8d8d8 .5px solid;
            padding: 5% 5%;
            width: 100%;
            height: 300px;
        }

        .mobile-card-2 {
            padding: 5% 5%;
            width: 100%;
        }

        .row {
            width: 90%;
            margin: auto;
        }

        .mobile-card-icon {
            font-size: 35px;
            color: #8c8c94;
        }

        .mobile-card-h2 {
            font-size: 28px;
            font-weight: 700;
            color: black;

        }

        .mobile-card-p {
            margin-top: 2%;
            color: #999999;
        }

        .seconde-section {
            background-image: url(./images/net\ copy.webp);
            background-size: cover;
            height: auto;
            margin-top: 5%;
            width: 100%;
        }

        .seconde-sec-h2 {
            font-size: 38px;
            color: white;
            font-weight: bold;
            letter-spacing: 1.5px;
            line-height: 45px;
        }

        .seconde-sec-p {
            color: white;
            width: 70%;
        }

        .seconde-sec-content-1 {
            width: 60%;
            margin-top: 9%;
            margin-right: -10%;
        }

        .seconde-sec-border {
            border-width: 2px;
            border-style: solid;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-radius: 10%;
            width: 20%;
            margin-top: 1%;
            margin-bottom: 1%;
        }

        .rect-images-sec-1 {
            display: flex;
            margin-top: -5%;
        }

        .rect-images-sec-2 {
            display: flex;
            margin-top: 5%;
            margin-bottom: -6%;
            margin-left: -6%;
        }

        .rect-img-1 img {
            width: 240px;
            height: 210px;
        }

        .rect-img-2 img {
            width: 240px;
            height: 210px;
        }

        .third-card-div {
            background-color: #14141c;
        }

        .dark-cards {
            /* background-color: #202028; */
        }

        .dark-cards:hover {
            background-color: #202028;
        }

        .mobile-dev-border {
            border: #202028 2px solid;
            padding: 2%;
        }

        .mobile-card-2-h2 {
            font-size: 25px;
            font-weight: 600;
            color: white;
            line-height: 25px;
        }

        .mobile-card-2-p {
            color: white;
            margin-top: 2%;
        }

        .mobile-content-service {
            margin: auto;
            text-align: center;
            color: white;
            padding-top: 70px;
            padding-bottom: 50px;
        }

        .mobile-content-service h2 {
            font-size: 40px;
            font-weight: bold;
        }

        .mobile-content-service span {
            font-size: 30px;
            font-weight: 400;
        }

        .faq-sec-first {
            background: url(./images/Layer\ 93.webp) center center no-repeat;
            background-size: cover;


        }

        .faq-content-div {
            margin: auto;

            text-align: center;
        }

        .faq-content-div h3 {
            color: white;
            font-size: 50px;
            margin-left: -22%;
            margin-bottom: 4%;


        }

        .faq-border {
            border-width: 1.5px;
            border-style: solid;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-radius: 10%;
            width: 30%;
            margin-top: 2%;
            margin-bottom: 2%;
            text-align: center;
            margin-left: 25%;
        }

        .faq-content p {
            color: white;
            font-size: 20px;
            width: 80%;
            margin-top: 5%;
        }

        .faq-main-div {

            background-color: #14141c;
            padding-left: 5%;
            margin-right: -5%;
            padding-right: 5%;
            padding-top: 1%;
            padding-bottom: 2%;
            width: 55%;

        }

        .faq-div {
            width: auto;
            top: 0;
            background-color: #14141c;

        }

        /* Add your own styles here */
        .faq-section {
            max-width: 600px;
            margin: 0 auto;
            color: white;
        }

        .faq-question {
            cursor: pointer;
            background-color: #202028;
            padding: 20px 10px;
            margin: 0px 0;
            position: relative;
            font-size: 20px;
        }

        .faq-answer {
            display: none;
            background-color: #202028;
            padding-left: 2%;
            border-left: 2px solid;
            padding-bottom: 4%;
            padding-right: 2%;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;

        }

        .arrow-btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .arrow-btn {
            transform: translatey(-50%) rotate(90deg);
            font-size: 40px;
        }

        .faq-question.opened .arrow-btn {
            transform: translateY(-50%) rotate(180deg);
        }

        .faq-question.opened {
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-left: 2px solid;
        }

 
     

        .faq-2 h3 {
            margin: auto;
            text-align: center;
            font-size: 50px;
            font-weight: bold;
        }
   /* FAQ START*/
   .section5 {
        padding: 5%;
        background-color: white;
        padding-bottom: 10%;
    }

    .section5 h2 {
        font-size: 40px;
        text-align: center;
        color: rgb(22, 22, 199);
    }
    .row-faq{
        display: flex;
        width: 100%;
        gap: 5%;
        margin-top: 5%;
    }
   .colm-faq{
    width: 50%;
    height: auto;
   }

    .faq-container {
        max-width: 1000px;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .faq {
        margin-bottom: 20px;
        width: 100%;
        border-radius: 15px;
        background-color: #f8f8f8;
        padding: 15px;
     
    }

    .question {
        font-weight: bold;
        color: #1d1d1d;
        font-size: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .question span {
        cursor: pointer;
        font-size: 40px;
        font-size: 30px;
        transition: transform 0.3s ease;
        transform: translatey(-50%) rotate(180deg);
        margin-top: 2%;
    }
    .answer {
        display: none;
        margin-top: 10px;
        font-size: 16px;
        color: #666;
        line-height: 1.4;
        transition: 1s;
    }
    .plus_ {
        display: block !important;
    }
    .rotate_ {
        transform: rotateY(200deg);
        transform: translateY(-50%) rotate(180deg);
    }
    /* FAQ ENDS */

        .main-magic-sec {
            width: auto;
            height: 100%;
            padding: 2% 0;
            background-color: white;

        }

        .magic-main-content {
            background: url(./images/map-2.webp) center center no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
        }

        .content-main {
            width: 100%;
            margin-bottom: -13.5%;
            text-align: center;
            padding-top: 60px;
        }

        .magic-border {
            background: linear-gradient(147deg, rgba(33, 208, 179, 1) 29%, rgba(30, 207, 245, 1) 73%);
            height: 4px;
            width: 13%;
            margin: auto;
            margin-top: 4px;
            margin-bottom: 72px;
        }

        .content-main h3 {
            font-size: 40px;
            font-weight: 700;
            letter-spacing: 1.5px;

        }

        .magic-box-div {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .magic-box {
            position: relative;
            background-color: #0067b7;
            height: 170px;
            width: 260px;
            border: 3px solid #f1f0ee;
            border-radius: 20px;
            z-index: 3;

        }

        .magic-box::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #0067b7;
            z-index: -5;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;

        }

        .magic-box::after {
            content: "";
            background-color: #0067b7;
            border-top: 4.5px solid #f1f0ee;
            border-right: 4.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: -18px;
            top: 70px;
        }

        .magic-box-2 {
            position: relative;
            background-color: #ff9932;
            height: 170px;
            width: 260px;
            border: 3px solid #f1f0ee;
            border-radius: 20px;
            z-index: 2;
        }

        .magic-box-2::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #ff9932;
            z-index: -5;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;
        }

        .magic-box-2::after {
            content: "";
            background-color: #ff9932;
            border-top: 4.5px solid #f1f0ee;
            border-right: 4.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: -18px;
            top: 70px;
        }

        .magic-box-3 {
            position: relative;
            background-color: #ff6e3f;
            height: 170px;
            width: 260px;
            border: 3px solid #f1f0ee;
            border-radius: 20px;


        }

        .magic-box-3::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #ff6e3f;
            z-index: 1;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;
        }

        .magic-box-3::after {
            content: "";
            background-color: #ff6e3f;
            border-top: 4.5px solid #f1f0ee;
            border-right: 4.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 2;
            position: absolute;
            right: -18px;
            top: 70px;
        }

        .magic-box-4 {
            position: relative;
            background-color: #00c0a1;
            height: 170px;
            width: 260px;
            border: 3px solid #f1f0ee;
            border-radius: 20px;

        }

        .magic-box-4::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #00c0a1;
            z-index: 1;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;
        }

        .magic-box-4::after {
            content: "";
            background-color: #00c0a1;
            border-top: 4.5px solid #f1f0ee;
            border-right: 4.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 2;
            position: absolute;
            right: -18px;
            top: 70px;

        }

        .magic-box-5 {
            position: relative;
            background-color: #012f47;
            height: 170px;
            width: 260px;
            border: 3px solid #f1f0ee;
            border-radius: 20px;
        }

        .magic-box-5::before {
            content: "";
            position: absolute;
            bottom: -50px;
            width: 50%;
            height: 25px;
            background: #012f47;
            z-index: 1;
            filter: blur(15px);
            border-radius: 60%;
            left: 24%;
            bottom: 0;
            margin: auto;
            top: 100%;
        }

        .magic-content {
            position: absolute;
            top: 10%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .magic-content h3 {
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin-bottom: -2%;
        }

        .magic-content h3 p {
            font-size: 36;
        }

        .magic-content span {
            color: white;
        }
    </style>
</head>

<body>
    <?php include "./navbar.php"?>
    <div class="container-fluid mobile-header">
        <div class="head-content">
            <h2 style="color:#fff;">MOBILE APP </h2>
            <h4>DEVELOPMENT COMPANY</h4>
            <p>Drive profitable growth with our innovation-led mobile app development<br>
                services that meets business objectives with simplified user experience.</p>
        </div>
    </div>
    <div class="title">
        <p>
            Home
        </p>
        <p>
            / Service /
        </p>
        <p>
            Mobile App Development
        </p>
    </div>
    <div class="container-fluid ">
        <h2 class="mobile-service">Services</h2>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                        <div class="mobile-card-h2">iOS App Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                    <div class="mobile-card-h2">Android App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis
                        tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                    <div class="mobile-card-h2">Flutter App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse corporis
                        necessitatibus asperiores repellat quo maiores consequatur dolore, eaque obcaecati un
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-react"></i></div>
                    <div class="mobile-card-h2">React Native App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                        temporibus velit incidunt illum expedita harum veniam vitae,
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                    <div class="mobile-card-h2">MVP Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis
                        tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, <br> </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                    <div class="mobile-card-h2">Progressive Web App (PWA) Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores
                        facilis, praesentium nihil accusantium ratione doloribus incidunt
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="seconde-section">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 seconde-sec-content-1 ">
                <div class="seconde-sec-h2">INTEGRATING TECHNOLOGIES THAT DELIVER BRAND EXPERIENCES</div>
                <div class="seconde-sec-border"></div>
                <div class="seconde-sec-p">Our app developers work in lockstep with creative thinkers to
                    deliver tech-ahead solutions that enhance brand interaction
                    and improve omnichannel ROI</div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 seconde-sec-content-2 ">
                <div class="row">
                    <div class="rect-images-sec-1">
                        <div class="rect-img-1">
                            <img src="./images/Layer 78 (1).webp">
                        </div>
                        <div class="rect-img-2">
                            <img src="./images/Layer 76 (1).webp">
                        </div>
                    </div>
                    <div class="rect-images-sec-2">
                        <div class="rect-img-1">
                            <img src="./images/Layer 75 (1).webp">
                        </div>
                        <div class="rect-img-2">
                            <img src="./images/Layer 77 (1).webp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-magic-sec">
        <div class="magic-main-content">
            <div class="content-main">
                <h3>How to Make The Magic Happen</h3>
                <br>
                <div class="magic-border"></div>

            </div>

            <div class="magic-box-div">

                <div class="magic-box">
                    <div class="magic-content">
                        <h3>STEP 1</h3><span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                    </div>

                </div>
                <div class="magic-box-2">
                    <div class="magic-content">
                        <h3>STEP 2</h3><span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                    </div>
                </div>
                <div class="magic-box-3">
                    <div class="magic-content">
                        <h3>STEP 3</h3><span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                    </div>
                </div>
                <div class="magic-box-4">
                    <div class="magic-content">
                        <h3>STEP 4</h3><span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                    </div>
                </div>
                <div class="magic-box-5">
                    <div class="magic-content">
                        <h3>STEP 5</h3><span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <div class="container-fluid  third-card-div">
        <div class="mobile-content-service">
            <h2>Why Macwiq <span>is Your Best Choice<br>
                    For</span> Mobile Development?</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Qualified App Developers</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Client-centric Approach</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Best UX/UI Experts</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3 mb-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Dedicated Teams</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Agile Development Process</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Quality & Security</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "./swipper-mob.php" ?>

    <div class="faq-sec-first">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6 faq-content-div">
                <div class="faq-content">
                    <h3>Mobile Apps Can Be<br>
                        Game-Changing </h3>
                    <div class="faq-border"></div>
                    <p>Our industry-focused app helps your
                        business to become successful and gain
                        access to varied benefits.</p>
                </div>

            </div>
            <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6 faq-main-div">


                <div class="faq-div">
                    <div class="faq-section mt-3">
                        <div class="faq-question">
                            Effective Customer Connect
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps eliminate website loading time which directly influences the
                            bounce rate and work as the most suitable point of contact with end-users.</div>

                        <div class="faq-question mt-3">
                            Raise Conversion Rates
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile Apps are the most convenient and effective way to grab users’
                            attention. It can yield up to 2x conversion rate as compared to other marketing platforms.
                        </div>
                        <div class="faq-question mt-3">
                            Brilliant Marketing Channel
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps are equipped with personalized features, custom engagement
                            activities, and content, which promote brand recognition.</div>
                        <div class="faq-question mt-3">
                            Round-the-Clock Accessibility
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Apps are easier to access for the user on their respective device over a
                            website and provide personalized messages and notifications. Moreover, the PWA apps can even
                            be used offline.</div>
                        <div class="faq-question mt-3">
                            Maximum User Engagement
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps are highly effective in brand building, user engagement, and
                            offer multiple benefits because of its easy accessibility for users on varied devices and
                            browsers.</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
     <section class="section5 faq-2">
        <h3>Frequently Asked Questions</h3>


        <div class="row-faq">
            <div class="colm-faq">


                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
            </div>
            <div class="colm-faq">
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                    
                    
                </div>
                <div class="faq">
                    <div class="question" id="plus_">What's the average delivery time for car shipments across state
                        lines?
                        <span><b><span>&#8593;</span></b></span>
                    </div>
                    <div class="answer" id="answer3">
                        <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route
                            can
                            impact delivery times. Contact us for a more precise estimate.</p>
                    </div>
                    
                    
                </div>


            </div>
        </div>
    </section>


    <!---form-->
    <?php include "./form.php"?>
    <!---form-->
    <div class="container-fluid main-footer">
        <div class=" text-center text-white location">
            <h3>
                Our Locations
            </h3>
        </div>
        <div class="main-img-sec ">
            <div class="imagebox">
                <div class="first-img-box text-center">
                    <div class="mian-image-div">


                        <div class="country-images ">
                            <img src="./images/hq-india-svg.webp">
                        </div>
                    </div>
                    <div class="heading-main">
                        HQ INDIA

                    </div>
                    <div class="paragraph-main">

                        H-106, Sector-63, Noida-201301
                    </div>

                </div>
                <div class="first-img-box text-center">
                    <div class="mian-image-div">


                        <div class="country-images">
                            <img src="./images/hq-usa-svg.webp">


                        </div>
                    </div>
                    <div class="heading-main">
                        US

                    </div>
                    <div class="paragraph-main">
                        123, 345, Lorim Ipsum,
                        Lorim Ipsum
                    </div>

                </div>
                <div class="first-img-box text-center">
                    <div class="mian-image-div">


                        <div class="country-images">
                            <img src="./images/hq-canada copy.webp">


                        </div>
                    </div>
                    <div class="heading-main">
                        CANADA
                    </div>
                    <div class="paragraph-main">
                        123, 345, Lorim Ipsum,
                        Lorim Ipsum
                    </div>

                </div>


            </div>

            <div class="lower-box ">

                <div class="lower-icon">
                    <h3>
                        Helping you overcome your technology challenges</h3>
                </div>
                <div class="footer-btn">
                    <button type="button" class="btn ">Discover More</button>

                </div>


            </div>
        </div>
        <div class="footer-row-div">
            <div class="first-footer-box">
                <img src="./images/Vector Smart Object copy 5.webp" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>
                <ul class="footer-icons">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

            </div>
            <div class="seconde-footer-box">
                <h6>Quick Links</h6>
                <ul class="footer-icons-2">
                    <li>About Us</li>
                    <li>Meet our team</li>
                    <li>Blogs</li>
                    <li>Our projects</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="third-footer-box">
                <h6>Contact</h6>
                <ul class="footer-icons-2">
                    <li>+1 (800) 220-0275</li>
                    <li>contact@macwiq.com</li>
                    <li>30 N Gould ST STE R Sherridan,
                        WY 82801</li>

                </ul>
            </div>
            <div class="fourth-footer-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79384.58173465701!2d-0.15654167745757946!3d51.55414974348658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1704214149017!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>


    </div>
    <div class="last-footer ">
        <p>Copyright &copy; 2021 MacWiQ All rights</p>
        <p>Desgined by PK Solution.com</p>

    </div>



    <script>
        // JavaScript code to handle the FAQ interactions
        document.addEventListener("DOMContentLoaded", function () {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    // Close all other answers before opening the clicked one
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('opened');
                            q.nextElementSibling.style.display = 'none';
                        }
                    });

                    // Toggle the display of the clicked question's answer
                    const answer = question.nextElementSibling;
                    answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';

                    // Toggle the opened class for arrow rotation
                    question.classList.toggle('opened');
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const faqQuestions = document.querySelectorAll('.faq-question-2');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    // Close all other answers before opening the clicked one
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('opened');
                            q.nextElementSibling.style.display = 'none';
                        }
                    });

                    // Toggle the display of the clicked question's answer
                    const answer = question.nextElementSibling;
                    answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';

                    // Toggle the opened class for arrow rotation
                    question.classList.toggle('opened');
                });
            });
        });


        a = document.querySelectorAll('#plus_')
        for (i = 0; i < a.length; i++) {
            a[i].addEventListener("click", function (e) {
                e.preventDefault();
                this.parentElement.children[0].children[0].classList.toggle('rotate_');
                this.parentElement.children[1].classList.toggle("plus_");
            })
        }
    </script>
</body>

</html>