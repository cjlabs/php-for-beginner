<?php
# variabel bilangan
$bilangan = array(1,2,3,4,5,6,7,8,9,10);
foreach($bilangan as $val)
{
#block pertama
if($val %2== 0){
    # block kedua
    echo  " bilangan yang di inputkan adalah $val \n";
    echo  " $val adalah bilangan genap \n"; 
}else{
    # block ketiga
    echo " bilangan yang di inputkan adalah $val \n";
    echo " $val adalah bilangan ganjil \n";
}
}
