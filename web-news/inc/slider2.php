<?php
    $VideoList = Sor("SELECT videolink FROM slide_sol_videolar ORDER BY ID DESC LIMIT 1");
    if(Say($VideoList)>0){
      while ($VideoListYaz = Yaz($VideoList)){
         $VideoImg = $VideoListYaz["videolink"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["videolink"];

      echo '<div class="container" style=" padding-top:20px;"';
    
echo '<div class="row">';
 
  echo '<div>';
 
  echo '
    <div class="col-md-6 col-sm-6 b-padding video-container image-large">
 <iframe class="youtube-video" src="'.$VideoListYaz["videolink"].'" frameborder="0" allowfullscreen></iframe>
    </div>';
  }
  }
    ?>
<?php
    $VideoList = Sor("SELECT videolink FROM slide_videolar1 ORDER BY ID DESC LIMIT 1");
    if(Say($VideoList)>0){
      while ($VideoListYaz = Yaz($VideoList)){
         $VideoImg = $VideoListYaz["videolink"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["videolink"];



 
    echo '<div class="col-md-6 col-sm-6  b-padding">';
      echo '<a href="/furniture">
        <div class="square img_1-1 home-block col-xs-6">
         <iframe class="youtube-video" src="'.$VideoListYaz["videolink"].'" frameborder="0" allowfullscreen></iframe>
        </div>
      </a>';
    }
  }
      ?>
      <?php
    $VideoList = Sor("SELECT videolink FROM slide_videolar5 ORDER BY ID DESC LIMIT 1");
    if(Say($VideoList)>0){
      while ($VideoListYaz = Yaz($VideoList)){
         $VideoImg = $VideoListYaz["videolink"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["videolink"];

     echo ' <a href="/furniture">
        <div class="square img_1-2 home-block col-xs-6">
          <iframe class="youtube-video" src="'.$VideoListYaz["videolink"].'" frameborder="0" allowfullscreen></iframe>
        </div>
      </a>';
    }
  }
      ?>
      <?php
    $VideoList = Sor("SELECT videolink FROM slide_videolar3 ORDER BY ID ASC");
    if(Say($VideoList)>0){
      while ($VideoListYaz = Yaz($VideoList)){
         $VideoImg = $VideoListYaz["videolink"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["videolink"];

      echo '<a href="/furniture">
        <div class="square img_2-1 home-block col-xs-6">
         <iframe class="youtube-video" src="'.$VideoListYaz["videolink"].'" frameborder="0" allowfullscreen></iframe>
        </div>
      </a>';
    }
  }
      ?>
       <?php
    $VideoList = Sor("SELECT videolink FROM slide_videolar4 ORDER BY ID DESC LIMIT 1");
    if(Say($VideoList)>0){
      while ($VideoListYaz = Yaz($VideoList)){
         $VideoImg = $VideoListYaz["videolink"]=="" ? "video-resmi-yok.jpg" : $VideoListYaz["videolink"];

     echo  '<a href="/jewellery">
        <div class="square img_2-2 home-block col-xs-6">
          <iframe class="youtube-video" src="'.$VideoListYaz["videolink"].'" frameborder="0" allowfullscreen></iframe>
        </div>
      </a>';
    }
  }
      
    echo '</div>';
 echo '</div>';
 echo '</div>';
 ?>