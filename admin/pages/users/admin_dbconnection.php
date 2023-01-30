<?php

//error 메세지 출력하기
 error_reporting( E_ALL );
 ini_set( "display_errors", 1 );
 
 $servername = "localhost";
 //$servername = "27.35.114.73"; 
 $username = "milopartners3";
 $password = "qwer1324@!";
 $dbname = "milopartners3";

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
	if($_REQUEST['action'] != "social_account_linking"){
		$action = $_REQUEST['action'];
		$getData = $action(empty($var)); 
	}
}


//회원정보조회
function SeachMember(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$mainNetCode = $_REQUEST["mainNetCode"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }
    $emparray = array();
    $sql = "SELECT * FROM milopartners3.milo_member";


    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
                $emparray[] = $row;
        }
    }

  echo json_encode($emparray);

  mysqli_close($conn);
}

//회원정보등록
function RegisterMember(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$mainNetCode = $_REQUEST["mainNetCode"];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $emparray = array();
  $sql = "select count(*) as count from milopartners3.milo_member where email = '".$_REQUEST["email"]."'";
  $count = 0;
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if($result){
	  while($row = mysqli_fetch_array($result)) {
		  $count = $row["count"];
	  }
  }
 
  if($count == 0) {
	$cnt = 0;
	$emparray = array();
	$sql = "select max(item_sort) +1 as cnt from milopartners3.milo_member";
	$count = 0;
	
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		while($row = mysqli_fetch_array($result)) {
			$cnt = $row["cnt"];
		}
	}

	$sql = "INSERT INTO milopartners3.milo_member (
			 public_address
			,securit_address
			,email
			,password		 
			,nick_name		 
			,level
			,reg_date
			)
			VALUES (
			'".$_REQUEST["public_address"]."'
			,'".$_REQUEST["securit_address"]."'
			,'".$_REQUEST["email"]."'		
			,'".$_REQUEST["password"]."'
			,'".$_REQUEST["nick_name"]."'		
			,'".$_REQUEST["level"]."'
			,NOW()				
			)";		

	if ($conn->query($sql) === TRUE) {
		echo "add sucessfully";
	} else {
		echo $conn->error;
	}
  } else {
	echo "이미 가입한 아이디입니다.";	
  }
  $conn->close();
}

//회원정보 수정
function ModifyMember(){
	global $servername;
	global $username;
	global $password;
	global $dbname;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "update milopartners3.milo_member set 
	     email='".$_REQUEST["email"]."'"."		
		,start_date='".$_REQUEST["start_date"]."'"."
		,end_date='".$_REQUEST["end_date"]."'"." where email='".$_REQUEST["email"]."'";

		if ($conn->query($sql) === TRUE) {
			echo $sql;
		} else {
			echo $conn->error;
		}
	

	$conn->close();
}


//전송내역조회
function SeachTransactionLists(){
	global $servername;
	global $username;
	global $password;
	global $dbname;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }
    $emparray = array();

	$sql = "SELECT * FROM milopartners3.transaction_Histories order by public_key desc";
	
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
            $emparray[] = $row;
        }
    }
//	echo $sql;
  	echo json_encode($emparray);
  	mysqli_close($conn);
}

// Login
function Login(){
	global $servername;
	global $username;
	global $password;
	global $dbname;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }

    $account = $_REQUEST["email"];
	$password = $_REQUEST["password"];
	$emparray = array();

	$sql = "SELECT * FROM milopartners3.milo_member WHERE email='".$account."' and password='".$password."'";
	
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
            $emparray[] = $row;
        }
    }
//	echo $sql;
  	echo json_encode($emparray);
  	mysqli_close($conn);
}

//Settup 정보조회
function SeachSettup(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$mainNetCode = $_REQUEST["mainNetCode"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }
    $emparray = array();
    $sql = "SELECT * FROM milopartners3.setting";


    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
                $emparray[] = $row;
        }
    }

  echo json_encode($emparray);

  mysqli_close($conn);
}
//Settup 정보조회
function SeachSettupInfor(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$mainNetCode = $_REQUEST["mainNetCode"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }
	$email = $_REQUEST['email'];
    $emparray = array();
    $sql = "SELECT * FROM milopartners3.setting where email='".$email."'";


    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
                $emparray[] = $row;
        }
    }

  echo json_encode($emparray);

  mysqli_close($conn);
}
////Settup 입력
function InsertSetup(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }



  $sql = "INSERT INTO milopartners3.setting (
			 email
			,start_date
			,end_date
			)
			VALUES (
			'".$_REQUEST["email"]."'
			,'".$_REQUEST["start_date"]."'
			,'".$_REQUEST["end_date"]."'
			)";		

	if ($conn->query($sql) === TRUE) {
		echo "add sucessfully";
	} else {
		echo $conn->error;
	}
  
  $conn->close();
}

//Settup 정보수정
function ModifySetup(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "update milopartners3.setting set 
	     email='".$_REQUEST["email"]."'"."		
		,start_date='".$_REQUEST["start_date"]."'"."
		,end_date='".$_REQUEST["end_date"]."'"." where email='".$_REQUEST["email"]."'";

		if ($conn->query($sql) === TRUE) {
			echo $sql;
		} else {
			echo $conn->error;
		}
	

	$conn->close();
}
//게시판목록
function SeachBorderLists(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

//	$mainNetCode = $_REQUEST["mainNetCode"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Connected fail";
    }
	//$email = $_REQUEST['email'];
    $emparray = array();
    $sql = "SELECT * FROM milopartners3.border";


    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($result){
        while($row = mysqli_fetch_array($result)) {
                $emparray[] = $row;
        }
    }

  echo json_encode($emparray);

  mysqli_close($conn);
}

//게시판등록
function InsertBorder(){
	global $servername;
	global $username;
	global $password;
	global $dbname;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }



  $sql = "INSERT INTO milopartners3.border (
			 title
			,content
			,write_date
			)
			VALUES (
			'".$_REQUEST["title"]."'
			,'".$_REQUEST["content"]."'
			,NOW()
			)";		

	if ($conn->query($sql) === TRUE) {
		echo "add sucessfully";
	} else {
		echo $conn->error;
	}
  
  $conn->close();
}

//게시판수정
function ModifyBorder(){
	global $servername;
	global $username;
	global $password;
	global $dbname;
//	$mainNetCode = $_REQUEST["mainNetCode"];	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "update milopartners3.border set 
	title='".$_REQUEST["title"]."'"."			
	,content='".$_REQUEST["content"]."'"." where idx='".$_REQUEST["idx"]."'";

	if ($conn->query($sql) === TRUE) {
		echo $sql;
	} else {
		echo $conn->error;
	}

	$conn->close();
}

//게시판삭제
function DeleteBorder(){
	global $servername;
	global $username;
	global $password;
	global $dbname;
//	$mainNetCode = $_REQUEST["mainNetCode"];
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$value1s = $_REQUEST['idx'];
	foreach($value1s as $value) {

		$sql = "delete from milopartners3.border where idx=".$value;
	  
		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		} else {
			echo  $conn->error;
		}
	}
}


?>
