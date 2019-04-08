
    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs Padding_5">
<?php
    $MakaleFullKatList = Sor("SELECT ID, Title, Url FROM makale_kat_tr WHERE ParentID='0' ORDER BY ID ASC");
    if(Say($MakaleFullKatList)>0){
        echo '<div class="panel-group" id="accordion">';
        While($MakaleFullKatYaz = Yaz($MakaleFullKatList)){
            echo '<div class="panel panel-default">';
                echo '<div class="panel-heading">
                    <h4 class="panel-title">
                        <a title="" data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$MakaleFullKatYaz["ID"].'">'.$MakaleFullKatYaz["Title"].'</a>
                        <a class="pull-right tooltipAc" data-toggle="tooltip" href="'.$SiteUrl.'?Gelen=makaleKat&Kat='.$MakaleFullKatYaz["ID"].'" title="Listele"><i class="glyphicon glyphicon-search"></i></a>
                    </h4>
                 </div>';
                 
            $MakaleFullAltKatList = Sor("SELECT ID, Title, Url FROM makale_kat_tr WHERE ParentID='".$MakaleFullKatYaz["ID"]."' ORDER BY ID ASC");
            if(Say($MakaleFullAltKatList)>0){
               
                echo '<ul id="collapse-'.$MakaleFullKatYaz["ID"].'" class="list-group collapseList in">';
                While($MakaleFullAltKatYaz = Yaz($MakaleFullAltKatList)){
                    echo '<li class="list-group-item">'
                        . '<a href="'.$SiteUrl.'?Gelen=makaleAltKat&Kat='.$MakaleFullKatYaz["ID"].'&AltKat='.$MakaleFullAltKatYaz["ID"].'" title="'.$MakaleFullAltKatYaz["Title"].'">'
                            . '<i class="glyphicon glyphicon-minus"></i> '.$MakaleFullAltKatYaz["Title"]
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
