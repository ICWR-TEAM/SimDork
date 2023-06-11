<?php
include "dom/simple_html_dom.php";
echo "
#################################
#				#
#	PHP Simple Dorking	#
#				#
#################################

";
echo "Enter your search keywoard: ";
$key_dork = urlencode(trim(fgets(STDIN)));
$asu = "https://www.google.com/search?q={$key_dork}&start=10";
$no = 1;
$anj = [];
foreach(file_get_html($asu)->find("a") as $jancok){
	$anj[] = $jancok->getAttribute("href");
}
$pisah = [];
foreach($anj as $key=>$value){
	if($key<16){
	}elseif($key>25){
	}else{
		$pisah[] = explode("&amp;sa",str_replace("/url?q=","",$value));
	}
}
foreach($pisah as $key_akhir=>$akhir){
	echo "Result: ".$akhir[0]."\n\n";
}
