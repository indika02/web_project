<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Menu Design By Future Web </title>
    <link rel='stylesheet' href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            background-color: #eff2f5;
            overflow: hidden;
            font-family: 'Open Sans', sans-serif;
        }

        .sideBar {
            position: relative;
            z-index: 20;
            height: 100vh;
            width: 25%;
            color: white;
            background-color: #001629;
            transition: 0.3s ease-in-out;
        }

        .sideBar.widthChange {
            width: 8%;
            text-align: center;
        }

        .sideBar img {
            position: absolute;
            height: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .sideBar div {
            position: relative;
            height: 10vh;
            background-color: #ffffff;
        }

        .sideBar li {
            padding: 20px 20px 20px 10px;
            transition: 0.3s ease-in-out;
        }

        li label.hideMenuList {
            display: none;
        }

        .sideBar li i {
            margin-right: 8px;
        }

        .sideBar li:hover {
            background-color: #0092ff;
        }

        .selected {
            background-color: #0092ff;
        }

        .sideBar span {
            position: absolute;
            color: #ffffff;
            top: 20px;
            right: 20px;
        }

        .sideBar .cross-icon {
            display: none;
            color: #001629;
        }

        .sidebar-header {
            display: flex;
        }

        .content {
            width: 100%;
            height: 100vh;
        }

        header {
            background-color: #ffffff;
            height: 10%;
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #mobile {
            display: none;
        }

        .menu-button {
            position: relative;
            cursor: pointer;
            width: 30px;
            height: 30px;
        }

        .menu-button div:nth-child(1) {
            position: absolute;
            height: 4px;
            border-radius: 20px;
            background-color: #c7c7c7;
            width: 100%;
        }

        .menu-button div:nth-child(2) {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            border-radius: 20px;
            background-color: #c7c7c7;
            width: 80%;
        }

        .menu-button div:nth-child(3) {
            position: absolute;
            height: 4px;
            border-radius: 20px;
            bottom: 0;
            background-color: #c7c7c7;
            width: 100%;
        }

        header img {
            height: 40px;
            border-radius: 100%;
        }

        header h1 {
            color: #0092ff;
        }

        .content-data {
            background-color: #ffffff;
            margin: 2%;
            padding: 20px;
            height: 84%;
            overflow-y: auto;
        }

        .sideBar.showMenu {
            left: 0;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #ccc;
        }

        ::-webkit-scrollbar-thumb {
            background: #0092ff;
        }

        @media(max-width:1200px) {
            .sideBar {
                width: 30%;
            }
        }

        @media(max-width:900px) {
            #desktop {
                display: none;
            }

            #mobile {
                display: block;
            }

            .sideBar {
                position: absolute;
                width: 30%;
                top: 0;
                left: -100%;
            }

            .sideBar .cross-icon {
                display: block;
            }

            .backdrop {
                position: absolute;
                background-color: rgba(0, 0, 0, 0.4);
                top: 0;
                left: -100%;
                height: 100vh;
                width: 100%;
            }

            .backdrop.showBackdrop {
                left: 0;
            }
        }

        @media(max-width:700px) {
            .sideBar {
                width: 40%;
            }
        }

        @media(max-width:400px) {
            .sideBar {
                width: 60%;
            }

            header h1 {
                font-size: 20px;
            }

            #mobile {
                height: 25px;
            }
        }

        @media(max-width:320px) {
            .sideBar {
                width: 80%;
            }
        }
    </style>
</head>

<body>
<div class="menu-wrapper">
    <div class="sidebar-header">
        <div class="sideBar">
            <div><img src=https://drive.google.com/uc?export=view&id=1aWmbSZADIAOqZZ-TZ6IxTcCO72rDiUn1 /></div>
            <ul>
                <li class="selected"><a href="./home.php"><i class="fas fa-home"></i><label>Home</label></a></li>
                <li><i class="fas fa-chart-bar"></i><label>Statistics</label></li>
                <li><i class="fas fa-cogs"></i><label>Services</label></li>
                <li><i class="fas fa-phone-alt"></i><label>Contact</label></li>
                <li><i class="fas fa-user"></i><label>About us</label></li>
                <li><i class="fas fa-cog"></i><label>Setting</label></li>
            </ul> <span class="cross-icon"><i class="fas fa-times"></i></span>
        </div>
        <div class="backdrop"></div>
        <div class="content">
            <header>
                <div class="menu-button" id='desktop'>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="menu-button" id='mobile'>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <h1>Akash Maurya</h1> <img src=https://drive.google.com/uc?export=view&id=1aPr3-KTa66Bxye3IGajBxbBef4XOoaVv />
            </header>
            <div class="content-data"> </div>
        </div>
    </div>
</div>
<script src="../js/index.js"></script>
</body>

</html>