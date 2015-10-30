<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>getJSON</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<table border="1"></table>

<script>

    $(document).ready(function() {
        $.getJSON("api.php", function(data) {
            $.each(data, function (key, val) {
                $('table').append('<tr id="' + key + '"><td>' + val.eesnimi + '</td>' + '<td>' + val.perenimi + '</td>' + '<td>' + val.aadress + '</td></tr>');
            });
        });
    });

</script>

</body>
</html>




