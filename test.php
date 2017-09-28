<?php

include './Backend/Framwork.php';

class test {

    function getText($lol) {
        return "sadasdasdasd----" . $lol;
    }

    function getTexts() {
        return "sadasdfs";
    }

}

class testtt {

    function getText($lol) {
        return "nadun----" . $lol;
    }

    function getTexts() {
        return "ngdfgdfg";
    }

}

if (isset($_GET['d'])) {
    $f = new JSFramwork(new test());
    $f->getData();
}else{
    $f = new JSFramwork(new testtt());
    $f->getData();
}
