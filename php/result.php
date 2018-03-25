<?php
 require_once 'DSN.php';

    $server   = $dsn['server'];              // 実際の接続値に置き換える
    $user     = $dsn['user'];                           // 実際の接続値に置き換える
    $pass     = $dsn['pass'];                           // 実際の接続値に置き換える
    $database = $dsn['database'];                      // 実際の接続値に置き換える

    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $answer = $Q1 . $Q2 . $Q3;
    
    try {
        $dbh = new PDO("mysql:host=" . $server . "; dbname=".$database, $user, $pass );
//        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO socratesresult (Q1, Q2, Q3, Q4, Q5) VALUES (?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1, $Q1, PDO::PARAM_STR);
        $stmt->bindValue(2, $Q2, PDO::PARAM_STR);
        $stmt->bindValue(3, $Q3, PDO::PARAM_STR);
        $stmt->bindValue(4, $Q4, PDO::PARAM_STR);
        $stmt->bindValue(5, $Q5, PDO::PARAM_STR);
        $stmt->execute();
        $dbh = null;
    } catch (Exeption $e) {
        echo "エラー発生：" . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
        die();
    }
 ?>

<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115878361-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115878361-1');
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>最先端セクシー人工痴能エンジン「セクシーソクラテス」result</title>  
<link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<link href="../css/result-php.css" rel="stylesheet">
<link rel="stylesheet" href="http://jaysalvat.github.io/vegas/releases/latest/vegas.min.css">
<link href="../css/result-php-sp.css" rel="stylesheet" media="screen and (max-width:600px)">
<link rel="shortcut icon" type="../image/x-icon" href="favicon.ico">
  <!-- ※基本共通設定 -->
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <title>最先端セクシー人工痴能エンジン「セクシーソクラテス」</title>
  <meta property="og:title" content="最先端セクシー人工痴能エンジン「セクシーソクラテス」" />
  <meta property="og:type" content="website" />
  <meta property="fb:app_id" content="228249867736921" />
  <meta property="og:url" content="http://sexy-socrates.com/index.html" />
  <meta property="og:image" content="http://sexy-socrates.com/images/ogp.png" />
  <meta property="og:site_name" content="最先端セクシー人工痴能エンジン「セクシーソクラテス」" />
  <meta property="og:description" content="ソクラテスの質問に答えて、オススメのセクシー女優を教えてもらおう！" />
  <meta http-equiv="refresh" content="1.5;URL=../result<?php echo $answer; ?>.html">

  <!-- ※ Twitter共通設定 -->
  <meta name="twitter:card" content="summary_large_image" />
  <script src="../js/vendor/jquery-1.10.2.min.js"></script>
  <script src="../js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://jaysalvat.github.io/vegas/releases/latest/vegas.js"></script>
  <script src="../js/result-php.js"></script>    
</head>
<body id="result">
   <!--header始まり
  <header>
    <div class="logo">
      <a href="../index.html"><img src="../images/ss-logo-white.png" alt="Sexy-Socrates" width=30% height=30%></a>
    </div>
  </header>
   header終わり -->
  
  <!-- wrap始まり -->
  <div id="loader-bg">
  <div id="loader">
    <img src="../images/socrates-loading.gif"  width=65% alt="オススメ女優を探しています..." />
  </div>
</div>

  <!-- wrap終わり -->
 
 <!-- footer始まり
  <footer>
    <small>(C)2018 セクシーソクラテス</small>
  </footer>
   footer終わり -->
</body>
</html>