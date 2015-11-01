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
    <thead>
    <tr>
        <th><input type="text" class="search"></th>
        <th><input type="text" class="search"></th>
        <th><input type="text" class="search"></th>
    </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table>

<script type="text/javascript">

    $(document).ready(function() {
        $.getJSON("api.php", function(data) {
            $.each(data, function (key, val) {
                $('table').append('<tr id="' + key + '"><td class="col1">' + val.eesnimi + '</td>' + '<td class="col2">' + val.perenimi + '</td>' + '<td class="col3">' + val.aadress + '</td></tr>');
            });
        });
    });

    var TSort_Data = new Array ('my_table', 's', 's', 's');
    tsRegister();

    $(".search").keyup(function() {
        var rows = $("#fbody").find("tr").hide();
        var data = this.value.split(" ");
        $.each(data, function(i, v) {
            rows.filter(":contains('" + v + "')").show();
        });
    });

</script>

</body>
</html>




