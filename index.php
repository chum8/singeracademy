<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Singer Academy offers lessons in piano, jazz, musical arts and more in Hastings, NE.</title>
<meta name='robots' content='noarchive'/>
<meta name='description' content='Singer Academy for the musical arts, Hastings, Nebraska, Douglas Michael Singer' />
<meta name='keywords' content='douglas singer, douglas michael singer, singer academy, academy, piano, nebraska, kawai, jazz, improvise, studio, douglas, singer, hastings, NE, 68901, 68902, adams, county, adams county' />
<?php
require_once('lib-2.inc');

if (isset($_GET['referer'])) $ref_link = $_GET['referer'];
else $ref_link = 'direct';
$hit_file = 'index';
update_count($dbs, $hit_file, $ref_link);

?>
<link rel="stylesheet" type="text/css" href="lusinghiera.css" />
<script type="text/javascript" language="javascript">
function validate(form){

		fail = validatestudent_first_name(form.student_first_name_1.value, "1")
		fail += validatestudent_last_name(form.student_last_name_1.value, "1")

		fail += validatestudent_DOB(form.student_DOB_1.value, "1")
		fail += validatestudent_sex(form.student_sex_1, "1")

		if ((form.student_first_name_2.value == "") && (form.student_last_name_2.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_2.value, "2")
			fail += validatestudent_last_name(form.student_last_name_2.value, "2")
			fail += validatestudent_DOB(form.student_DOB_2.value, "2")
			fail += validatestudent_sex(form.student_sex_2, "2")}


		if ((form.student_first_name_3.value == "") && (form.student_last_name_3.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_3.value, "3")
			fail += validatestudent_last_name(form.student_last_name_3.value, "3")
			fail += validatestudent_DOB(form.student_DOB_3.value, "3")
			fail += validatestudent_sex(form.student_sex_3, "3")}

		if ((form.student_first_name_4.value == "") && (form.student_last_name_4.value == "")) {}
		else {
			fail += validatestudent_first_name(form.student_first_name_4.value, "4")
			fail += validatestudent_last_name(form.student_last_name_4.value, "4")
			fail += validatestudent_DOB(form.student_DOB_4.value, "4")
			fail += validatestudent_sex(form.student_sex_4, "4")}
	
		fail += validatestudent_address(form.student_address.value)
		fail += validatestudent_city(form.student_city.value)
		fail += validatestudent_ZIP(form.student_ZIP.value)
		fail += validateprimary_phone(form.primary_phone.value)
		if (fail == "") return true
		else { alert(fail); return false; } 
	}
function validatestudent_first_name(field, nnum) {
		if (field == "") return "Please enter the first name for student #" + nnum + ".\n"
 		return ""
}
function validatestudent_last_name(field, nnum) {
		if (field == "") return "Please enter the last name for student #" + nnum + ".\n"
		return ""
}
function validatestudent_DOB(field, nnum) {
		if (field == "") return "Please enter a valid DOB for student #" + nnum + ".\n"
		return ""
}
function validatestudent_sex(field, nnum) {

		gender_selected = false
		for (i = 0; i <= 1; i++)		{ 	
			if (field[i].checked) {
					gender_selected = true
			}
		}
		if (gender_selected) return ""
		return "Please select student gender for student #" + nnum  + ".\n"
}
function validatestudent_address(field) {
		if (field == "") return "Please enter student address.\n"
		return ""
}
function validatestudent_city(field) {
		if (field == "") return "Please enter student city.\n"
		return "";
}
function validatestudent_ZIP(field) {
		if (field == "") return "Please enter student ZIP code.\n";
		return ""
}
function validateprimary_phone(field) {
		if (field == "") return "Please enter a contact phone number.\n"
		return ""
}
</script>
</head>

<body>

<div id="everything">

<div id="banner"></div>

<div id="navigation">
	<div class="small_spacer"><a href="lessons.php">More Information</a></div>
	<div class="small_spacer"><a href="bio.php">Instructor Bio</a></div>
	<div class="small_spacer"><a href="index.php">Return Home</a></div>
</div>

<div id="enroll">
	<div class="par_spacer">
    <span class="emphasize">UPDATE 2017. This website is an archive of a site that was live 2012 - 2013.  It is fully functional, so if you are viewing it to follow up on my resume, feel free to fill in the form below with test data.<br/><br/>NEW: Lessons with a friend!  Only $59/month per student.  <a href="lessons.php">Click here</a> for more info.</span>
    Welcome to the home page for the Piano Studio of Douglas Michael Singer!<br />The information on this website is current through May 31, 2013.
    Mr. Singer is now teaching lessons at:<br />

    <span class="emphasize_and_center">Moore Music</span>
    <span class="centerer">(402) 463 0776</span>
    <span class="centerer">127 N Lexington Ave</span>
    <span class="centerer">Hastings, NE  68901</span>
    To apply for admittance into Mr. Singer's piano studio, please call him today at <span class="emphasize">(765) 674-3522</span>, or scroll down to
<a href=#application><span class="emphasize">APPLY NOW.</span></a></div>
    <div id="map" class="centerer">
    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=127+N+Lexington+Ave,+Hastings,+NE&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=66.70144,144.492188&amp;ie=UTF8&amp;hq=&amp;hnear=127+N+Lexington+Ave,+Hastings,+Nebraska+68901&amp;t=m&amp;z=14&amp;ll=40.58478,-98.393777&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=127+N+Lexington+Ave,+Hastings,+NE&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=66.70144,144.492188&amp;ie=UTF8&amp;hq=&amp;hnear=127+N+Lexington+Ave,+Hastings,+Nebraska+68901&amp;t=m&amp;z=14&amp;ll=40.58478,-98.393777" style="color:#630;text-align:left">View Larger Map</a></small><br /></div>
<div id="application"><br/>
<span class="emphasize_and_center">PIANO LESSON APPLICATION FORM</span><br/>
	Please submit this form to apply for acceptance into Douglas Michael Singer's piano studio!  You may enter information for up to four students.  More students?  Submit multiple forms or call (765) 674 3522.<br /><br />*Required field<br /></div>
STUDENT INFORMATION.<br />

<form method="post" action="enroll.php" onsubmit="return validate(this)">
	Student #1<br />
	<div class="small_spacer">
	*First Name<br />
	<input type="text" name="student_first_name_1" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	*Last Name<br />
	<input type="text" name="student_last_name_1" maxlength="24" size="12" />
	</div>

	<div class="small_spacer">
	*Birthdate<br />
	<input type="text" name="student_DOB_1" maxlength="8" size="10" /><br />
   	<span class="deemphasize">MM/DD/YY</span>
	</div>

	<div class="small_spacer">
	*Gender<br />
	<input type="radio" name="student_sex_1" value="0"/>M
	<input type="radio" name="student_sex_1" value="1"/>F
	</div>
    
	<div class="long_spacer_no_pad">
    Student #2
    </div>
    
	<div class="small_spacer">
	First Name<br />
	<input type="text" name="student_first_name_2" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	Last Name<br />
	<input type="text" name="student_last_name_2" maxlength="24" size="12" />
	</div>

	<div class="small_spacer">
	Birthdate<br />
	<input type="text" name="student_DOB_2" maxlength="8" size="10" /><br />
	<span class="deemphasize">MM/DD/YY</span>
	</div>

	<div class="small_spacer">
	Gender<br />
	<input type="radio" name="student_sex_2" value="0"/>M
	<input type="radio" name="student_sex_2" value="1"/>F
	</div>

	<div class="long_spacer_no_pad">
    Student #3
    </div>
    
	<div class="small_spacer">
	First Name<br />
	<input type="text" name="student_first_name_3" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	Last Name<br />
	<input type="text" name="student_last_name_3" maxlength="24" size="12" />
	</div>

	<div class="small_spacer">
	Birthdate<br />
	<input type="text" name="student_DOB_3" maxlength="8" size="10" /><br />
	<span class="deemphasize">MM/DD/YY</span>
	</div>

	<div class="small_spacer">
	Gender<br />
	<input type="radio" name="student_sex_3" value="0"/>M
	<input type="radio" name="student_sex_3" value="1"/>F
	</div>
    
   	<div class="long_spacer_no_pad">
    Student #4
    </div>
    
	<div class="small_spacer">
	First Name<br />
	<input type="text" name="student_first_name_4" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	Last Name<br />
	<input type="text" name="student_last_name_4" maxlength="24" size="12" />
	</div>

	<div class="small_spacer">
	Birthdate<br />
	<input type="text" name="student_DOB_4" maxlength="8" size="10" /><br />
	<span class="deemphasize">MM/DD/YY</span>
	</div>

	<div class="small_spacer">
	Gender<br />
	<input type="radio" name="student_sex_4" value="0"/>M
	<input type="radio" name="student_sex_4" value="1"/>F
	</div>
    
	<div class="spacer">
    *Street address<br/>
   	<input type="text" name="student_address" maxlength="50" size="29" />
    </div>
    
	<div class="small_spacer">
	*City<br />
	<input type="text" name="student_city" maxlength="24" size="12" />
	</div>

   	<div class="small_spacer">
	State<br />
	<input type="text" name="student_state" maxlength="24" size="12" />
	</div>

	<div class="small_spacer">
	*ZIP Code<br />
	<input type="text" name="student_ZIP" maxlength="10" size="8" />
	</div>

	<div class="long_spacer">
	PARENT OR GUARDIAN INFORMATION
	(if any student is under age 18)<br />
    </div>
    
	<div class="small_spacer">
	Parent/Guardian<br /> First Name<br />
	<input type="text" name="guardian_1_first_name" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	#1<br />Last Name<br />
	<input type="text" name="guardian_1_last_name" maxlength="24" size="12" />
	</div>
    
    <div class="small_spacer">
	Parent/Guardian<br /> First Name<br />
	<input type="text" name="guardian_2_first_name" maxlength="24" size="12" />
	</div>
	
	<div class="small_spacer">
	#2<br />Last Name<br />
	<input type="text" name="guardian_2_last_name" maxlength="24" size="12" />
	</div>
    
    <div class="long_spacer">
	CONTACT INFO FOR STUDENT(S) or GUARDIAN<br />
    </div>
	
    <div class="small_spacer">
    *Primary phone #<br />
	<input type="text" name="primary_phone" maxlength="14" size="12" />
   	</div>
    
    <div class="small_spacer">
    Secondary phone #<br />
	<input type="text" name="secondary_phone" maxlength="14" size="12" />
   	</div>
    
    <div class="long_spacer">
    E-mail Address<br />
	<input type="text" name="email" maxlength="96" size="20" />
   	</div> 
    
    <div class="long_spacer">
	QUESTIONS FOR STUDENT(S)<br />
    Student(s), please describe your total experience playing piano (input “none” if you are taking piano for the first time):
    <textarea maxlength=720 name="student_piano_experience" cols="52" rows="6" wrap="soft"></textarea>
    </div>
    
    <div class="long_spacer">
    Student(s), please describe your total experience playing instruments OTHER than piano.  Also include voice lessons and choral experience:  
    <textarea maxlength=720 name="student_other_experience" cols="52" rows="6" wrap="soft"></textarea>
	</div>
    
    <div class="long_spacer">
	Student, please check the boxes which correspond to your skills (skip this section if more than one student is applying):<br />
    <input type="checkbox" name="student_skills[]" value="0" />Read treble clef
    <input type="checkbox" name="student_skills[]" value="1" />Read bass clef
    <input type="checkbox" name="student_skills[]" value="2" />Read chord symbols
    <input type="checkbox" name="student_skills[]" value="3" />Improvise<br />
    <input type="checkbox" name="student_skills[]" value="4" />Know what this means:  I, iv, V7
    <input type="checkbox" name="student_skills[]" value="5" />Know what this means:  P4, m6, M7
	</div>
    <div class="long_spacer">
    If you know your schedule, please type in the hours that each student is available to take piano lessons.  Homeschool students or adult students, mornings are a great time for me to teach.
    You may also use this box to enter in any other information you would like me to know.<br />
    <textarea maxlength=720 name="student_hours" cols="52" rows="6" wrap="soft"></textarea>
    </div>
    
    <div class="small_spacer"></div>
    <div class="long_spacer">
    Thank you for your interest in piano lessons with Douglas Michael Singer!  Before clicking "Apply Now," please read the <a class="underlined" href="policies.php" target="_blank">studio terms and policies</a> (a new tab or window will open).  
    <span class="emphasize">By submitting this application, you agree to accept the studio policies should the student be admitted to the studio.</span>
    Mr. Singer will contact you soon regarding the status of your application!  Please feel free to contact him at any time at (765) 674-3522.<br /><br />
	
    <input type="image" name="submit_form" src="images/apply-2.jpg" value="Apply Now!" class="centerer"/>
    </div>
</form>
<br />
<div class="long_spacer">
<a href=#everything class="underlined">return to the top</a><a href="lessons.php" class="underlined"> | more information</a><a href="bio.php" class="underlined"> | instructor bio</a><a href="index.php" class="underlined"> | return home</a>
</div>
<div class="long_spacer">
Design and content copyright (c) 2012-2013, Douglas Michael Singer, LLC.
</div>
</div>
</div>
</body>
</html>
