# JavaScript - PHP Cross Platform Communication Framwork (JSFramwork)

You can execute php functions direct from the Frontend(JS)

* First You Need To Import JSFramwork(PHP) And Just Create A PHP Class File

```
include './Backend/Framwork.php';
class classname{

    function getText($lol) {
        return "testing -- " . $lol;
    }

    function getText() {
        return "testing";
    }

}
```

* Then Create A JSFramwork Object Like This

```
$JS = new JSFramwork(new classname());
$JS -> getData();
```

* After That Import JSFramwork(Js) And Jquery To The Frontend

```
<script type="text/javascript" src="JS/jquery-3.1.1.js"></script>
<script type="text/javascript" src="JS/JSframwork.js"></script>
<script type="text/javascript">
    var js = new JSframwork("filename.php");
</script>
```

* Thats All, Now You Can Execute Any PHP Methods From JS

```
<input type="text" id="hh">
<button onclick='js.getText($("#hh").val(),function (data) {alert(data)});'>dasdadad</button>
```

* And Also You Can Get Return Values(data) From Methods
```
js.getText("testword",function (data) {
      alert(data)
});
```
