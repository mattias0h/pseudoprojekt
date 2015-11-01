<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Maili kontroll</title>
</head>
<body>

<input type="text" id="email">
<input type='submit' name='submit' onclick='checkEmail()'/>

<script type="text/javascript">
    function checkEmail() {

        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert('Teie email ei vasta nõuetele!');
            email.focus;
        } else {
            alert('Teie email on nõuetele vastav!')
        }
    }
</script>

</body>
</html>