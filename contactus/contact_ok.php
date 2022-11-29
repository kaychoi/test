<?php
	include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; /* db load */	

	date_default_timezone_set('america/los_angeles'); // area 세팅 
	
	$sendMainYn = 0; // 메일전송 여부
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
	$wdate = date('Y-m-d H:i:s');
	echo $name."<Br>";
	echo $email."<Br>";
	echo $phone."<Br>";
	echo $date."<Br>";
	
	
	$query="insert into contact (name,email,comment,wdate) values ('$name','$email','$comment','$wdate')";
	$update = mq($query);
	
	if($update) {

        if($sendMainYn == 1) {
	
            $subject = $name." 님 - 문의 내역입니다.";
        
        // 메일발송 시작
            $nameFrom  = "화신이불";
            $mailFrom = "kay@webdidas.com";
            $nameTo  = $name;
            $mailTo = $email;
            $cc = "ckc1213@hanmail.net";
            $bcc = "appskin@naver.com";
            $subject = $subject;
            $content = "
        <!doctype html>
        <html lang='ko'>
        <head>
        <meta charset='utf-8'>
        <title>div table</title>
        </head>
        <body>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
              <td>
                <table border='1' bordercolor='#eeeeee' cellpadding='10' cellspacing='0' width='100%' style='width:100%;max-width:600px;margin:0 auto;'>
                   <tr>
                    <td colspan='2'>문의내용</td>
                  </tr>
                  <tr>
                    <td>이름</td>
                    <td>$name</td>
                  </tr>
                  <tr>
                    <td>이메일주소</td>
                    <td>$email</td>
                  </tr>
                  <tr>
                    <td>문의내용</td>
                    <td>$comment</td>
                  </tr>
                  <tr>
                    <td>문의날짜</td>
                    <td>$wdate</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        
        </body>
        </html>
        ";    
        
        
            $charset = "UTF-8";
        
        
        
            $nameFrom   = "=?$charset?B?".base64_encode($nameFrom)."?=";
            $nameTo   = "=?$charset?B?".base64_encode($nameTo)."?=";
            $subject = "=?$charset?B?".base64_encode($subject)."?=";
        
            $header  = "Content-Type: text/html; charset=utf-8\r\n";
            $header .= "MIME-Version: 1.0\r\n";
        
            $header .= "Return-Path: <". $mailFrom .">\r\n";
            $header .= "From: ". $nameFrom ." <". $mailFrom .">\r\n";
            $header .= "Reply-To: <". $mailFrom .">\r\n";
            if ($cc)  $header .= "Cc: ". $cc ."\r\n";
            if ($bcc) $header .= "Bcc: ". $bcc ."\r\n";
        
            $result = mail($mailTo, $subject, $content, $header, $mailFrom);
            
            }



		echo "<script>alert('메일로 문의한 내역을 보내드렸습니다.');</script>";
	} else {
		echo "<script>alert('문의작성에 실패하였습니다. 다시 한번 문의해 주세요.');</script>";
	}
	
	
	?>
	
	