<?php

$dbh = 'localhost';
$dbd = 's8p2uq9m_prospex';
$dbu = 's8p2uq9m_dsinger';
$dbp = 'Ll!ONgFoR272';

$dbs = new mysqli($dbh, $dbu, $dbp);
$dbs->select_db($dbd);

function update_count($dbs, $hit_file, $ref_link) {
	if($kount = $dbs->query("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'")){
		if(!$k = $kount->fetch_row()) {
			$k[0] = generate_counter($dbs, $hit_file, $ref_link);
		}
	}
	else {
		$k[0] = generate_counter($dbs, $hit_file, $ref_link);
	}	
	
	
	$k[0]++;
	$dbs->query("UPDATE hits SET `count` = '$k[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = '$ref_link'");

//	echo $k[0];
	if($kount2 = $dbs->query("SELECT `count` FROM hits WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'")){
		if(!$k2 = $kount2->fetch_row()) {
			$k2[0] = generate_counter($dbs, $hit_file, 'all');
		}
	}
	else {
		$k2[0] = generate_counter($dbs, $hit_file, 'all'); 
	}

	$k2[0]++;
	$dbs->query("UPDATE hits SET `count` = '$k2[0]' WHERE `hitpage` = '$hit_file' AND `camefrom` = 'all'");
}
function generate_counter($dbs, $hit_file, $ref_link) {
	$dbs->query("INSERT INTO hits(`count`, `hitpage`, `camefrom`) VALUES(0, '".$hit_file."', '".$ref_link."')");
	return 0;
}
?>
<meta name='keywords' content='piano, piano lessons, lessons, Douglas, Michael, Singer, Douglas Michael Singer, Douglas Singer, Hastings, NE, Nebraska, innovative, all, all ages, ages, children, kids, christian, values, homeschool, group, group piano' />
<meta name="robots" content="index, follow"/>
<meta name="web_author" content="Douglas Michael Singer, LLC"/>
<meta name="rating" content="safe for kids"/>
<meta name="copyright" content="2012, Douglas Michael Singer, LLC"/>
<meta name="revisit-after" content="9 days"/> 
<meta name="robots" content="noydir"/>
<meta name="language" content="English"/>
<meta name="slurp" content="noydir"/>
<meta name="distribution" content="global"/>
<meta name="googlebot" content="noodp"/>
<meta name="googlebot" content="noarchive"/>

