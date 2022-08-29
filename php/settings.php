<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Poppins:wght@300&family=Raleway&family=Rubik&display=swap');

        body {
            font-family: Poppins,sans-serif;
        }
        .container{
            background-color: #080c33;
        }
        h1{
            margin: 15px 0 25px;
            text-align: center;
            font-size: 30px;
            color: #1c2286;
        }
        input{
            color:#022255 !important;
            border: none;
        }
        input[type=email]:focus,
        input[type=password]:focus,
        input[type=text]:focus{
            box-shadow: 0 0 5px rgb(26, 35, 185);

        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-horizontal {
            width: 320px;
            background-color: #ffffff;
            padding: 25px 38px;
            border-radius: 12px;
            box-shadow: 2px 2px 15px rgba(0,0,0,0.5);
        }
        .control-label {
            text-align: left !important;
            padding-bottom: 4px;
        }
        .progress {
            height: 3px !important;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .show-pass{
            position: absolute;
            top:5%;
            right: 8%;
        }
        .progress-bar-danger {
            background-color: #e90f10;
        }
        .progress-bar-warning{
            background-color: #ffad00;
        }
        .progress-bar-success{
            background-color: #02b502;
        }
        .login-btn{
            width: 180px !important;
            background-image: linear-gradient(to right, #1623ea, #1a23b9) !important;
            font-size: 18px;
            color: #fff;
            margin: 0 auto 5px;
            padding: 8px 0;
            float: right;
        }
        .login-btn:hover{

            color: #fff !important;
        }
        .cancel-btn{
            width: 180px !important;
            background-color: red;
            font-size: 18px;
            color: #fff;
            margin: 0 auto 5px;
            padding: 8px 0;
            float: left;
        }
        .cancel-btn:hover{

            color: #fff !important;
        }
        .fa-eye{
            color: #022255;
            cursor: pointer;
        }
        .ex-account p a{
            color: #1c2286;
            text-decoration: underline;
        }
        .fa-circle{
            font-size: 6px;
        }
        .fa-check{
            color: #02b502;
        }
    </style>
</head>

<body>
<div class="container">
    <form class="form-horizontal" id="validateForm" style="width: 700px">
        <h1>Reset Your Password</h1>
        <fieldset>
            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="textinput">
                    Enter Your Email:
                </label>
                <div class="col-md-12">
                    <input id="email" name="textinput"
                           type="email" autocomplete="off"
                           placeholder="Enter your email address"
                           class="form-control input-md">
                </div>
            </div>
            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="passwordinput">
                    Password
                </label>
                <div class="col-md-12">
                    <input id="password" class="form-control input-md"
                           name="password" type="password"
                           placeholder="Enter your password" >
                    <span class="show-pass" onclick="toggle()">
                            <i class="far fa-eye" style="padding-top:9px" onclick="myFunction(this)"></i>
                        </span>
                    <div id="popover-password">
                        <p><span id="result"></span></p>
                        <div class="progress">
                            <div id="password-strength"
                                 class="progress-bar"
                                 role="progressbar"
                                 aria-valuenow="40"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 style="width:0%">
                            </div>
                        </div>
                        <ul class="list-unstyled" style="display:none;">
                            <li class="">
                                    <span class="low-upper-case">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Lowercase &amp; Uppercase
                                    </span>
                            </li>
                            <li class="">
                                    <span class="one-number">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Number (0-9)
                                    </span>
                            </li>
                            <li class="">
                                    <span class="one-special-char">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Special Character (!@#$%^&*)
                                    </span>
                            </li>
                            <li class="">
                                    <span class="eight-character">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Atleast 8 Character
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Button -->

            <div class="form-group">
                <a href="#" class="btn login-btn btn-block">
                    Save
                </a>
                <a href="./admin.php" class="btn cancel-btn btn-block">
                    Cancel
                </a>
            </div>

        </fieldset>
    </form>
</div>
<script>
    let state = false;
    let password = document.getElementById("password");
    let passwordStrength = document.getElementById("password-strength");
    let lowUpperCase = document.querySelector(".low-upper-case i");
    let number = document.querySelector(".one-number i");
    let specialChar = document.querySelector(".one-special-char i");
    let eightChar = document.querySelector(".eight-character i");

    password.addEventListener("keyup", function(){
        let pass = document.getElementById("password").value;
        checkStrength(pass);
    });

    function toggle(){
        if(state){
            document.getElementById("password").setAttribute("type","password");
            state = false;
        }else{
            document.getElementById("password").setAttribute("type","text")
            state = true;
        }
    }

    function myFunction(show){
        show.classList.toggle("fa-eye-slash");
    }

    function checkStrength(password) {
        let strength = 0;

        //If password contains both lower and uppercase characters
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            lowUpperCase.classList.remove('fa-circle');
            lowUpperCase.classList.add('fa-check');
        } else {
            lowUpperCase.classList.add('fa-circle');
            lowUpperCase.classList.remove('fa-check');
        }
        //If it has numbers and characters
        if (password.match(/([0-9])/)) {
            strength += 1;
            number.classList.remove('fa-circle');
            number.classList.add('fa-check');
        } else {
            number.classList.add('fa-circle');
            number.classList.remove('fa-check');
        }
        //If it has one special character
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            strength += 1;
            specialChar.classList.remove('fa-circle');
            specialChar.classList.add('fa-check');
        } else {
            specialChar.classList.add('fa-circle');
            specialChar.classList.remove('fa-check');
        }
        //If password is greater than 7
        if (password.length > 7) {
            strength += 1;
            eightChar.classList.remove('fa-circle');
            eightChar.classList.add('fa-check');
        } else {
            eightChar.classList.add('fa-circle');
            eightChar.classList.remove('fa-check');
        }

        // If value is less than 2
        if (strength < 2) {
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.add('progress-bar-danger');
            passwordStrength.style = 'width: 10%';
        } else if (strength == 3) {
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-warning');
            passwordStrength.style = 'width: 60%';
        } else if (strength == 4) {
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-success');
            passwordStrength.style = 'width: 100%';
        }
    }
</script>
</body>