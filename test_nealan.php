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
  $path = "../testTechnique/" . $key;
  $fp = fopen($path, "r");
  $checkSimplex = null;
  // Il cherche string "&l0S". S'il y un chaine de caractères = simplex, si c'est null = duplex
  while(!feof($fp))
  {
    $buffer = fgets($fp, 4096);
    if (strstr($buffer, "&l0S"))
    {
      $checkSimplex = $buffer;
      break;
    }
  }
  fclose($fp);

  if (isset($checkSimplex)):
    $simplexOrDuplex = "Simplex";
  else:
    $simplexOrDuplex = "Duplex";
  endif;

  echo "File name [$key] size [$value]. This file is ". $simplexOrDuplex ."\n";
}
