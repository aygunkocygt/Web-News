
    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs Padding_5">
<?php
    $VideoFullKatList = Sor("SELECT ID, Title, Url FROM video_kat_tr WHERE ParentID='0' ORDER BY ID ASC");
    if(Say($VideoFullKatList)>0){
        echo '<div class="panel-group" id="accordion">';
        While($VideoFullKatYaz = Yaz($VideoFullKatList)){
            echo '<div class="panel panel-default">';
                echo '<div class="panel-heading">
                    <h4 class="panel-title">
                        <a title="" data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$VideoFullKatYaz["ID"].'">'.$VideoFullKatYaz["Title"].'</a>
                        <a class="pull-right tooltipAc" data-toggle="tooltip" href="'.$SiteUrl.'?Gelen=videoKat&Kat='.$VideoFullKatYaz["ID"].'" title="Listele"><i class="glyphicon glyphicon-search"></i></a>
                    </h4>
                 </div>';
            $VideoFullAltKatList = Sor("SELECT ID, Title, Url FROM video_kat_tr WHERE ParentID='".$VideoFullKatYaz["ID"]."' ORDER BY ID ASC");
            if(Say($VideoFullAltKatList)>0){
               
                echo '<ul id="collapse-'.$VideoFullKatYaz["ID"].'" class="list-group collapseList in">';
                While($VideoFullAltKatYaz = Yaz($VideoFullAltKatList)){
                    echo '<li class="list-group-item">'
                        . '<a href="'.$SiteUrl.'?Gelen=videoAltKat&Kat='.$VideoFullKatYaz["ID"].'&AltKat='.$VideoFullAltKatYaz["ID"].'" title="'.$VideoFullAltKatYaz["Title"].'">'
                            . '<i class="glyphicon glyphicon-minus"></i> '.$VideoFullAltKatYaz["Title"]
                        . '</a>'
                    . '</li>';
                }
                echo '</ul>';
                
            }
            echo '</div>';
        }
        echo '</div>';
    }
?>
    </div>
