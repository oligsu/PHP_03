<?PHP
$array= ['North America'=>['Mammuthus columbi','Serpentes'],
'South America'=>['Mammuthus exilis','Panthera'],
'Africa'=>['Mammutidae','Crocodilia','Panthera leo'],
'Eurasia'=>['Ursidae','Canis lupus','Vulpes lagopus'],
'Australia'=>['Macropus','Tachyglossidae']];

echo '1:'. PHP_EOL;
print_r($array);
echo PHP_EOL;

echo '2:'. PHP_EOL;
foreach ($array as $key1 => $value1)
{
  foreach ($value1 as $value2)
  {
    if (strpos($value2,' ')>0)
    {
     $array2[]=$value2;
    }
  }
}

foreach ($array2 as $value) {
  echo $value . PHP_EOL;
  $array3=explode(" ",$value);
  $array4[]=$array3[0];
  $array5[]=$array3[1];
}
shuffle($array5);

echo '3:'. PHP_EOL;
foreach ($array4 as $key=> $value) {
  echo $array4[$key].' '.$array5[$key].PHP_EOL;
}
?>
