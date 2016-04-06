#!/usr/bin/php
<?php
date_default_timezone_set('Etc/GMT-1');
if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([1-3]?[0-9]) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-2][0-9]):([0-5][0-9]):([0-5][0-9])/", $argv[1], $date))
{
$cal[janvier]=1;
$cal[fevrier]=2;
$cal[mars]=3;
$cal[avril]=4;
$cal[mai]=5;
$cal[juin]=6;
$cal[juillet]=7;
$cal[aout]=8;
$cal[septembre]=9;
$cal[octobre]=10;
$cal[novembre]=11;
$cal[decembre]=12;
$month = $cal[strtolower($date[3])];
echo mktime($date[5], $date[6], $date[7], $month, $date[2], $date[4])."\n";
}
else
	echo "Wrong Format\n";
?>
