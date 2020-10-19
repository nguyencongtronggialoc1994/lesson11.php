<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="sdt" cols="50" rows="20"></textarea>
    <button type="submit">LOC</button>
</form>
<?php
$viettel = ["032", "033", "034", "035", "036", "037"];
$vina = ["081", "082", "083", "084", "085", "086"];
$mobi = ["056", "058", "092"];
$VieTTel = [];
$VinaPhone = [];
$MobilePhone = [];
function checkNumberPhone($arr1, $numberPhone)
{
    for ($i = 0; $i < count($arr1); $i++) {
        $str = substr($numberPhone, 0, 3);
        if ($arr1[$i] == $str) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrNumberPhone = explode(",", $_POST["sdt"]);
    for ($j = 0; $j < count($arrNumberPhone); $j++) {
        if (checkNumberPhone($viettel, $arrNumberPhone[$j])) {
            $VieTTel[] = $arrNumberPhone[$j];
        } else if (checkNumberPhone($vina, $arrNumberPhone[$j])) {
            $VinaPhone[] = $arrNumberPhone[$j];
        } else if (checkNumberPhone($mobi, $arrNumberPhone[$j])) {
            $MobilePhone[] = $arrNumberPhone[$j];
        }

    }
    echo "so dien thoai cua viettel";
    echo "<pre>";
    print_r($VieTTel);
    echo "so dien thoai cua vinaphone";
    echo "<pre>";
    print_r($VinaPhone);
    echo "so dien thoai cua mobiphone";
    echo "<pre>";
    print_r($MobilePhone);

}


?>
</body>
</html>
