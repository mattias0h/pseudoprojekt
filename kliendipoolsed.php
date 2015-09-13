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

<br>

<img src="http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg" alt="" onclick="changeSource()">

<script type="text/javascript">
    function myFunction() {
        alert('Tere maailm');
    }

    function AlertIt() {
        var answer = confirm ("Tere maailm");
        if (answer)
            window.location="http://www.khk.ee";
    }

    function changeSource() {
        var image = document.querySelectorAll("img")[0];
        image.src = image.src.replace("http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg","http://cdn.playbuzz.com/cdn/83c1b6fb-2476-4865-938f-ed8a1caee854/495e5e87-ae72-4380-8184-0a38d901e5a6.jpg");
    }

</script>

</body>
</html>