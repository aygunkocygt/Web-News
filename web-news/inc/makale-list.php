
    <?php require_once 'page-title.php'; ?>
    
    <div class="container MarginTop_0">
        <div class="col-lg-12 BgWhiteGri Padding_10 MarginBottom_10">
            
<?php
    $MakaleList = Sor("SELECT KatID, AltKatID, Title, Url, Description, Img, Tarih FROM makaleler_tr WHERE AltKatID='".$KatID."' ORDER BY ID ASC");
    if(Say($MakaleList)>0){
        while ($MakaleListYaz = Yaz($MakaleList)){
            $MakaleImg = $MakaleListYaz["Img"]=="" ? "makale-resmi-yok.jpg" : $MakaleListYaz["Img"];            
            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">';
            echo '<div class="panel panel-default BorderHover">';
            echo '<div class="panel-heading MakaleListTitle">
                        <h3 class="panel-title">
                            <a href="'.$SiteUrl.'index.php?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'">'.$MakaleListYaz["Title"].'</a>';
            
            echo '<span class="hidden-xs pull-right MakaleEkleyenBilgi"><a href="" title="">12.05.2014</a> tarihinde <a href="" title="">aygün</a> ekledi</span>';
                        
                    echo '</h3>
                    </div>';
            echo '<div class="panel-body z1 FontSize_13">
                        <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs pull-left PaddingLeft_0">

                        <a class="img-thumbnail MakaleListImg" href="'.$SiteUrl.'index.php?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'">
                            <img class="img-responsive" src="'.$SiteUrl.'images/Makaleler/'.$MakaleImg.'" 
                                alt="'.$MakaleListYaz["Description"].'" title="'.$MakaleListYaz["Title"].'" 
                                    longdesc="'.$SiteUrl.'index.php?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" />
                        </a>
                    </div>
                        '.$MakaleListYaz["Description"].'
                    </div>';
            echo '<div class="panel-footer">
                        <ol class="hidden-xs col-lg-9 col-md-9 col-sm-8 col-xs-8 breadcrumb Margin_0 Padding_0">';
                    $MakaleKatYaz = Yaz(Sor("SELECT Title, Url FROM makale_kat_tr WHERE ID='".$MakaleListYaz["KatID"]."' "));
                    echo '<li><a href="'.$SiteUrl.'index.php?Gelen=makaleKat&Kat='.$MakaleKatYaz["Url"].'" title="'.$MakaleKatYaz["Title"].'">'.$MakaleKatYaz["Title"].'</a></li>';
                    $MakaleAltKatSor = Sor("SELECT Title, Url FROM makale_kat_tr WHERE ID='".$MakaleListYaz["AltKatID"]."' ");
                    if(Say($MakaleAltKatSor)>0){
                        $MakaleAltKatYaz = Yaz($MakaleAltKatSor);
                        echo '<li><a href="'.$SiteUrl.'makaleler-makaleAltKat&Kat='.$MakaleKatYaz["Url"].'&AltKat='.$MakaleAltKatYaz["Url"].'">'.$MakaleAltKatYaz["Title"].'</a></li>';
                    }
                    
                                
               echo '</ol>
                    <a class="col-lg-3 col-md-3 col-sm-4 pull-right Margin_0 Padding_0 text-right" 
                        href="'.$SiteUrl.'index.php?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'"><em>devamını oku..<em></a>
                    <div class="clearfix"></div>
                    </div>';
            echo '</div>';
            echo '</div>';
        }
    }
    else {
        mesajUyariSite("hata", "Kayıt Yok !");
    }
?>
                
            <?php // require_once 'makaleler/sayfalama.php'; ?>
            
            <div class="clearfix"></div>
            
        </div>        
    </div>
    
    <?php require_once 'slogan.php'; ?>
            