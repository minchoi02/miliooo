<?php
$email = $_REQUEST["email"];
//$number = $_REQUEST["number"];
if($email==null || $email=="" ){
  header( 'Location: https://milopartners3.cafe24.com/firstView.php' );
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>월렛</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RixRak-Sans_Pro%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/.css"/>
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
      
      //let createaccount = walletCreate();
      let balance = await getBalance("0xD909cf1d8129817cB6EBFc7375EfAC3212FC9f6f");
      console.log(balance);
       $("#balance").text(balance);
    });
    

    function IsMobile()
    {
      $mAgent = array("iPhone","iPod","Android","Blackberry","Opera Mini", "Windows ce", "Nokia", "sony" );
      $chkMobile = false;
    
      for($i=0; $i<sizeof($mAgent); $i++){
        if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
          $chkMobile = true;
          $.ajax({
            url: "backend/admin_dbconnection.php",
            data: {
            }
          }).done(function() {
          });
        break;
      }
      }

      if($chkMobile) {
        return true;
      } else {
      return false;
      }
    }

    
</script>
</head>
<body>
<div class="item--PC3">
  <div class="auto-group-blse-8Yw">
    <div class="rectangle-5-N5u">
    </div>
    <div class="rectangle-6-t4F">
    </div>
    <img class="item-39-bUT" src="./assets/-663.png"/>
    <div class="item--J7y">포인트 교환할 때 사용하는 디지털 자산</div>
    <div class="item--tM5">밀로코인</div>
    <div class="rectangle-11-9Xu">
    </div>
    <div class="mlo-266-krw-REX">1MLO = 266 KRW</div>
    <div class="item--hC3">이용내역</div>
    <img class="icon-awesome-chevron-right-1-AbR" src="./assets/icon-awesome-chevron-right-1-VXM.png"/>
    <div class="line-1-Hg3">
    </div>
    <div class="line-2-cTR">
    </div>
    <p id="balance"><p class="milo-84P">MILO</p></p>
    
    <p class="usd-1ts">~ 0 USD</p>
    <div class="rectangle-22-W4w">
    </div>
    <div class="rectangle-23-pLX">
    </div>
    <p class="item--jCb">밀리코인이 필요하다면?</p>
    <img class="vector-zeK" src="./assets/vector-oyy.png"/>
    <div class="ellipse-11-w3m">
    </div>
    <img class="tabwalleton-4PH" src="./assets/tabwalleton-Uwy.png"/>
  </div>
  <div class="auto-group-rbvi-Bio">Wallet</div>
  <div class="auto-group-tffg-3FD">밀로만의 안전한 철통 보안으로, 자산 관리와 혜택을 동시에!</div>
  <div class="item--vZu">월렛 주소 보기</div>
  <div class="item--bvw">보내기</div>
</div>
</body>