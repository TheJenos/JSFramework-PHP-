<?php

class JSFramwork {

    private $object = null;
    private $json = [];

    function __construct($object) {
        $this->object = $object;
        $this->json['ClassName'] = get_class($this->object);
    }

    function sendDataToJSON() {
        $this->json['Methods'] = get_class_methods($this->object);
    }

    function runMethods($name) {
        $this->json['MethodName'] = $name;
        if(isset($_POST['para'])) {
            $this->json['Return'] = json_encode(call_user_func_array(array($this->object, $name), $_POST['para']));
        }else{
            $this->json['Return'] = json_encode(call_user_func(array($this->object, $name)));
        }
    }

    function getData() {
        if (isset($_POST['run'])) {
            $this->runMethods($_POST['run']);
        } else {
            $this->sendDataToJSON();
        }
        die(json_encode($this->json));
    }

}
