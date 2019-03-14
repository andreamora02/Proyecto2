<?php


 //function getData(){
  //  $data_readed = fread($data_file, filesize("./data-1.json"));
  //  $data = json_decode($data_readed, true);
  //  fclose($data_file);
  //  return $data;
  //}

require "php-json-file-decode/json-file-decode.class.php";
//$buscar="";


/*if (isset($_POST['submitButton']))$todosbuscar'submitButton'];
  if($buscar)
  {*/

$read = new json_file_decode();
$json = $read-> json("data-1.json");
for($x=0;$x<count($json["casas"]); $x++)
{
echo  $json["casas"][$x] ["Dato"];

//}
}
//$json=file_get_contents("data-1.json");
//$json=json_decode($json);
//print $json->{"Id"};
 ?>
