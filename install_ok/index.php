<?php

set_time_limit(300);
$r_errors = array();

if(phpversion() < 7) $r_errors[] = 'Phiên bản PHP yêu cầu là PHIÊN BẢN PHP> = 7. !';
if(!function_exists('curl_version')) $r_errors[] = 'Phần mở rộng cUrl bắt buộc. !';
if(!ini_get('allow_url_fopen')) $r_errors[] = 'Bật fopen URL. !';
if(!function_exists('mysqli_connect')) $r_errors[] = 'Required nd_MySqli Extension. !';
if(!is_writable('../includes/config_sample.php')) $r_errors[] = 'App/config_sample.php file is not writable. !';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $filename = 'db.sql';

  $mysql_host = trim($_POST['host']);
  $mysql_username = trim($_POST['user']);
  $mysql_password = trim($_POST['pass']);
  $mysql_database = trim($_POST['name']);


  $conn = @mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

  if($conn){
      mysqli_select_db($conn, $mysql_database);

  $templine = '';
  $lines = file($filename);

  foreach ($lines as $line){
  if (substr($line, 0, 2) == '--' || $line == '') continue;
    $templine .= $line;
    if (substr(trim($line), -1, 1) == ';') {
        mysqli_query($conn, $templine) or die('Lỗi khi thực hiện truy vấn \'<strong>' .  mysqli_error($conn) . '\': ' . 1 . '<br /><br />');
        $templine = '';
    }
  }
  generate_config($_POST);
}else{
  $r_errors[] = 'Chi tiết cơ sở dữ liệu không hợp lệ!';
}



}


 ?>














<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./../theme/assets/css/tabler.min.css" >
    <title>GD Player Installation</title>
  </head>
  <body class="antialiased">

    <div class="page">
      <div class="content">
        <div class="container-xl">

            <div class="row justify-content-center">
              <div class="col-md-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 id="classic-inputs" class="text-center mb-4"> <u>Cài đặt trình phát GD</u> </h2>

                      <?php if ($_SERVER['REQUEST_METHOD'] != 'POST' || !empty($r_errors)): ?>
                        <?php if (!empty($r_errors)): ?>
                          <?php foreach ($r_errors as $error): ?>
                            <div class="alert alert-danger">
                              <?=$error?>
                            </div>
                          <?php endforeach; ?>
                        <?php else: ?>
                        <div class="alert alert-success">
                          Tập lệnh đã sẵn sàng để cài đặt :)
                        </div>


                        <form class="" action="<?=$_SERVER['REQUEST_URI']?>" method="post">

                      
                          

                          <div class="mb-3">
                              <label class="form-label">DB HOST <sup class="text-danger">cần thiết</sup> </label>
                              <input type="text" class="form-control" name="host" placeholder="Nhập máy chủ cơ sở dữ liệu của bạn" required>
                          </div>

                          <div class="mb-3">
                              <label class="form-label">DB USER <sup class="text-danger">cần thiết</sup></label>
                              <input type="text" class="form-control" name="user" placeholder="Nhập tên người dùng cơ sở dữ liệu của bạn" cần thiết>
                          </div>

                          <div class="mb-3">
                              <label class="form-label">DB PASS <sup class="text-danger">cần thiết</sup></label>
                              <input type="text" class="form-control" name="pass" placeholder="Nhập mật khẩu cơ sở dữ liệu của bạn" >
                          </div>

                          <div class="mb-3">
                              <label class="form-label">DB NAME <sup class="text-danger">cần thiết</sup></label>
                              <input type="text" class="form-control" name="name" placeholder="Nhập tên databse của bạn" cần thiết>
                          </div>

                          <input type="submit" class="btn btn-primary btn-block mt-3" name="submit" value="Cài đặt">


                        </form>

                        <?php endif; ?>
                      <?php else: ?>

                        <div class="alert alert-success">
                          <b>Xin chúc mừng! </b> Tập lệnh đã được cài đặt thành công.
                        </div>
                        <div class="alert alert-danger">
                          ĐỪNG QUÊN XÓA THƯ MỤC <b> CÀI ĐẶT </b>
                        </div>

                        <a href="/login" class="text-center mt-3 mb-0"> <b>Đăng nhập tại đây</b> </p>


                      <?php endif; ?>

                      <p class="text-center mt-3 mb-0" >Phát triển bởi <a href="https://www.codester.com/codyseller/" target="_blank">@CodySeller</a> | 2021 </p>

                    </div>
                  </div>
              </div>
            </div>



        </div>

    </div>


  </body>
</html>




<?php

function generate_config($array){
	if(!empty($array)){
		if(file_exists('../includes/config_sample.php')){
			$file = file_get_contents('../includes/config_sample.php');
	    $file = str_replace("RHOST",trim($array["host"]),$file);
	    $file = str_replace("RDB",trim($array["name"]),$file);
	    $file = str_replace("RUSER",trim($array["user"]),$file);
	    $file = str_replace("RPASS",trim($array["pass"]),$file);
	    $fh = fopen('../includes/config_sample.php', 'w') or die("Không thể mở config_sample.php.  Đảm bảo rằng nó có thể ghi được.");
	    fwrite($fh, $file);
	    fclose($fh);
	    rename("../includes/config_sample.php", "../includes/config.php");
		}else{
      die('config_example.php tập tin không tồn tại !');
    }
	}
}



function getHost() {
    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    } else {
        $host = $_SERVER['SERVER_NAME'];
    }
    return trim($host);
}







 ?>
