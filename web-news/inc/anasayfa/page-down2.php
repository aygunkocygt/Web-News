<?php

    $MakaleList = Sor("SELECT Title, Url, Description, Tarih,Img FROM makaleler_tr ORDER BY ID DESC LIMIT 10");
    if(Say($MakaleList)>0){
        echo '<div class="row MarginTop_10">';
        while ($MakaleListYaz = Yaz($MakaleList)){
            $MakaleImg = $MakaleListYaz["Img"]=="" ? "makale-resmi-yok.jpg" : $MakaleListYaz["Img"];
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';
            echo '
                    
 <div class="container">
    <div class="row">
            <div class="col-md-3">
        <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">Syria war: Why the battle for Aleppo matters</a></h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div></div>

                        <div class="clearfix"></div>

                    </div>
                    
            </div></div>';
            echo '</div>';
        }
        echo '</div>';
    }
?>