
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 PaddingTop_5">
<?php
    $MakaleList = Sor("SELECT KatID, AltKatID, Title, Url, Description, Img, Tarih FROM makaleler_tr WHERE KatID='".$KatID."' ORDER BY ID DESC");
    if(Say($MakaleList)>0){
        while ($MakaleListYaz = Yaz($MakaleList)){
            $MakaleImg = $MakaleListYaz["Img"]=="" ? "makale-resmi-yok.jpg" : $MakaleListYaz["Img"];
            echo '<div class="panel panel-primary z1 BorderHover">
                <div class="panel-heading MakaleListTitle">
                    <h3 class="panel-title">
                        <a href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="">'.$MakaleListYaz["Title"].'</a>
                        <span class="hidden-xs pull-right MakaleEkleyenBilgi">
                            <a href="" title="">'.$MakaleListYaz["Tarih"].'</a> tarihinde 
                            <a href="" title="">aygün</a> ekledi
                        </span>
                    </h3>
                </div>
                <div class="panel-body z1 FontSize_13">
                    <div class="col-lg-3 col-md-3 col-sm-12 hidden-xs pull-left PaddingLeft_0">
                        <a class="img-thumbnail MakaleListImg" href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'">
                            <img class="img-responsive" src="'.$SiteUrl.'images/Makaleler/'.$MakaleImg.'" 
                                alt="'.$MakaleListYaz["Description"].'" title="'.$MakaleListYaz["Title"].'" 
                                    longdesc="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" />
                        </a>
                    </div>
                    '.$MakaleListYaz["Description"].'
                </div>
                <div class="panel-footer panel-custom z1">
                    <ol class="hidden-xs col-lg-10 col-md-9 col-sm-8 col-xs-8 breadcrumb Margin_0 Padding_0">';
                   
                   
                    $MakaleKatYaz = Yaz(Sor("SELECT Title, ID,Url FROM makale_kat_tr WHERE ID='".$MakaleListYaz["KatID"]."' "));
                    echo '<li><a href="'.$SiteUrl.'?Gelen=makaleKat&Kat='.$MakaleKatYaz["ID"].'" title="'.$MakaleKatYaz["Title"].'">'.$MakaleKatYaz["Title"].'</a></li>';
                    $MakaleAltKatSor = Sor("SELECT Title,ID, Url FROM makale_kat_tr WHERE ID='".$MakaleListYaz["AltKatID"]."' ");
                    if(Say($MakaleAltKatSor)>0){
                        $MakaleAltKatYaz = Yaz($MakaleAltKatSor);
                        echo '<li><a href="'.$SiteUrl.'makaleler-makaleAltKat&Kat='.$MakaleKatYaz["ID"].'&AltKat='.$MakaleAltKatYaz["Url"].'">'.$MakaleAltKatYaz["Title"].'</a></li>';
                    }
                    
                                
               echo '</ol>
                    <a class="col-lg-2 col-md-3 col-sm-4 pull-right Margin_0 Padding_0 text-right" 
                        href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'"><em>devamını oku..</em></a>
                    <div class="clearfix"></div>
                </div>
            </div>';
        }
    }
    
?>
          </div>