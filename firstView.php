<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>처음화면_약관동의</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RixRak-Sans_Pro%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="styles/-D1h.css"/>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@3.0.0/dist/web3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@metamask/detect-provider/dist/detect-provider.min.js"></script> 
  <script>
    
    
    $( document ).ready(async function () {

      //init
      $("#emailVeryfy").hide();
      //
      $("#nextVerify").hide();

      
      $('#allagree').change(function() {
        if($(this).is(":checked")) {
          $( "#walletAgree" ).prop( "checked", true );
          $( "#personalAgree" ).prop( "checked", true );
          $( "#MarketingAgree" ).prop( "checked", true );
        }else{
          $( "#walletAgree" ).prop( "checked", false );
          $( "#personalAgree" ).prop( "checked", false );
          $( "#MarketingAgree" ).prop( "checked", false );
        }
      });
       
      $("#sendVerify").on("click",function(){
          var walletAgree = $("#walletAgree").is(":checked");
          var personalAgree = $("#personalAgree").is(":checked");
          var MarketingAgree = $("#MarketingAgree").is(":checked");
          if(walletAgree == true && personalAgree==true && MarketingAgree==true){
            if($("#email").val()==""){
              alert("이메일주소를 입력해주세요");
            }else if($("#email").val()!=""){
              $.ajax({
                    url: "../backend/admin_dbconnection.php",
                    data: 
                    {
                    action: 'random_str_generator',
                    ToEmail:$("#email").val()
                    },
                    type: "POST",
                    }).done(function(data) {
                      $.ajax({
                              url: "verifyEmailSend.php",
                              data: 
                              {
                              VerifyCode:data,
                              ToEmail:$("#email").val()
                              },
                              type: "POST",
                              }).done(function(data1) {
                                
                              });
                    });

                   
                
                
              
              $("#email").hide();
              $(".item--NCP").text("인증번호");
              $("#nextVerify").show();
              $("#sendVerify").hide();
              $("#emailaddress").val($("#email").val());
              $("#emailVeryfy").show();
            }
          }else if(walletAgree == false && personalAgree==true && MarketingAgree==true){
            alert("월렛 이용약관 동의에 체크해주세요");
            $("#walletAgree").focuse();
          }else if(walletAgree == false && personalAgree==false && MarketingAgree==true){
            alert("개인 정보 수집 및 이용 동의에 체크해주세요");
            $("#personalAgree").focuse();
          }else if(walletAgree == false && personalAgree==false && MarketingAgree==false){
            alert("마케팅 정보 알림 동의에 체크해주세요");
            
          }
       });
       $("#WalletInforAgree").on("click",function(){
          location.href="securityPolicy.php";
       });
       $("#personalInforAgree").on("click",function(){
          location.href="WalletPolicy.php";
       });
       $("#nextVerify").on("click",function(){
        $.ajax({
                    url: "../backend/admin_dbconnection.php",
                    data: 
                    {
                    action: 'SeachRendomCode',
                    ToEmail:$("#email").val()
                    },
                    type: "POST",
                    }).done(function(data) {
                      var obj1 = $.parseJSON(data);
                      $.each(obj1, function (key1, value) {
                        console.log(value);
                        if(value.DIFF_DAY==0){
                          location.href="secondView.php";

                        }
                      });
                                      
                    });

       });
    
  });
    
  </script>
</head>
<body>
  <form method="post" id="agreement" action="secondVIew.php">
    <input type="hidden" id="emailaddress">
  </form>
<div class="item--myy">
  <br>
  <p class="item--bi7">밀리코인이 필요하다면?</p>
  <div class="auto-group-reug-4Lo">이메일 주소를 입력해 주세요.</div>
  <input type="text" class="auto-group-reug-4Lo" id="email" placeholder="이메일 주소를 입력해 주세요.">
  <input type="text" class="auto-group-reug-4Lo" id="emailVeryfy" placeholder="인증번호를 입력해주세요.">
  <div class="auto-group-2nqg-gNB">
    <div class="item--ohh">※</div>
    <p class="item--7iP">이메일 계정을 분실할 경우에는, 월렛 및 보유한 자산에 대한 접근이 불가할 수 있습니다.</p>
  </div>
  <div class="auto-group-wjus-9QB">
    <div class="item--sb5">※</div>
    <p class="item--ni3">이메일 계정 분실에 의한 자산 손실에 대한 책임은 사용자에게 있습니다.</p>
  </div>
  <div class="auto-group-qecz-qgK">
    <div class="item--NRM">※</div>
    <p class="item--hTd">이메일 계정 보안에 철저하게 주의해 주시기 바랍니다.</p>
  </div>
  <div class="line-3-kwh">
  </div>
  <div class="auto-group-wmsp-tHD" id="sendVerify">인증하기</div>
  <div class="auto-group-wmsp-tHD" id="nextVerify">다음</div>
  <p class="item--NCP">이메일 계정</p>
  <p class="item--G2s">약관에 동의하고 이메일 주소를 인증하세요.</p>
  <p class="item--Whu">
  이미 가입한 이메일 계정 사용을 원하시는 경우에도, 아래에서 가입 이메일 계정
  <br/>
  을 인증해 주세요.
  </p>
  <div class="auto-group-4zmg-K9Z">
    <p class="item--qNo">가입한 계정이 기억나지 않나요?</p>
    <div class="group-4-L4f">계정 찾기</div>
  </div>
  <div class="auto-group-w3dk-Ccf">
    <div class="auto-group-phnz-tVV">
      <p class="item--osM">모두 동의하기</p>
      <!-- check box -->
      <input type="checkbox" class="icon-circle-check-b4T" id="allagree" name="allagree">
      <!--<img class="icon-circle-check-ijR" src="./assets/icon-circle-check-2G7.png"/>-->
    </div>
    <div class="line-5-3Fu">
    </div>
    <div class="auto-group-yaww-Noy">
      <div class="auto-group-9pnv-hbM">
        <p class="item--ELP">[필수] 월렛 이용약관 동의</p>
        <div class="group-5-XqH" id="WalletInforAgree">보기</div>
        <input type="checkbox" class="icon-circle-check-b4T" id="walletAgree" name="walletAgree" >
      </div>
      <div class="auto-group-oiz6-Wx7">
        <p class="item--4Cw">[필수] 개인 정보 수집 및 이용 동의</p>
        <div class="group-3-kLf" id="personalInforAgree">보기</div>
        <input type="checkbox" class="icon-circle-check-b4T" id="personalAgree" name="personalAgree" >
      </div>
      <div class="auto-group-qsv6-xBq">
        <p class="item--iB1">[선택] 마케팅 정보 알림 동의</p>
        <input type="checkbox" class="icon-circle-check-b4T" id="MarketingAgree" name="personalAgree" >
      </div>
    </div>
  </div>
</div>
</body>