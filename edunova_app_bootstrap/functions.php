<?php 

function l($varijabla){
    echo "<pre>";
    print_r($varijabla);
    echo "</pre>";
}



function stavkaIzbornika($putanjaAPP, $stranica, $labela){
        ?>
        <li class="nav-item">
        	<a class="nav-link <?php 
        if ($putanjaAPP . $stranica == $_SERVER["PHP_SELF"]){
          echo "active";
        }
        ?>" href="<?php echo $putanjaAPP . $stranica; ?>"><?php echo $labela; ?></a>
        </li>
        <?php
}