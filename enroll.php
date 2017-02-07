<?php 
//require_once('lib-1.inc');
require_once('lib-2.inc');
//$dbs = mysql_connect($dbh, $dbu, $dbp);
//if (!$dbs) die("FATAL DATABASE ERROR! Please excuse our servers and call (765) 674 3522 to apply for piano lessons." . mysql_error());
//mysql_select_db($dbd)
//or die("no bueno" . mysql_error());

$ref_link = 'direct';
$hit_file = 'enroll';
update_count($dbs, $hit_file, $ref_link);

class human
{	var $dbs = "";
	var $entry = array();
	var $renderstudent = array("First Name", "Last Name", "D.O.B.", "Gender", "Address", "City", "State", "ZIP Code", "Parent or Guardian #1 First Name", "Parent or Guardian #1 Last Name", "Parent or Guardian #2 First Name", "Parent or Guardian #2 Last Name", "Primary Phone", "Secondary Phone", "Question 1", "Question 2", "Skills", "Question 3");
	var $renderparent = array("First Name", "Last Name", "Primary Phone", "Secondary Phone", "E-mail Address");

	public function renderentries($how)
	{
		switch ($how)
		{
			case 0:
			case "student":
				$renderer = $this->renderstudent;
				break;
			case 1:
			case "parent":
				$renderer = $this->renderparent;
				break;
		}

		for ($i = 0; $i <= count($this->entry) - 1; $i++)
		{
			if ($renderer[$i]) echo $renderer[$i].": ".$this->entry[$i]."<br />"; else echo "not defined: ".$this->entry[$i]."<br />";
		}
	}
	

	public function extractcount() {return count($this->entry);}
	public function extractitem($n) {return $this->entry[$n];}	
	public function addentry($newentry) {$this->entry[]=$newentry;}
	public function clean() {$this->entry = NULL;}

}
function checkedandsanitized($a, $db_)
{
	$a = stripslashes($a);
	$a = htmlentities($a);
	$a = strip_tags($a);
	$a = $db_->real_escape_string($a);
	return $a;
}

function getgender($n)
{	if ($n=="0") return "M"; 
	else if ($n=="1") return "F";
	else return "X";
}

function myskills($a, $db_)
{
	$currentskills = "";
	for ($i = 0; $i <= count($a) - 1; $i++)
	{
		if (checkedandsanitized($a[$i], $db_) == "0") $currentskills .= "treble  ";
		else if (checkedandsanitized($a[$i], $db_) == "1") $currentskills .= "bass  ";
		else if (checkedandsanitized($a[$i], $db_) == "2") $currentskills .= "chords  ";
		else if (checkedandsanitized($a[$i], $db_) == "3") $currentskills .= "improvise  ";
		else if (checkedandsanitized($a[$i], $db_) == "4") $currentskills .= "roman  ";
		else if (checkedandsanitized($a[$i], $db_) == "5") $currentskills .= "interval  ";

	}
	return $currentskills;
}
function buildquery($qry, $valuetoadd)
{		$qry .= "'$valuetoadd', ";
		return $qry;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Douglas Michael Singer | Piano lessons, Classical, Jazz and Improvisation | Hastings, NE | 68901</title>
<link rel="stylesheet" type="text/css" href="lusinghiera.css" />
</head>

<body>

<div id="everything">

<div id="banner"></div>

<div id="navigation">
	<div class="small_spacer"><a href="lessons.php">More Information</a></div>
	<div class="small_spacer"><a href="bio.php">Instructor Bio</a></div>
	<div class="small_spacer"><a href="index.php">Return Home</a></div>
</div>
<br />

<div id="enroll">

<?php

$specialchar = " -- ";
$studentnum = -1;

if (isset($_POST['student_first_name_1']) and $_POST['student_first_name_1'] != "") {
	++$studentnum;
	$cust[$studentnum] = new human();
	$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_first_name_1'], $dbs)); 
	if (isset($_POST['student_last_name_1'])) $cust[$studentnum]->addentry(checkedandsanitized($_POST['student_last_name_1'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_DOB_1'])) $cust[$studentnum]->addentry(checkedandsanitized($_POST['student_DOB_1'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_sex_1'])) $cust[$studentnum]->addentry(getgender(checkedandsanitized($_POST['student_sex_1'], $dbs))); else $cust[$studentnum]->addentry($specialchar);
}


if (isset($_POST['student_first_name_2']) and $_POST['student_first_name_2'] != "")  {
	++$studentnum; 
	$cust[$studentnum] = new human();
	$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_first_name_2'], $dbs)); 
	if (isset($_POST['student_last_name_2'])) $cust[$studentnum]->addentry(checkedandsanitized($_POST['student_last_name_2'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_DOB_2'])) $cust[$studentnum]->addentry(checkedandsanitized($_POST['student_DOB_2'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_sex_2'])) $cust[$studentnum]->addentry(getgender(checkedandsanitized($_POST['student_sex_2'], $dbs))); else $cust[$studentnum]->addentry($specialchar);
}

if (isset($_POST['student_first_name_3']) and $_POST['student_first_name_3'] != "") {
	++$studentnum;
	$cust[$studentnum] = new human();
	$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_first_name_3'], $dbs)); 
	if (isset($_POST['student_last_name_3']))$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_last_name_3'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_DOB_3']))$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_DOB_3'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_sex_3']))$cust[$studentnum]->addentry(getgender(checkedandsanitized($_POST['student_sex_3'], $dbs))); else $cust[$studentnum]->addentry($specialchar);
}

if (isset($_POST['student_first_name_4']) and $_POST['student_first_name_4'] != "") {
	++$studentnum;
	$cust[$studentnum] = new human();
	$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_first_name_4'], $dbs)); 
	if (isset($_POST['student_last_name_4']))$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_last_name_4'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_DOB_4']))$cust[$studentnum]->addentry(checkedandsanitized($_POST['student_DOB_4'], $dbs)); else $cust[$studentnum]->addentry($specialchar);
	if (isset($_POST['student_sex_4']))$cust[$studentnum]->addentry(getgender(checkedandsanitized($_POST['student_sex_4'], $dbs))); else $cust[$studentnum]->addentry($specialchar);
}

for ($i = 0; $i <= $studentnum; $i++){
if (isset($_POST['student_address'])) $cust[$i]->addentry(checkedandsanitized($_POST['student_address'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_city']))$cust[$i]->addentry(checkedandsanitized($_POST['student_city'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_state']))$cust[$i]->addentry(checkedandsanitized($_POST['student_state'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_ZIP']))$cust[$i]->addentry(checkedandsanitized($_POST['student_ZIP'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['guardian_1_first_name'])) $cust[$i]->addentry(checkedandsanitized($_POST['guardian_1_first_name'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['guardian_1_last_name']))$cust[$i]->addentry(checkedandsanitized($_POST['guardian_1_last_name'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['guardian_2_first_name']))$cust[$i]->addentry(checkedandsanitized($_POST['guardian_2_first_name'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['guardian_2_last_name']))$cust[$i]->addentry(checkedandsanitized($_POST['guardian_2_last_name'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['primary_phone']))$cust[$i]->addentry(checkedandsanitized($_POST['primary_phone'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['secondary_phone']))$cust[$i]->addentry(checkedandsanitized($_POST['secondary_phone'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['email']))$cust[$i]->addentry(checkedandsanitized($_POST['email'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_piano_experience']))$cust[$i]->addentry(checkedandsanitized($_POST['student_piano_experience'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_other_experience']))$cust[$i]->addentry(checkedandsanitized($_POST['student_other_experience'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_skills']))$cust[$i]->addentry(myskills($_POST['student_skills'], $dbs)); else $cust[$i]->addentry($specialchar);
if (isset($_POST['student_hours']))$cust[$i]->addentry(checkedandsanitized($_POST['student_hours'], $dbs)); else $cust[$i]->addentry($specialchar);
$query = "INSERT INTO humans VALUES (";
for ($j  = 0; $j <= $cust[$i]->extractcount() - 2; $j++) {$query = buildquery($query, $cust[$i]->extractitem($j));}
$lastvalue = $cust[$i]->extractitem($cust[$i]->extractcount() - 1);
$query .= "'$lastvalue')";
//if (!mysql_query($query, $dbs)) die("<br />Oops!  For some reason, your data did not go through.  Please call (765) 674 3522 to apply in person.  Our apologies!<br /><br /><a href='index.php' class='underlined'>return home</a><a href='lessons.php' class='underlined'> | more information</a><a href='bio.php' class='underlined'> | instructor bio</a>" . mysql_error());

if (!$dbs->query($query)) die("<br />Oops!  Your data did not go through because ".$dbs->error." using query: ".$query."  Please call (765) 674 3522 to apply in person.  Our apologies!<br /><br /><a href='index.php' class='underlined'>return home</a><a href='lessons.php' class='underlined'> | more information</a><a href='bio.php' class='underlined'> | instructor bio</a>");

}


?>
<br /><br />
<span class="emphasize">Congratulations!  Your application to study piano with Douglas Singer has been successfully submitted!  Thank you!</span><br />
<br />Student Details<br />
<?php 
echo "<div class=\"small_spacer\">First Name(s)<br />";
for ($i = 0; $i <= $studentnum; $i++){
echo "{$cust[$i]->extractitem(0)}<br />";}
echo "</div>";

echo "<div class=\"small_spacer\">Last Name(s)<br />";
for ($i = 0; $i <= $studentnum; $i++){
echo "{$cust[$i]->extractitem(1)}<br />";}
echo "</div>";

echo "<div class=\"spacer\">D.O.B.<br />";
for ($i = 0; $i <= $studentnum; $i++){
echo "{$cust[$i]->extractitem(2)}<br />";} 
echo "</div>";

echo "<div class=\"long_spacer\">Street Address<br />";
echo "{$cust[0]->extractitem(4)}</div>";
echo "<div class=\"small_spacer\">City<br />";
echo "{$cust[0]->extractitem(5)}</div>";
echo "<div class=\"small_spacer\">State<br />";
echo "{$cust[0]->extractitem(6)}</div>";
echo "<div class=\"spacer\">ZIP Code<br />";
echo "{$cust[0]->extractitem(7)}</div>";
echo "<div class=\"long_spacer\">Parent/Guardian Details<br /></div><div class=\"small_spacer\">First Name<br />";
echo "{$cust[0]->extractitem(8)}<br />{$cust[0]->extractitem(10)}</div>";
echo "<div class=\"small_spacer\">Last Name<br />";
echo "{$cust[0]->extractitem(9)}<br />{$cust[0]->extractitem(11)}</div>";
echo "<div class=\"long_spacer\">Phone Contact Details<br /></div><div class=\"small_spacer\">Primary Phone<br />";
echo "{$cust[0]->extractitem(12)}</div>";
echo "<div class=\"small_spacer\">Secondary Phone<br />";
echo "{$cust[0]->extractitem(13)}</div>";
//mysql_close($dbs);
$dbs->close();
?>
<div class="long_spacer">
<a href=#everything class="underlined">return to the top</a><a href="lessons.php" class="underlined"> | more information</a><a href="bio.php" class="underlined"> | instructor bio</a><a href="index.php" class="underlined"> | return home</a>
<br /><br />
Design and content copyright (c) 2012-2013, Douglas Michael Singer, LLC.
</div>

</div>
</div>

</body>
</html>
