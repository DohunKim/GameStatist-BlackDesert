<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container">
	<h1>검은사막 스택 통계소에 오신것을 환영합니다!</h1>

	<div id="body">
		<p>잠재력 돌파 성공/실패 스택 공유에 그치지 않고, 공유된 데이터를 기반으로 성공 확률, 실패 확률을 지표로 확인할 수 있습니다.</p>

		<p>한명이 할 수 있는 일은 아니고, 오직 많은 게임 유저의 참여로 가능합니다.</p>

		<p>보다 유용한 정보를 만들기 위해 잠재력 돌파 후기를 올려주시고, 타인이 올린 후기를 검증하여 승인해주세요.</p>

		<p>가입 시 필요한 개인정보는 이메일 뿐이며, DB에는 암호화되어 저장됩니다.</p>
	</div>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-thumbs-up"></i>
              </div>
              <div class="mr-5">0개의 새 성공 스택!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/StackLog/success">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
		</div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-tint"></i>
              </div>
              <div class="mr-5">0개의 새 실패 스택!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/StackLog/fail">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-pause"></i>
              </div>
              <div class="mr-5">0개의 승인 대기!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/StackLog/needApproval">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">기여도 랭킹</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#" title="준비중!">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

	  </div>
	  
	<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>-->
</div>