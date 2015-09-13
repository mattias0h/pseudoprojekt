<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Vorm</title>
</head>
<body>

<form action="?">
    <input type="text" name="kass">
    <input type="submit">
</form>

<?php
if (isset($_POST['kass'])) {
    echo 'Kass oli: ' . $_POST['kass'];
}
?>

</body>
</html>