
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 PaddingTop_5">
<?php
    $VideoList = Sor("SELECT KatID, AltKatID, Title, Url, Description, Img, Tarih FROM videolar_tr WHERE KatID='".$KatID."' ORDER BY ID ASC");
    if(Say($VideoList)>0){
        while ($VideoListYaz = Yaz($VideoList)){
            $VideoImg = $VideoListYaz["Img"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["Img"];
           
            echo '<div class="col-lg-4 col-md-4 col-sm-6 AnasayfaVideoListDiv">';
        
            echo '<div class="card">';
          echo   '<div class="card-image">';

echo '<div class="embed-responsive embed-responsive-16by9"><img class="img-responsive " src="'.$SiteUrl.'images/Video/'.$VideoImg.'" title="'.$VideoListYaz["Img"].'" alt="'.$VideoListYaz["Description"].'" lobgdesc="'.$SiteUrl.'?Gelen=videoDetay&url='.$VideoListYaz["Url"].'" />';
echo '</div>';

echo '</div>';



            echo '<a href="'.$SiteUrl.'?Gelen=videoDetay&url='.$VideoListYaz["Url"].'" title="'.$VideoListYaz["Title"].'">';

         

            echo '</a>';
            echo '<span class"card-title"><h4><a href="'.$SiteUrl.'?Gelen=videoDetay&url='.$VideoListYaz["Url"].'" title="'.$VideoListYaz["Title"].'">'.$VideoListYaz["Title"].'</a></h4></span>';
            echo '</div>';
            echo '</div>';
        }
    }
?>
        <?php // require_once 'sayfalama.php'; ?>
    </div>
