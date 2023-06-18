
<?php
include "dom/simple_html_dom.php";
echo "
#################################
#                               #
#       PHP Simple Dorking      #
#                               #
#################################

";
echo "Enter your search keywoard: ";
$search = urlencode(trim(fgets(STDIN)));

function cari($key_dork,$opsi=10){
$asu = "https://www.google.com/search?q={$key_dork}&start={$opsi}";
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
}
$no_page = [10,20,30,40,50,60,70,80,90];
$x = 0;
while(true){
	if(!$search){
		echo "Please enter your keywoard!\n";
		exit;
	}
	if($x===9){
		echo "The page has reached the limit!\n";
		exit;
	}
	echo "\n";
	cari($search,$no_page[$x++]);
	echo "Continue or Not(Y/n): ";
	$opsi = trim(fgets(STDIN));
	if($opsi==="y"){
		continue;
	}else{
		exit;
	}
}
