<!DOCTYPE html>
<html>

<HEAD>

  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="style/index.css" />

</head>

<body>


<center>
<div class="rightShadow">
<div class="leftShadow" >
<table class="mainTable" >

  <tr>
    <td >
      <?php include 'phpIncludes/header.php' ?>
  </td>
  </tr>
    

  
  <tr>
  

    <td class="content" valign="top">
    </center>



<CENTER>

<form method="POST" action="entrymail/suggestion-poll.pl">

<INPUT TYPE="hidden" NAME="recipient" VALUE="president@stgeorgetennis.ca">
<INPUT TYPE="hidden" NAME="subject" VALUE="St. George's Suggestion Box">
<INPUT TYPE="hidden" NAME="redirect" VALUE="http://www.stgeorgetennis.ca/confirmation.php">
<INPUT TYPE="hidden" NAME="env_report" VALUE="HTTP_REFERER">

<table >
    <TR><TD height="25" align="left" colspan="2">
      <p align="center"><font size="5">
      <img border="0" src="images/suggestionbox.gif" width="94" height="62"><br>
      ST. GEORGE'S SUGGESTION BOX</font><br>
      DO YOU HAVE AN IDEA(s) ON HOW TO IMPROVE OUR TENNIS CLUB?<br>
      The board would love to hear from you.&nbsp;&nbsp;&nbsp; 
      After all, it is your club. </TD>
    </TR>
    <TR><TD width="83" height="25" align="left" ><font size="2">&nbsp;Name:</font></TD>
    <TD width="542" height="25" align="left">
    <INPUT type="text" name="realname" size=43 maxlength=40 value=""> [required]
    </TD></TR>
    <TR><TD width="83" height="25" align="left"><font size="2">&nbsp;E-Mail&nbsp;:</font></TD>
    <TD width="542" height="25" align="left">
    <INPUT type="text" name="email" size=43 maxlength=40 value=""> [required]
    </TD></TR>
    
    <tr>
      <TD height="25" align="center" colspan="2" >
      
    <font size="2" color="#000066"><span>&nbsp;&nbsp;&nbsp;&nbsp; 
    ALL suggestions are held in confidence and go directly to the president. You 
    will receive a confirmation e-mail.&nbsp;&nbsp; </span></font>
    &nbsp;
     </TD>
    </tr>
    <br>
    <tr>
      <TD width="83" height="25" align="left" >
    <b><font size="2">&nbsp;Comments</font></b></TD>
    
    <TD width="204" height="65" align="left">
    <textarea name="Comments" rows="9" cols="50"></textarea><br>
    </TD>
    </tr>
    
    <TR><TD height="25" colspan="2" align="center">
    
    <p align="center">
      <input type="hidden" name="required" value="realname,email" />
      <INPUT TYPE="submit" value="Submit Form">
      <INPUT TYPE="reset" value="Clear All Fields">

<!-- start of ReCaptcha -->
<?php

require_once('recaptchalib.php');

// Get a key from http://recaptcha.net/api/getkey
$publickey = "6LcUIwgAAAAAAKnVZE65HtUXkGMK58ib0a1jNP1c";
$privatekey = "6LcUIwgAAAAAAEi8-1QKj_BFpZp37ZuXxFNTL9RQ";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?>
<!-- END of ReCaptcha -->

    </p> 

    </TD>
  </TR>
</TABLE>
</FORM>
</CENTER>

</td>


   </tr>


  </tr>
 </table>
  <?php include 'phpIncludes/footer.php' ?> 
 </div>
 </div>
</center>


</BODY>