<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>검은사막 스태티스트</title>
  <!-- Bootstrap core CSS-->
  <link href="/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="/sbadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="/sbadmin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">검은사막</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="HOME">
          <a class="nav-link" href="/">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">HOME</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="통계 보기">
          <a class="nav-link" href="/stacklog/statistics">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">통계 보기</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="성공">
          <a class="nav-link" href="/StackLog/success">
            <i class="fa fa-fw fa-thumbs-up"></i>
            <span class="nav-link-text">성공</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="실패">
          <a class="nav-link" href="/StackLog/fail">
            <i class="fa fa-fw fa-tint"></i>
            <span class="nav-link-text">실패</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="승인대기중">
          <a class="nav-link" href="/StackLog/needApproval">
            <i class="fa fa-fw fa-pause"></i>
            <span class="nav-link-text">승인대기중</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <?php if($nickname === null) : ?>
          <a class="nav-link" href="/Member/Login">
            <i class="fa fa-fw fa-sign-in"></i>Login</a>
          <?php else : ?>
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">