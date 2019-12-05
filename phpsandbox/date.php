<?php
 $br = "<br>";
 echo date('d'), $br; // Day
 echo date('d/m/y'), $br; // Small 'd', 'm' and 'y' returns day, month and year in numeric 
 echo date('D/M'), $br; // Capital 'D' and 'M' returns day and month in English
 echo date('Y'), $br; // Capital Y returns whole year like 2019, 2020 
 echo date('D, M d, Y'),$br;
 echo date('l'), $br;
 echo date('Y/m/d'), $br;
 echo date('l, F d, Y'), $br; // small 'l' represents current english day of the weak & capital 'F' represents current month of the year

 // time stamp
 
 # Set timezone
 date_default_timezone_set('Asia/Dubai');  // Set time zone of dubai

 echo date('h'), $br; // sour'UTC'
 echo date('i'), $br; // Minutes
 echo date('s'), $br; // Seconds
 echo date('a'), $br; // AM or PM

 echo date('h:i:sa'). $br;

	/* 
		UNIX time stamp is a long integer containing the number of 
		seconds between the UNIX Epoch (January 1970 00:00:00 GMT 
		and time specified)
	*/

 $timestamp = mktime(2, 30, 40, 4, 9, 1991);
 echo $timestamp, $br;

 echo date('d/m/Y h:i:sa',$timestamp),$br;

 # String to Time

 $timestamp2 = strtotime('7.00pm March 22 2016');
 echo $timestamp2, $br;
 echo date('d/m/Y h:i:sa',$timestamp2), $br;
 
$tomorrow = strtotime('tomorrow');
echo date('d/m/Y h:i:sa',$tomorrow), $br;

$ns = strtotime('next Sunday');
echo date('d/m/Y h:i:sa',$ns), $br;

$ntds = strtotime('+2 Days');
echo date('d/m/Y h:i:sa',$ntds), $br;

$nm = strtotime('+2 Months');
echo date('d/m/Y h:i:sa',$nm), $br;



 ?>