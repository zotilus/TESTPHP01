<?php

namespace APP;
header("Access-Control-Allow-Origin: *");

interface Travailleur {
    public function Travailler();
    public function PasTravailler();
}
?>