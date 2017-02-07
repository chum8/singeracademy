<?php
include("db-1.inc");
//$firstGenerate = true; //'true' if database has not yet been created
$firstGenerate = false; //'false' if database has been created and required task is creating new tables
$d = new dbTasks;
if (!$d->generate()) {
	buildTables();
}
else buildTables();/*
if ($firstGenerate) { 
	$d = new dbTasks;
	echo $d->generate(); //This generates the database.  Only needed the first time the program is executed.
}
else buildTables();
 */
function buildTables() {
	$d = new dbTasks;
	echo $d->connect();

	//I have commented out lines that have been successfully debugged and executed to create a new table.  Uncomment when ready to create tables on fresh database.
	
	echo $d->createTable(true, "hits", "count MEDIUMINT(7) UNSIGNED NOT NULL", "hitpage VARCHAR(56)", "camefrom VARCHAR(56)");
	echo $d->createTable(true, "humans", "firstName VARCHAR(36)", "lastName VARCHAR(56)", "DOB VARCHAR(10)", "gender CHAR(1)", "streetAddress VARCHAR(116)", "city VARCHAR(36)", "state VARCHAR(16)", "zipCode VARCHAR(10)", "parentFirstName1 VARCHAR(36)", "parentLastName1 VARCHAR(56)", "parentFirstName2 VARCHAR(36)", "parentLastName2 VARCHAR(56)", "parentPrimaryPhone VARCHAR(16)", "parentSecondaryPhone VARCHAR(16)", "email VARCHAR(96)", "pianoExperience VARCHAR(720)", "otherExperience VARCHAR(720)", "studentSkills VARCHAR(72)", "schedule VARCHAR(720)");

	
}




//$dbs = new mysqli($dbHost, $dbUser, $dbPass/*, $dbName, $dbPort, $dbSocket*/) or die('Error code was ' .mysqli_connect_error());
//if (!$dbs = new mysqli($dbh, $dbu, $dbp)) die(mysql_error());
//$dbs = new mysqli($dbHost, $dbUser, $dbPass);


?>
<!-- <meta name='keywords' content='piano, piano lessons, lessons, Douglas, Michael, Singer, Douglas Michael Singer, Douglas Singer, Hastings, NE, Nebraska, innovative, all, all ages, ages, children, kids, christian, values, homeschool, group, group piano' />
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
-->
