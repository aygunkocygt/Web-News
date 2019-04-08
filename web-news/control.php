<?php 
 session_start();
 ob_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>

    
    <title><?php echo "Tasarımcı Web Kontrol Paneli"; ?></title>
    <style>
        .Login { background: url(kontrol/images/bg-login.gif) top left repeat; padding-top: 10%; }
    </style>
</head>
<body class="Login">

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tasarımcı Web</h3>
        </div>
        <div class="panel-body">
<?php 
    require_once 'kontrol/functions/data.function.php';
    require_once 'kontrol/functions/tools.function.php';
    Connect();
    global $Hata;
  
    if(isset($_POST["formGonderBtn"])){
        $userTxt = @mysql_real_escape_string(post("userTxt"));
        $sifreTxt = md5(@mysql_real_escape_string(post("sifreTxt")));
        if($userTxt=="" || $sifreTxt==""){
            echo '<div class="alert alert-warning">Boş Alan Bırakmayınız..</div>';
        }
        else{
            $Sor = Sor("SELECT username, password FROM admin WHERE username='{$userTxt}' AND password='{$sifreTxt}' ");
            if(Say($Sor)>0){
                $Yaz = Yaz($Sor);
                $userS = sYap(array('user' => $Yaz["username"]));
                $passS = sYap(array('pass' => $Yaz["password"]));
                $oturum = sYap(array('oturum' => md5($Yaz["password"].$_SERVER["REMOTE_ADDR"])));
                if($userS==true AND $passS==true AND $oturum==true){
                    echo '<div class="alert alert-success">Giriş Başarılı</div>';
                    go("kontrol/index.php", 2);
                }
                else{
                     echo '<div class="alert alert-danger">Oturum Açılamadı !</div>';
                }
            }
            else{
                echo '<div class="alert alert-danger">Hatalı Bilgiler !</div>';
            }
             
        }
      
    }
    
    
?>
            
            
            <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="userTxt">Kullanıcı</label>
                    <div class="col-sm-9">
                        <input type="text" id="userTxt" name="userTxt" class="form-control" placeholder="kullanıcı adı.." />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="sifreTxt">Şifre</label>
                    <div class="col-sm-9">
                        <input type="password" id="sifreTxt" name="sifreTxt" class="form-control" placeholder="şifre.." />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" id="formGonderBtn" name="formGonderBtn" class="btn btn-default pull-right">Giriş</>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>