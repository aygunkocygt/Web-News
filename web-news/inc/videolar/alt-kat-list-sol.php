
    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs Padding_5">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info Color_1"><h4 class="list-group-item-heading"><?php echo $PageTitle; ?></h4></li>
        <?php
            $VideoAltKatList = Sor("SELECT ID, ParentID, Title, Url FROM video_kat_tr WHERE ParentID='".$KatID."' ORDER BY ID ASC");
            if(Say($VideoAltKatList)>0){
                While($VideoAltKatYaz = Yaz($VideoAltKatList)){
                    echo '<li class="list-group-item">'
                    . '<a href="'.$SiteUrl.'?Gelen=videoAltKat&Kat='.$VideoAltKatYaz["ParentID"].'&AltKat='.$VideoAltKatYaz["ID"].'" '
                            . 'title="'.$VideoAltKatYaz["Title"].'">'.$VideoAltKatYaz["Title"].'</a>'
                            . '</li>';
                }
            }
            else{
                echo '<li class="list-group-item">Alt Kategori Yok</li>';
            }
        ?>
        </ul>
    </div
