
    <div class="col-lg-12 Padding_0 Margin_0">
        <ul class="pagination Margin_0 MarginBottom_10 pull-right">
            <li><a href="" title="">İlk</a></li>
            <li><a href="" title="">&laquo;</a></li>
        <?php 
            $y=1;
            While($y<=12){
                if ($y==1) {
                    echo '<li class="active"><a href="" title="">'.$y.'</a></li>';
                }else{
                    echo '<li><a href="" title="">'.$y.'</a></li>';
                }
              $y++;
            }
        ?>
            <li><a href="" title="">&raquo;</a></li>
            <li><a href="" title="">Son</a></li>
        </ul>
    </div>