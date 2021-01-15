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
                            <small id="step">Step 1 of 2</small>
                            <h3 id="cap"><b>Your Profile</b></h3>
                            <div class="input-icons" id="avata">
                                <img src="img/doan.JPG" alt="" id="avt">
                            </div>
                            <div class="input-icons">
                                <input class="input-field" type="text" name="name" id="name" placeholder="Fullname">
                                </i>
                            </div>
                            <small id="nameE"></small>
                            <div class="input-icons">

                                <input class="input-field" type="text" name="email" id="email" placeholder=" Email">
                            </div>
                            <small id="emailE"></small>
                            <div id="ip2">
                                <button type="submit" class="btn-login" id="buttonsubmit"><a href="#">Continue</a></button>
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
     <script>
        function isName(name) {
            return /^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/.test(name);
        }

        function isEmail(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        }
        $('#buttonsubmit').click(function() {
            var nameValue = $('input[name=name]').val();
            var emailValue = $('input[name=email]').val();
           

            if (nameValue == '') {
                $("#nameE").text("Please fill in this field");
                return false;
            } else {
                if (!isName(nameValue)) {
                    $("#nameE").text("Enter the first and last name without numbers and special characters ");
                    return false;
                } else {
                    $("#nameE").text("");
                }
            }


            if (emailValue == '') {
                $("#emailE").text("Please fill in this field");
                return false;
            } else {
                if (!isEmail(emailValue)) {
                    $("#emailE").text("Enter email in correct format: Local-Part@Domain Name ");
                    return false;
                } else {
                    $("#emailE").text("");
                }
            }
            if (nameValue != "" && emailValue != "" && phoneValue != "" &&
                addressValue != "" && messageValue != "") {
                var form_data = new FormData();
                form_data.append('name', nameValue);
                form_data.append('email', emailValue);
                $.ajax({
                    url: "php/sendmail.php",
                    type: "post",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(data) {
                        if (data == 1) {
                            swal("Mail send successful");
                        } else {
                            swal(data);
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>