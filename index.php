<?php
session_start();
$_SESSION = array();

include("simple-php-captcha.php");
$_SESSION['captcha'] = captcha();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Example &raquo; A simple PHP CAPTCHA script</title>
        <style type="text/css">
        	PRE {
        		border: solid 1px #BBB;
        		padding: 10px;
        		margin: 2em;
        	}
        	
        	IMG {
        		margin: 0 2em;
        	}
        </style>
    </head>
    <body>
        <form name="contactform" method="post" action="<?php $_SERVER['contactform/PHP_SELF'];?>">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
<td style="width:150px">&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<!--<tr>
<td style="width:150px"><strong>Security Code:</strong></td>
	<td><img src="/captcha/captcha.php" id="captcha" /><br/>


CHANGE TEXT LINK
<a href="#" onclick="
    document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br/><br/>




<input type="text" name="captcha" id="captcha-form" autocomplete="off" /></td>
</tr> -->
<tr>
	<td style="width:150px"><strong>Please enter: *</strong></td>
	<td><?php
         echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';
        
         ?><br />

		 <?php //if ($fehler["captcha"] != "") { echo $fehler["captcha"]; } ?><input type="text" name="securitycode" maxlength="150" style="width:260px" value="" size="20" /></td>

</tr>

<tr>
	<td style="width:150px">&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td style="width:150px">&nbsp;</td>
	<td style="font-size:11px">Advice: Fields with <span class="pflichtfeld">*</span> have to be filled.</td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
        
    </body>
</html>
