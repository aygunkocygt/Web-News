
    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs Padding_5">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info Color_1"><h4 class="list-group-item-heading"><?php echo $PageTitle; ?></h4></li>
        <?php
            $MakaleAltKatList = Sor("SELECT ID, ParentID, Title, Url FROM makale_kat_tr WHERE ParentID='".$KatID."' ORDER BY ID ASC");
            if(Say($MakaleAltKatList)>0){
                While($MakaleAltKatYaz = Yaz($MakaleAltKatList)){
                    echo '<li class="list-group-item">'
                    . '<a href="'.$SiteUrl.'?Gelen=makaleAltKat&Kat='.$MakaleAltKatYaz["ParentID"].'&AltKat='.$MakaleAltKatYaz["ID"].'" '
                            . 'title="'.$MakaleAltKatYaz["Title"].'">'.$MakaleAltKatYaz["Title"].'</a>'
                            . '</li>';
                }
            }
            else{
                echo '<li class="list-group-item">Alt Kategori Yok</li>';
            }
        ?>
        </ul>
    </div>