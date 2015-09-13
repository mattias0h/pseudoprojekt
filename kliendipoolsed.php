<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Boilerplate</title>
</head>
<body>

<button onclick="myFunction()">Tere maailm</button>

<br>

<a href="javascript:AlertIt();">Tere maailm</a>

<br>

<a href="http://www.khk.ee" id="myLink" onclick="Function(); alert('J‰‰me siia'); return false;">J‰‰me siia</a>

<script type="text/javascript">
    function myFunction() {
        alert('Tere maailm');
    }

    function AlertIt() {
        var answer = confirm ("Tere maailm");
        if (answer)
            window.location="http://www.khk.ee";
    }


</script>

</body>
</html>