<?php

foreach (glob("../testTechnique/*.pcl") as $file) {
  $fileName[] = basename($file);
}

var_dump($fileName);

for ($i = 0; $i < 20; $i++)
{
  echo 'File name is ' . $fileName[$i] . "\n";
}

 ?>