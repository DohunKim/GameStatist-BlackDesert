<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>검은사막 게임 스태티스트 - 로그인</title>
  <!-- Bootstrap core CSS-->
  <link href="/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/sbadmin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form id="LoginFrm" action="/Member/Login" method="POST">
          <div class="form-group" >
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="pwd" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" id="storeId" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="#" onclick="login()">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/Member/register">Register an Account</a>
          <a class="d-block small" href="/Member/forgotPassword">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
  <script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>
      function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return unescape(c.substring(name.length, c.length));
        }
        return "";
    }
    $(document).ready(function () {
        var strCId = getCookie("savedId");
        if (strCId.length > 0) {
            $("#exampleInputEmail1").val(getCookie("savedId"));
            $("input:checkbox[id='storeId']").attr("checked", true);
        }
        $.ajaxSetup({
            cache: false
        });

        <?php if(isset($errMsg) && $errMsg !== null) : ?>
          alert("<?php echo $errMsg?>");
        <?php endif; ?>
        <?php if(isset($alertMsg) && $alertMsg !== null) : ?>
          alert("<?php echo $alertMsg?>");
        <?php endif; ?>
    });

    function login() {
        var idVal = $("#exampleInputEmail1").val();
        var pwdVal = $("#exampleInputPassword1").val();
        if ($("#storeId").is(':checked')) {
            var storeIdVal = true;
            setCookie("savedId", escape(idVal), 30);
        } else {
            var storeIdVal = false;
            setCookie("savedId", "", 30);
        }

        if (idVal == "") {
            alert("이메일을 입력해 주세요.");
            $("#exampleInputEmail1").focus();
            return false;
        } else if (pwdVal == "") {
            alert("비밀번호를 입력해 주세요.")
            $("#exampleInputPassword1").focus();
            return false;
        }
        document.getElementById("LoginFrm").submit();
    }
</script>
</body>

</html>
