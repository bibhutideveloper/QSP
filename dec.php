<?php
// $id= $_GET['id'];
// $decrypted = decrypt($id, "check");
// echo $decrypted ;
$string = 'bgrXjZ2lMVhFSBEkH8v22kBI2D_g5yU3-1dfRFzVs_W17aLgPBPFa02tqtEat0Xf5WEnWP8OzDEg';
$key = 'Qev3Aeidb8kRJYeB3MNhQrIBK8l2KWeW';
function decrypt($string, $key) 
{
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}
?>