
    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
        <h3 class="page-header MarginTop_0 Color_1">
<?php 
    if($IletisimAyarSay>0){ 
        if($IletisimAyarYaz["Title"]!=""){
            echo $IletisimAyarYaz["Title"];
        }
        else{ echo 'İletişim Bilgileri'; }

        echo '</h3>
            <div class="list-group Border_0">';

    
        if($IletisimAyarYaz["Tel"]!=""){
            echo '<div class="list-group-item PaddingLeft_0 Border_0">
                    <i class="glyphicon glyphicon-earphone"></i> <strong class="hidden-xs hidden-sm">
                        <abbr title="Telefon">Tel.</abbr> : </strong>  '.$IletisimAyarYaz["Tel"].'
                </div>';
        }
        if($IletisimAyarYaz["Tel_2"]!=""){
            echo '<div class="list-group-item PaddingLeft_0 Border_0">
                    <i class="glyphicon glyphicon-earphone"></i> <strong class="hidden-xs hidden-sm">
                        <abbr title="Telefon">Tel.</abbr> : </strong>  '.$IletisimAyarYaz["Tel_2"].'
                </div>';
        }
        if($IletisimAyarYaz["Fax"]!=""){
            echo '<div class="list-group-item PaddingLeft_0 Border_0">
                    <i class="glyphicon glyphicon-print"></i> <strong class="hidden-xs hidden-sm">
                        <abbr title="Telefon">Tel.</abbr> : </strong>  '.$IletisimAyarYaz["Fax"].'
                </div>';
        }
        if($IletisimAyarYaz["Mobil"]!=""){
            echo '<div class="list-group-item PaddingLeft_0 Border_0">
                    <i class="glyphicon glyphicon-phone"></i> <strong class="hidden-xs hidden-sm">
                        <abbr title="Cep Telefonu">Cep.</abbr> : </strong>  '.$IletisimAyarYaz["Mobil"].'
                </div>';
        }
        if($IletisimAyarYaz["Adres"]!=""){
            echo '<div class="list-group-item PaddingLeft_0 Border_0">
                    <i class="glyphicon glyphicon-map-marker"></i> <strong class="hidden-xs hidden-sm">
                        <abbr title="Adres">Adres.</abbr> : </strong>  '.$IletisimAyarYaz["Adres"];
            if($IletisimAyarYaz["Ilce"]!="" || $IletisimAyarYaz["Il"]!=""){ 
                echo '<p class="text-right MarginBottom_0 Border_0">';
                echo $IletisimAyarYaz["Ilce"]!="" ? $IletisimAyarYaz["Ilce"] : null;
                if($IletisimAyarYaz["Il"]!=""){
                    if($IletisimAyarYaz["Ilce"]!=""){ echo ' - '; }
                    echo $IletisimAyarYaz["Il"];
                }
                echo '</p>';
            }
            echo '</div>';
        }

        echo '</div>';
    } 
?>    
    </div>
