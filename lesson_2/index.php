<?php

//տիպերի հետ աշխատող ստուգող ֆունկցիաներ
//isset(var) - փոփոխականը գոյություն ունի՞, թե՞ ոչ
//empty(var) - փոփոխականը դատա՞րկ է, թե՞ ոչ
//is_int(var) - փոփոխականը ամբողջ թի՞վ է, թե՞ ոչ
//is_float(var) - փոփոխականը տասնորդական թի՞վ է, թե՞ ոչ
//is_numeric(var)  - փոփոխականը թի՞վ է, թե՞ ոչ
//is_string(var) - փոփոխականը տեքստ է՞, թե՞ ոչ
//is_bool(var) - տրամաբանակն տի՞պ է, թե՞ ոչ
//is_null(var) - null է,թե՞ ոչ 
//is_array(array) - զանգվա՞ծ է, թե՞ ոչ
//is_object(object) - օբյե՞կտ է, թե՞ ոոչ
//is_resource(resource) - ռեսո՞ւրս է, թե 

//if պայմանի օպերատոր

/*
գրելաձև
if(պայման) {
    գործողոություն(ներ), եթե տրված պայմանը ճիշտ է 
}

օրինակ․
$n = 10;
if($n % 2 == 0) {
    echo "<strong>$n</strong> -ը <span color'red'>զույգ</span> է";
}

*/

//if ... else 
/*
գրելաձև
if(պայման) {
    գործողոություն(ներ), եթե տրված պայմանը ճիշտ է 
} else {
 գործողոություն(ներ), եթե տրված պայմանը սխալ է 
 }

օրինակ․
$n = 10;
if($n % 2 == 0) {
    echo "<strong>$n</strong> -ը <span color'red'>զույգ</span> է";
} else {
 echo "<strong>$n</strong> -ը <span color'red'>զույգ</span> է";
}

if ... elseif ... else
Կիրառվում է այն դեպքում, եթե անհրաժեշտ է մի քանի պայման ստուգել՝ նախորդ պայմնաի սխալ լինելու դեպքում
Օրինակ․
$day = 1;
if($day == 1) {
    echo "Mo";
} else if($day == 2) {
    echo "Tu";
} ...
else {
    echo "Day not exist";
}
նույն խնդիրը կարող ենք լուծել switch case պայմանի օպերատորի կիրառմամբ
$day = 1;
switch($day) {
    case 1:
        echo "Mo";
        break;
    case 2:
        echo "Tu";
        break;
    default:

}
*/