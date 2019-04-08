
  

    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs PaddingRight_0">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info"><h4 class="list-group-item-heading Color_1">Benzer Videoler</h4></li>
        <?php
            $VideoList = Sor("SELECT ID, Title, Url FROM videolar_tr WHERE KatID='".$Yaz["KatID"]."' AND ID!='".$Yaz["ID"]."' ORDER BY ID ASC");
            if(Say($VideoList)>0){
                While($VideoYaz = Yaz($VideoList)){
                    echo '<li class="list-group-item">'
                    . '<a href="'.$SiteUrl.'?Gelen=videoDetay&url='.$VideoYaz["Url"].'" '
                            . 'title="'.$VideoYaz["Title"].'">'.$VideoYaz["Title"].'</a>'
                            . '</li>';
                }
            }
            else{
               $VideoList = Sor("SELECT ID, Title, Url FROM videolar_tr WHERE ID!='".$Yaz["ID"]."' ORDER BY ID DESC LIMIT 10");
                if(Say($VideoList)>0){
                    While($VideoYaz = Yaz($VideoList)){
                        echo '<li class="list-group-item">'
                        . '<a href="'.$SiteUrl.'?Gelen=videoDetay&url='.$VideoYaz["Url"].'" '
                                . 'title="'.$VideoYaz["Title"].'">'.$VideoYaz["Title"].'</a>'
                                . '</li>';
                    }
                }
            }
        ?>    
            
        </ul>
    </div>

    <div class="clearfix"></div>
