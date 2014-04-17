<h1>Why?</h1>

Full transparency for donors and charities.<br>
Donors will see exactly where their money goes.<br> 
Donors can judge if nonprofit is making good decisions. 

<h1>BloodBanker Balance</h1>
<?php 

$json = file_get_contents('http://blockchain.info/address/1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw?format=json');
$obj = json_decode($json);
//echo $obj->final_balance;

 $addressBal = $obj->final_balance;
 $inBtc = $addressBal * .00000001;
 echo "<h2>";
 echo $inBtc; 
 echo " BTC</h2>";


?>
BloodBanker Official Bitcoin Donation Address<br> 
<a href=http://blockchain.info/address/1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw>1GDyu58t5boJVfQeC4UdB5gzh513NDZsMw</a><br>
<iframe src="https://docs.google.com/forms/d/1wMg25BV-2NjoaLgVvBHd8Du7NYH0zJCa_or765ytQ6Q/viewform?embedded=true" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
<br>
<iframe width="760" height="600" frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0AnRjlqa8g9ssdE1xT0hadncyWm5IWDZxUHdrQVZtc2c&single=true&gid=0&output=html&widget=true'></iframe>
<br>



