<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/sbadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="/Member/Register" method="POST" id="frmRegister">
          <div class="form-group">
            <label for="exampleInputName">Nickname</label>
            <input class="form-control" name="nickname" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Nickname">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="pwd" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" name="pwdConfirm" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="#" onclick="register();">Register</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/Member/Login">Login Page</a>
          <a class="d-block small" href="/Member/ForgotPassword">Forgot Password?</a>
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
    function register(){
      var idVal = $("#exampleInputEmail1").val();
      var pwdVal = $("#exampleInputPassword1").val();
      var nickVal = $("#exampleInputName").val();
      if (idVal == "") {
          alert("이메일을 입력해 주세요.");
          $("#exampleInputEmail1").focus();
          return false;
      } else if (pwdVal == "") {
          alert("비밀번호를 입력해 주세요.")
          $("#exampleInputPassword1").focus();
          return false;
      }  else if (nickVal == "") {
          alert("닉네임을 입력해 주세요.")
          $("#exampleInputName").focus();
          return false;
      }
      document.getElementById("frmRegister").submit();
    }
  </script>
</body>

</html>
