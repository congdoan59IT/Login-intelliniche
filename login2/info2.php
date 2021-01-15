<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/btsp/bootstrap.min.css">
    <link rel="stylesheet" href="cont.css">
</head>

<body>
    <div class="header"><img src="./img/logo.png" alt=""></div>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="hidden-after">
                    <img src="./img/bs.png" alt="" id="hinhleft">
                </div>
            </div>
            <div class="col-md-6" id="rps">
                <form action="login.php" method="post" id="khung">

                    <div id="hinh2">
                        <a href="login.php"><i class="fa fa-arrow-left" id="back"></i></a>
                        <div class="d-flex">
                            <small id="step">Step 2 of 2</small>
                            <h3 id="cap"><b>Orther Information</b></h3>
                            <div class="input-icons" id="avata">
                                <input type="radio" name="payment" id="card">
                                <label for="card">
                                    <i class="fa fa-female" id="gioitinh"></i>

                                </label>
                                <input type="radio" name="payment" id="cash">
                                <label for="cash">
                                    <i class="fa fa-male" id="gioitinh"></i>

                                </label>
                            </div>
                            <div class="input-icons">
                                <i class="far fa-calendar-alt" id="date"></i>
                                <input class="input-field" type="text" name="name" id="name" placeholder="Date of birth">
                            </div>
                            <small id="nameE"></small>
                            <div class="input-icons">

                                <input class="input-field" type="text" name="email" id="email" placeholder=" Address">
                            </div>
                            <small id="emailE"></small>
                            <div id="ip2">
                                <button type="submit" class="btn-login" id="buttonsubmit"><a href="#">Done</a></button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="./jquery/jquery.min.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
</body>

</html>