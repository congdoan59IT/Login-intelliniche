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
                            <h2 id="cap"><b>Vetify Code</b></h2>
                            <div id="cap5">
                                <p><b>We sent you a code vetify your phone number</b></p>
                            </div>
                            <div id="code-member1">
                                <small>Sent to 098 675 4321</small>
                            </div>
                            <div class="input-icons2">
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                <input id="mc" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                            </div>
                            <div class="form-check">
                                <div id="forgot1">
                                    <a href="#"><small>Resend</small></a>
                                </div>
                            </div>
                            <div id="ip5">
                                <button type="submit" class="btn-login" id="buttonsubmit"><a href="#">Confirm</a></button>
                            </div>
                            <div class="form-check">
                                <div id="create">
                                    <button type="submit" class="btn-create"><a href="#">Login</a></button>
                                </div>
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
    $(function() {
  'use strict';

  var body = $('body');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', 'input', goToNextInput);
  body.on('keydown', 'input', onKeyDown);
  body.on('click', 'input', onFocus);

})
    </script>
</body>

</html>