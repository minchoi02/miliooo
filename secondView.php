<?php
$email = $_REQUEST["emailaddress"];
//$number = $_REQUEST["number"];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>처음화면_접근권한안내</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RixRak-Sans_Pro%3A700"/>
  <link rel="stylesheet" href="./styles/-LG7.css"/>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@3.0.0/dist/web3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@metamask/detect-provider/dist/detect-provider.min.js"></script> 
  <script type="module">
    import {walletCreate, getBalance, transfer} from "/js/contract.js";
    window.walletCreate = walletCreate
    window.getBalance = getBalance
    window.transfer = transfer

    $( document ).ready(async function () {
      //walletCreate();
      console.log(walletCreate(0));
      console.log(walletCreate());
      $("#next").on("click",function(){
         $("#email").val('<?php echo $email?>');
         

      });
    });
  </script>
</head>
<body>
  <form id="form" action="post" action="index.php">
  <input type="hideen" id="email">
  </form>
<div class="item--2zT">
  <br>
  <p class="milo--DZ9">MILO 시작 전 안내드립니다</p>
  <p class="milo--iF1">원활한 MILO 사용을 위하여 아래 권한을 허용해주세요.</p>
  <p class="item--b3u">필수 접근 권한</p>
  <div class="auto-group-za7t-tHu">
    <div class="rectangle-29-nu5">
    </div>
    <div class="rectangle-48-uTu">
    </div>
    <p class="item--22j">앱 오류 확인 및 사용자 개선</p>
    <p class="item--Ghm">기기 및 앱 기록</p>
    <div class="frame-NVu">
    </div>
    <img class="group-23-WMD" src="./assets/group-23.png"/>
  </div>
  <div class="auto-group-urzc-3M9">
    <p class="item--kmM">필수 접근 권한</p>
    <div class="frame-rZV">
    </div>
  </div>
  <div class="auto-group-kn2n-ojd">
    <div class="auto-group-bpvg-8X1">
      <img class="auto-group-nyrg-SGo" src="./assets/auto-group-nyrg.png"/>
      <div class="auto-group-vw7c-mps">
        <p class="item--iVD">알림</p>
        <p class="item--FV9">광고 및 공지 알림</p>
      </div>
    </div>
    <div class="auto-group-xpwg-mTV">
      <img class="auto-group-ciyx-hc3" src="./assets/auto-group-ciyx.png"/>
      <div class="auto-group-765q-qCT">
        <p class="item--BGK">바이오 인증</p>
        <p class="item--W3h">로그인 시 바이오 정보(지문, 얼굴 등)사용</p>
      </div>
    </div>
    <div class="auto-group-sc8s-Atw">
      <img class="auto-group-pju4-VwD" src="./assets/auto-group-pju4.png"/>
      <div class="auto-group-bjhg-DsD">
        <p class="item--A1m">카메라</p>
        <p class="qr--58j">QR 코드 스캔 시 사용</p>
      </div>
    </div>
  </div>
  <div class="auto-group-ia7c-Z3u" id="next">확인</div>
  <p class="item--QqD">밀리코인이 필요하다면?</p>
</div>
</body>