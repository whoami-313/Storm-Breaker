<?php
header('Content-Type: text/html');
{
  $lat = $_POST['Lat'];
  $lon = $_POST['Lon'];
  // $acc = $_POST['Acc'];
  // $alt = $_POST['Alt'];
  // $dir = $_POST['Dir'];
  // $spd = $_POST['Spd'];

  // https://www.google.com/maps/place/
$data = array(
    'lat' => $lat,
    'lon' => $lon,
    'acc' => $acc,
    'alt' => $alt,
    'dir' => $dir,
    'spd' => $spd);

  $jdata = json_encode($data);

  $f = fopen('result.json', 'w+');
  fwrite($f, $jdata);
  fclose($f);
}
?>
