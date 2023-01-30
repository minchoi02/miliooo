<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>밀로코인 보내기</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RixRak-Sans_Pro%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="./styles/-ySJ.css"/>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script type="module">
    import {walletCreate, getBalance, transfer} from "/js/contract.js";
    window.walletCreate = walletCreate
    window.getBalance = getBalance
    window.transfer = transfer
  </script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@3.0.0/dist/web3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@metamask/detect-provider/dist/detect-provider.min.js"></script> 
</head>
<body>
<div class="item--NTt">
  <img class="item-52-th8" src="./assets/-DNz.png"/>
  <p class="item--Rh4">밀로코인이 필요하다면?</p>
  <div class="auto-group-wsen-uML">
    <img class="icon-awesome-chevron-right-1-Q3C" src="./assets/icon-awesome-chevron-right-1-NZQ.png" onClick="javascript:history.back();"/>
    <p class="item--JeN">밀로코인 보내기</p>
  </div>
  <div class="auto-group-hgjc-btN">
    <p class="item--KZU">나의 밀로코인</p>
    <p class="item--1SJ">주소록에서 가져오기    &gt;</p>
    <div class="auto-group-2frs-VcN">
      <input type="text" class="item-0-PBx" id="value" placeholder="0"/>
      <p class="milo-KLW">MILO</p>
    </div>
    <div class="auto-group-7mjz-EyG">
      <input type="text" class="auto-group-crls-kwc" id="value" placeholder="보낼 주소를 입력해 주세요."/>
      <div class="auto-group-6myc-CYi">OR</div>
    </div>
    <div class="auto-group-hvuc-Um8">
      <input type="text" class="auto-group-kpan-p4J" id="value" placeholder="보낼 수량을 입력해 주세요."/>
      <div class="auto-group-yrru-YuQ" id="allBalance">전액</div>
    </div>
    <div class="auto-group-z9sg-2pa">
      <div class="item--wge">※</div>
      <p class="item--FhL">
      밀로코인은 밀로 월렛 주소 또는 밀로코인이 상장된 거래소의 밀로 입금 주소 외 폴리곤 혹은 타
      <br/>
      지갑 주소로 송금 시 코인이 유실되며, 전송 후에는 취소 및 복구가 불가합니다.
      </p>
    </div>
    <div class="auto-group-1vas-ASv">
      <div class="item--Vk6">※</div>
      <p class="item--cpi">거래소 전송 시에는 각 거래소의 최소 입금 수량을 확인하세요.</p>
    </div>
    <div class="line-3-Uc2">
    </div>
    <div class="auto-group-nd1k-cTL" id="sendMilo">보내기</div>
  </div>
  <div class="item--562">월렛 주소 보기</div>
  <div class="item--khx">보내기</div>
</div>
</body>