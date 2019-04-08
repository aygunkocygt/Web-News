
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 Padding_0">
<?php 
    $Icerik = '<div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="'.$Yaz["VideoLink"].'"></iframe>
        </div>

        <div class="col-lg-12 MarginTop_10 Padding_0">
            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs PaddingLeft_0">
                <i class="glyphicon glyphicon-tags MarginRight_5"></i> ';
    $Keys = @explode(",", $Yaz["Keywords"]);
    $virgul = count($Keys) > 1 ? ', ' : '';
    foreach ($Keys as $Key){
        $Icerik .= $virgul;
        $Icerik .= '<a href="" title="'.$Key.'">'.$Key.'</a>';
    }
                 
              
    $Icerik .= '</div>
            <div class="col-lg-6 col-md-6 col-sm-12 hidden-xs PaddingRight_0">
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 PaddingRight_0 text-right"><i class="glyphicon glyphicon-user MarginRight_5"></i> <a href="" title="Mahmut Şehoğlu" class="tooltipAc" data-placement="bottom">Mahmut Şehoğlu</a></div> -->
                <div class="col-lg-5 col-md-5 col-sm-5 PaddingRight_0 text-right"><i class="glyphicon glyphicon-time MarginRight_5"></i> <a href="" title="17.07.2014" class="tooltipAc" data-placement="bottom">'.$Yaz["Tarih"].'</a></div>
                <div class="col-lg-4 col-md-4 col-sm-4 PaddingRight_0 text-right"><i class="glyphicon glyphicon-download-alt MarginRight_5"></i> <a href="" title="Dosya İndir" class="tooltipAc" data-placement="bottom">İndir</a></div>
                <div class="col-lg-3 col-md-3 col-sm-3 PaddingRight_0 text-right"><i class="glyphicon glyphicon-signal MarginRight_5"></i> '.$Yaz["Hit"].' izlendi</div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <div class="MarginTop_20 Padding_10">
        '.$Yaz["Text"].'</div>';
    
    if($IcerikDurum==0){
        echo "İçerik Görüntüleme Yönetici tarafından kapatıldı";
    }
    else{
        echo $Icerik;
    }
  echo '</div>';
  
   require_once 'video-detay-sag.php';
?>   
   <div class="clearfix"></div>
   
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Padding_0">
<?php //require_once 'video-detay-yorum.php'; ?>
    </div>
 
    <div class="clearfix"></div>
