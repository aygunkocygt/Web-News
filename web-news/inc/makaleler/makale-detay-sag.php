
  

    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs PaddingRight_0">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info"><h4 class="list-group-item-heading Color_1">Benzer Makaleler</h4></li>
        <?php
            $MakaleList = Sor("SELECT ID, Title, Url FROM makaleler_tr WHERE KatID='".$Yaz["KatID"]."' AND ID!='".$Yaz["ID"]."' ORDER BY ID ASC");
            if(Say($MakaleList)>0){
                While($MakaleYaz = Yaz($MakaleList)){
                    echo '<li class="list-group-item">'
                    . '<a href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleYaz["Url"].'" '
                            . 'title="'.$MakaleYaz["Title"].'">'.$MakaleYaz["Title"].'</a>'
                            . '</li>';
                }
            }
            else{
               $MakaleList = Sor("SELECT ID, Title, Url FROM makaleler_tr WHERE ID!='".$Yaz["ID"]."' ORDER BY ID ASC LIMIT 10");
                if(Say($MakaleList)>0){
                    While($MakaleYaz = Yaz($MakaleList)){
                        echo '<li class="list-group-item">'
                        . '<a href="'.$SiteUrl.'?Gelen=makaleDetay&url='.$MakaleYaz["Url"].'" '
                                . 'title="'.$MakaleYaz["Title"].'">'.$MakaleYaz["Title"].'</a>'
                                . '</li>';
                    }
                }
            }
        ?>    
            
        </ul>
    </div>

    <div class="clearfix"></div>
