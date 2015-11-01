<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Maili kontroll</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
            $.get("api.php?command=emailvalidation&email=" + $('#email').val(), function (value) {
                if (value == 1) {
                    alert('Domeen eksisteerib');
                } else if (value == 0) {
                    alert('Domeen puudub');
                } else {
                    alert('Viga:' + value);
                }
            });
        }
    }
</script>

</body>
</html>