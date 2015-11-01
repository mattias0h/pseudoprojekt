<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>getJSON</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="gs_sortable.js"></script>
</head>
<body>

<table border="1" id="my_table">
    <thead>
    <tr>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>Aadress</th>
    </tr>
    </thead>
</table>

<script type="text/javascript">

    $(document).ready(function() {
        $.getJSON("api.php", function(data) {
            $.each(data, function (key, val) {
                $('table').append('<tr id="' + key + '"><td>' + val.eesnimi + '</td>' + '<td>' + val.perenimi + '</td>' + '<td>' + val.aadress + '</td></tr>');
            });
        });
    });

    var TSort_Data = new Array ('my_table', 's', 's', 's');
    tsRegister();

</script>

</body>
</html>




