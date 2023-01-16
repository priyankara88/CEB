<?php

function inputsEmptyRegister($accNumber, $LMUnit ,$TUnit){
    if(empty($accNumber)||empty($LMUnit )||empty($TUnit)){
        $value=true;

    }else{

        $value=false;
    }
 return $value;
}

function calculatebill($TUnit){
    session_start();
    if($TUnit<=30){

            $MBill=($TUnit*8)+120;
             
            $_SESSION["bill"]= $MBill;

    }else if($TUnit>30 && $TUnit <=60){

            $cUnit=$TUnit-30;
            $MBill=($cUnit*10)+240+240;
            $_SESSION["bill"]= $MBill;

    }else if($TUnit>60 && $TUnit <=90){

            $cUnit=$TUnit-60;
            $MBill=($cUnit*16)+240+360+360;
            $_SESSION["bill"]= $MBill;

    }else if($TUnit>90 && $TUnit <=120){

            $cUnit=$TUnit-90;
            $MBill=($cUnit*50)+240+360+360+960;
            $_SESSION["bill"]= $MBill;

}else if($TUnit>120 && $TUnit <=180){
            $cUnit=$TUnit-120;
            $MBill=($cUnit*50)+240+360+360+480+960;
            $_SESSION["bill"]= $MBill;
}
else if ($TUnit>180){

            $cUnit=$TUnit-180;
            $MBill=($cUnit*75)+240+360+360+480+960+1500;
            $_SESSION["bill"]= $MBill;
}else{
    
}

    return $MBill;
}




?>