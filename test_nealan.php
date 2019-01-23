<?php

foreach (glob("../testTechnique/*.pcl") as $file) {
  $fileName[] = basename($file);
}

// Crée un tableau associatif
for ($i = 0; $i < 20; $i++)
{
  $path = "../testTechnique/" . $fileName[$i];
        $fileArray[$fileName[$i]] = filesize($path);
}

// Tri le tableau associciatif par ordre décroissant
arsort($fileArray);
foreach ($fileArray as $key => $value) {
  echo "File name [$key] size [$value]\n";
}
