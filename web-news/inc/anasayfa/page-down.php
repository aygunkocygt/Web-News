
<?php

    $MakaleList = Sor("SELECT Title, Url, Description, Tarih,Img FROM makaleler_tr ORDER BY ID DESC LIMIT 6");
    if(Say($MakaleList)>0){
        echo '<div class="row MarginTop_10 MarginLeft_0">';
        while ($MakaleListYaz = Yaz($MakaleList)){
            $MakaleImg = $MakaleListYaz["Img"]=="" ? "makale-resmi-yok.jpg" : $MakaleListYaz["Img"];

           


         echo ' <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 ">';      
         echo '<div class="index-content">';       
   echo '<div class="container">';
          
            
                echo '<div class="col-lg-3 col-md-4 col-sm-4">
                   <div class="card">
                        <img src="'.$SiteUrl.'images/Makaleler/'.$MakaleImg.'"alt="'.$MakaleListYaz["Description"].'" title="'.$MakaleListYaz["Title"].'"/>

                    <h4> '.$MakaleListYaz["Title"].'</h4>
                         
                  <p><div class="panel-body FontSize_13"> '.$MakaleListYaz["Description"].'</div></p>         
                        
                        <a href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleListYaz["Url"].'" title="'.$MakaleListYaz["Title"].'" class="blue-button">Read More</a>
                        
                   </div>';
                echo '</div>';
         
          echo '</div>';


 echo '</div>';

echo '</div>';


        }
        echo '</div>';  echo '</div>';
    }
?>