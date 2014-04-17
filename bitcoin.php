<?php 

$json = file_get_contents('http://blockchain.info/address/1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw?format=json');
$obj = json_decode($json);
//echo $obj->final_balance;

 $addressBal = $obj->final_balance;
 $inBtc = $addressBal * .00000001;
 echo "<h1>";
 echo $inBtc; 
 echo " BTC</h1>";


?>

<a href=http://blockchain.info/address/1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw>http://blockchain.info/address/1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw</a>


