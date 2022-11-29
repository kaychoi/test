<?php

  $ch = curl_init(); // 리소스 초기화

  $url = "https://connect.squareupsandbox.com/v2/terminals/checkouts";

  // 옵션 설정
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer EAAAEOzsM1ePcOSvmoyJAreV1EG_0CsAt_tLwvk-DLXSYYgBkQgFPlsT8LEoyati'
  ));

  // post 형태로 데이터를 전송할 경우
  $postdata = array(
    "name"=>"value"
  );
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));

  $output = curl_exec($ch); // 데이터 요청 후 수신

  echo $output;

  curl_close($ch);  // 리소스 해제

?>

<?php

//   $ch = curl_init(); // 리소스 초기화

//   $url = "https://hiseon.me";

//   // 옵션 설정
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//   $output = curl_exec($ch); // 데이터 요청 후 수신

//   echo $output;

//   curl_close($ch);  // 리소스 해제

?>