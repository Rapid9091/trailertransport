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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: "Inter";

        }

        .mobile-header {
            background: url(./images/1.\ Mobile\ App\ Development\ Company\ \(1\).webp) center center no-repeat;
            background-size: cover;
            width: 100%;
        }

        .head-content {
            width: 100%;
            height: 100%;
            margin: auto;
            padding-top: 150px;
            padding-left: 150px;
            padding-bottom: 150px;
        }

        .head-content h2 {
            font-size: 50px;
            letter-spacing: 3px;
            line-height: 50px;
            text-transform: uppercase;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            filter: drop-shadow(-0.174px 0.985px 2.5px rgba(0, 0, 0, 0.75));
            margin-bottom: 0;
        }

        .head-content h4 {
            filter: drop-shadow(-0.174px 0.985px 2.5px rgba(0, 0, 0, 0.75));
            font-size: 50px;
            color: #21D0B3;
            font-weight: lighter;
            outline: black 1px;
            letter-spacing: 1.5px;
            margin-bottom: -.5%;
            font-family: "Inter";
        }

        .head-content p {
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 33px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
        }


        .title {
            display: flex;
            gap: 5px;
            margin-top: 20px;
            margin-left: 300px
        }


        .title p {
            font-size: 20px;
            color: #012442;
        }

        .title p:hover {
            font-weight: 600;
            color: #011527;
        }

        .cards-div-mobile {
            width: 100%;
            display: flex;
            height: auto;
            margin-bottom: 30px;
            gap: 25px;
        }

        .cards-div-mobile-2 {
            width: 100%;
            display: flex;
            height: auto;
            margin-bottom: 30px;
            gap: 25px;

        }

        .mobile-service {
            font-size: 50px;
            line-height: 25px;
            color: #000000;
            font-weight: 600;
            font-family: "Inter";
            margin-left: 290px;
            margin-bottom: 45px;
            margin-top: 45px;
        }

        .mobile-card-icon {
            font-size: 40px;
            color: #8c8c94;
        }

        .mobile-card-h2 {
            font-size: 28px;
            letter-spacing: 0px;
            line-height: 36px;
            color: black;
            font-weight: 700;
            font-family: "Inter";

        }

        .mobile-card-p {
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 25px;
            color: black;
            font-weight: 300;
            font-family: "Inter";
            padding-top: 8px;
        }

        .seconde-section {
            background-image: url(./images/pxfuel.com\(2\)\ copy\ 2.webp);
            background-size: cover;
            height: auto;
            margin-top: 5%;
            margin-bottom: 10%;
            width: 100%;
            z-index: 1;
        }


        .seconde-sec-content-2 {
            height: auto;
            width: 45%;
        }

        .seconde-sec-h2 {
            font-size: 45px;
            letter-spacing: 3px;
            line-height: 56px;
            text-transform: uppercase;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            filter: drop-shadow(-0.174px 0.985px 2.5px rgba(0, 0, 0, 0.75));
        }

        .seconde-sec-p {
            font-size: 20px;
            letter-spacing: 0px;
            line-height: 35px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
            width: 90%;
        }

        .row-our-service {
            display: flex;
            width: 100%;
            height: auto;
        }

        .seconde-sec-content-1 {
            width: 55%;
            height: auto;
        }

        .content-div-p {

            width: 100%;
            height: auto;
            margin: 5% 5% 5% 10%;

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
            position: relative;
            width: 100%;
            height: 100%;
        }

        .parallelogram {
            width: 100%;
            height: 400px;
            margin-top: -5%;
            margin-bottom: -5%;
            clip-path: polygon(16% 0%, 90% 0%, 75% 100%, 0% 100%);
            z-index: 1;



        }

        .rect-images-sec-1::after {
            content: "";
            position: absolute;
            width: 35px;
            height: 35px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            position: absolute;
            background-color: #002933;
            bottom: 0;
            margin-bottom: -20px;
            z-index: -1;
            margin-left: -2%;
            transform: rotate(60deg);
        }

        .rect-images-sec-2::before {
            content: "";
            position: absolute;
            width: 35px;
            height: 35px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            position: absolute;
            background-color: #002933;
            top: 0;
            right: 0;
            margin-right: 8%;
            margin-top: -19px;
            transform: rotate(130deg);
            z-index: -5;
        }

        .parallelogram img {
            height: 100%;
            width: 100%;

        }

        .parallelogram-2 {
            width: 400px;
            height: 200px;
            clip-path: polygon(10% 0, 92% 0, 81% 100%, 0 100%);
            background-color: #00c0a1;
            z-index: -3;

        }

        .third-card-div {
            background-color: #14141c;
            padding-bottom: 5%;
        }

        .dark-cards:hover {
            background-color: #202028;
        }

        .mobile-dev-border {
            border: #202028 2px solid;
            width: 483px;
            height: auto;
            margin: auto;
        }

        .mobile-card-2 {
            padding: 25px 15px 45px 25px;
            margin: 5px;
        }

        .mobile-card-2-h2 {
            font-size: 26px;
            letter-spacing: 0px;
            line-height: 36px;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";

        }

        .mobile-card-2-p {
            font-size: 18px;
            letter-spacing: 0px;
            line-height: 25px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
            padding-top: 8px;
        }

        .mobile-content-service {
            margin: auto;
            text-align: center;
            color: white;
            padding-top: 70px;
            padding-bottom: 50px;
        }

        .mobile-content-service h2 {
            font-size: 50px;
            letter-spacing: 1px;
            line-height: 55px;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            text-align: center;
        }

        .mobile-content-service span {
            font-size: 35px;
            font-weight: 400;
            padding: 5px;

        }

        .faq-sec-first {
            background: url(./images/1.\ Mobile\ App\ Development\ Company\ \(3\).webp) center center no-repeat;
            background-size: cover;
            width: 100%;
            height: auto;
            margin-top: 130px;
            margin-bottom: 120px;
            padding: 50PX 0;
        }

        .row {
            width: 90%;
        }

        .faq-content-div {
            margin: auto;
            text-align: center;
            width: 50%;
        }

        .faq-content-div h3 {
            font-size: 45px;
            letter-spacing: 1px;
            line-height: 65px;
            color: #ffffff;
            font-weight: 700;
            font-family: "Inter";
            text-align: center;
            padding-bottom: 12px;


        }

        .faq-border {
            border-width: 1.5px;
            border-style: solid;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-radius: 10%;
            width: 30%;
            margin-top: 2%;
            margin-bottom: 2%;
            margin: auto;
            justify-content: center;

        }

        .faq-content p {
            font-size: 21px;
            letter-spacing: 0px;
            line-height: 35px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
            text-align: center;
            padding-top: 5%;
            width: 65%;
            margin: auto;
        }

        .faq-main-div-c {
            background-image: url(./images/template.webp);
            background-repeat: no-repeat;
            background-position: center;
            margin-top: -6%;
            margin-bottom: -6%;
            padding: 2.5% 60PX;
            margin-left: 0;
            width: 50%;
            height: auto;
            z-index: 2;
        }

        .faq-div {
            width: auto;
            top: 0;

        }

        /* Add your own styles here */
        .faq-section {
            width: 100%;
            margin: 0;
            color: white;
        }

        .faq-question {
            cursor: pointer;
            background-color: #202028;
            padding: 22px 32px;
            margin: 0px 0;
            position: relative;
            font-size: 23px;
        }

        .faq-answer {
            display: none;
            background-color: #202028;
            padding-left: 32PX;
            border-left: 2px solid;
            padding-bottom: 4%;
            padding-right: 2%;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
        }

        .arrow-btn {
            position: absolute;
            top: 50%;
            right: 30px;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
            color: #4d4d52;
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
        .faq-2 h3 {
            margin: auto;
            text-align: center;
            font-size: 50px;
            font-weight: bold;
        }

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
        .row-faq-1 {
            display: flex;
            width: 100%;
          
            gap: 5%;

        }
        .row-faq {
            display: flex;
            width: 100%;
            margin-top: 5%;
            gap: 5%;

        }

        .colm-faq {
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
            font-weight: 500;
            color: black;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .question span {
            cursor: pointer;
            font-size: 40px;
            font-size: 25px;
            transition: transform 0.3s ease;
            transform: translatey(-50%) rotate(180deg);
            margin-top: 2%;
            font-weight: 400;
        }

        .answer {
            display: none;
            margin-top: 10px;
            font-size: 16px;
            color: #5e5d5d;
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
            background: url(./images/map-2.webp) center center no-repeat;
            background-size: cover;
           
            padding-top: 80px;
            width: 100%;
            height: 80vh;
        }

        .magic-main-content {
            width: 100%;
            height: 100%;
        }

        .content-main {
            width: 100%;
            text-align: center;
            margin-bottom: -13.5%;

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
            height: 215px;
            width: 300px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;
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
            border-top: 3.5px solid #f1f0ee;
            border-right: 3.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: -18px;
            top: 90px;
        }

        .magic-box-2 {
            position: relative;
            background-color: #ff9932;
            height: 215px;
            width: 300px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;
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
            border-top: 3.5px solid #f1f0ee;
            border-right: 3.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: -18px;
            top: 90px;
        }

        .magic-box-3 {
            position: relative;
            background-color: #ff6e3f;
            height: 215px;
            width: 300px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;


        }

        .the-card-2 {
            width: 490px;
            height: auto;
            margin: auto;
            border: #e8e8e8 2px solid;


        }

        .mobile-card {

            padding: 25px 15px 45px 25px;
            margin: 5px;
        }

        .the-card-2 .mobile-card:hover {
            background: linear-gradient(147deg, rgba(33, 208, 179, 1) 38%, rgba(29, 206, 250, 1) 72%);
        }

        .the-card-2:hover .mobile-card-icon {
            color: #8dffff;
        }

        .the-card-2:hover .mobile-card-h2 {
            color: white;
        }

        .the-card-2:hover .mobile-card-p {
            color: white;
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
            border-top: 3.5px solid #f1f0ee;
            border-right: 3.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 2;
            position: absolute;
            right: -18px;
            top: 90px;
        }

        .magic-box-4 {
            position: relative;
            background-color: #00c0a1;
            height: 215px;
            width: 300px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;

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
            border-top: 3.5px solid #f1f0ee;
            border-right: 3.5px solid #F1F0EE;
            width: 30px;
            height: 30px;
            transform: rotate(45deg);
            z-index: 2;
            position: absolute;
            right: -18px;
            top: 90px;

        }

        .magic-box-5 {
            position: relative;
            background-color: #012f47;
            height: 215px;
            width: 300px;
            border: 2px solid #f1f0ee;
            border-radius: 31px;
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
            margin-bottom: 5%;
        }
        .magic-content span {
            font-size: 17px;
            letter-spacing: 0px;
            line-height: 15px;
            color: #ffffff;
            font-weight: 300;
            font-family: "Inter";
            text-align: center;
          
            z-index: 2;
        }


        .tools {
            background-color: #001819;
            height: auto;
            width: 100%;
            padding: 15px 0 80px 0;
        }

        .container-tools {
            background: url(./images/web\ Ui.png) center center no-repeat;
        }

        .tools .container h2 {
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 2% 0;
        }

        .first-sec {
            margin-bottom: 2%;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .main-div-tool {
            width: 200px;
            height: auto;
            background-color: #102C2d;
            align-items: center;
            display: flex;

            margin-right: 2%;
        }

        .main-div-tool p {
            margin-top: 8%;
            text-align: center;
            font-size: 20px;
            color: white;
            margin-left: 18px;

        }

        .tools-sec {
            max-width: fit-content;
            height: auto;
        }

        .tool-parts {
            width: 180px;
            height: 50px;
            gap: 10px;
            margin: auto;
            background-color: #1f2525;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px 15px;
            margin: 0;
        }

        .tool-parts img {
            width: 25px;
            height: 25px;
        }

        .tool-parts p {
            font-size: 15px;
            margin-top: 10%;
            color: white;

        }

        .tools-border {
            border-bottom: #2c2c33 2.5px solid;
            margin-top: -1%;
            margin-bottom: 1%;
        }

        @media (max-width: 1440px) {

            .head-content {
                padding-left: 100px;
                padding-top: 100px;
                padding-bottom: 100px;
            }
            .main-magic-sec {
           
            height:100vh;
        }

            .title {
                margin-left: 60px;

            }

            .mobile-service {
                margin-left: 45px;
            }

            .seconde-sec-p {
                width: 90%;
            }
            .magic-content span {
                font-size: 16px;
            }
        }
    </style>
</head>

<body style="background-color: #ffffff;">
    <?php include "./navbar.php"?>
    <div class="container-fluid mobile-header ">
        <div class="head-content">
            <h2 style="color:#fff;">MOBILE APP </h2>
            <h4>DEVELOPMENT COMPANY</h4>
            <p>Drive profitable growth with our innovation-led mobile app development<br>
                services that meets business objectives with simplified user experience.</p>
        </div>
    </div>
    <div class="main-card-conatiner">
        <div class="title">
            <p>
                Home
            </p>
            <p>
                / Service /
            </p>
            <p style="font-size:22px; font-weight: 700; color: #012442;">
                Mobile App Development
            </p>
        </div>
        <div class="container-fluid" style="background-color: #ffffff;">
            <h2 class="mobile-service">Services</h2>
            <div class="cards-div-mobile container">
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



                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                        <div class="mobile-card-h2">Android App Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                            debitis
                            tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, </div>
                    </div>
                </div>


                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                        <div class="mobile-card-h2">Flutter App Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards-div-mobile container">
                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-react"></i></div>
                        <div class="mobile-card-h2">React Native App Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae,
                        </div>
                    </div>

                </div>

                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                        <div class="mobile-card-h2">MVP Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                            debitis
                            tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, <br> </div>
                    </div>
                </div>

                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                        <div class="mobile-card-h2">Progressive Web App (PWA) Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <div class="seconde-section">
        <div class="row-our-service">
            <div class=" seconde-sec-content-1">
                <div class="content-div-p">
                    <div class="seconde-sec-h2">Technologies That<br>
                        Deliver Brand<br>
                        Experiences</div>
                    <div class="seconde-sec-border"></div>
                    <div class="seconde-sec-p">Building intuitive user interface for custom solutions by combining
                        your ideas and our end-to-end front-end development expertise.</div>
                </div>

            </div>

            <div class="seconde-sec-content-2 ">


                <div class="rect-images-sec-1 rect-images-sec-2">

                    <div class="parallelogram">
                        <img src="./images/vr.webp">
                    </div>
                </div>


            </div>
        </div>
    </div> -->
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
                        <h3>STEP 1</h3>
                        <span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>

                </div>
                <div class="magic-box-2">
                    <div class="magic-content">
                        <h3>STEP 2</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box-3">
                    <div class="magic-content">
                        <h3>STEP 3</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box-4">
                    <div class="magic-content">
                        <h3>STEP 4</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>
                <div class="magic-box-5">
                    <div class="magic-content">
                        <h3>STEP 5</h3><span>
                            High Level Scoping Proposal
                            PM & Governance Feature
                            Mapping Discovery Workshops Kick Off
                            Meeting.
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <div class="container-fluid  third-card-div">
        <div class="mobile-content-service">
            <h2>Why Macwiq<span>Is Your Best Choice<br>
                    For</span> Mobile Development?</h2>
        </div>
        <div class="cards-div-mobile-2 container">

            <div class="mobile-dev-border">
                <div class="mobile-card-2 dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Qualified App Developers</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>


            <div class="mobile-dev-border">
                <div class="mobile-card-2  dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Client-centric Approach</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>


            <div class="mobile-dev-border">
                <div class="mobile-card-2 dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Best UX/UI Experts</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-div-mobile-2 container">
            <div class="mobile-dev-border">
                <div class="mobile-card-2 dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Dedicated Teams</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>


            <div class="mobile-dev-border">
                <div class="mobile-card-2 dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Agile Development Process</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>
            <div class="mobile-dev-border">
                <div class="mobile-card-2 dark-cards">
                    <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div class="mobile-card-2-h2">Quality & Security</div>
                    <div class="mobile-card-2-p">We have a team of highly qualified and experienced IT experts who are
                        committed to providing the best quality of work and solution delivery.
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include "./swipper-mob.php" ?>

    <div class="faq-sec-first">
        <div class="row-faq-1">
            <div class="faq-content-div">
                <div class="faq-content">
                    <h3>Mobile Apps Can <br>Be
                        Game-Changing </h3>
                    <div class="faq-border"></div>
                    <p>A website solution is highly efficient and holds a lot
                        to offer to your businesses, whether you are a small
                        business or a huge organization. .</p>
                </div>

            </div>
            <div class=" faq-main-div-c">


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
    <section class="tools">
        <div class="container container-tools">
            <h2>Tools & Technologies We Prefer</h2>
            <div class="tools-sec">

                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Mobile</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/swift.webp">
                        <p>Swift</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/c-sharp (1).webp">
                        <p>C#</p>
                    </div>

                    <div class="tool-parts">
                        <img src="./images/logo/apple_objectivec-icon-svg.webp">
                        <p>Objective c</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Android</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/java (1).png">
                        <p>.Net</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/java (1).png">
                        <p>Java</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/python.webp">
                        <p>Python</p>
                    </div>

                    <div class="tool-parts">
                        <img src="./images/logo/nodejs-icon-svg.webp">
                        <p>Node JS</p>
                    </div>

                </div>

                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Database</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/mysql.webp">
                        <p>My Sql</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/5968342.webp">
                        <p>Postgre Sql</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/oracle-svg.webp">
                        <p>Oracle</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/Apache_Feather_Logo.svg.webp">
                        <p>Apache</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/eyes.webp">
                        <p>Cassandra</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/mongodb-icon-1-svg (1).webp">
                        <p>Mongo DB</p>
                    </div>
                </div>
                <div class="tools-border"></div>
                <div class="first-sec">

                    <div class="main-div-tool">
                        <p>Quality Assurance</p>
                    </div>


                    <div class="tool-parts">
                        <img src="./images/logo/selenium-icon-2048x1986-3fr2ikf8.webp">
                        <p>Selenium</p>
                    </div>
                    <div class="tool-parts">
                        <p>JMeter</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/HPE_LoadRunner_logo.webp">
                        <p>LoadRunner</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Devops</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/docker.webp">
                        <p>Docker</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/kubernetes-icon.webp">
                        <p>Kubernetes </p>
                    </div>
                    <div class="tool-parts">

                        <img src="./images/logo/icon-svg.webp">
                        <p>Ansible</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/1200px-Chef_logo.svg.webp">
                        <p>Chef</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/puppet (1).webp" style="width: 50px; height: auto; margin: 0;">
                        <p>Puppet</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>

                </div>
                <div class="tools-border"></div>
                <div class="first-sec">
                    <div class="main-div-tool">
                        <p>Cloud Services</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/png-transparent-aws-vector-brand-logos-icon (1).webp">
                        <p>AWS</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/azure.webp">
                        <p> Microsoft Azure</p>
                    </div>
                    <div class="tool-parts">
                        <img src="./images/logo/google-cloud-icon-2048x1646-7admxejz.webp">
                        <p>Google cloud</p>
                    </div>

                </div>
            </div>
        </div>

    </section>

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