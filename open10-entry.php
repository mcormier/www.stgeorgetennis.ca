<!DOCTYPE html>
<html>

<head>
  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="style/index.css" />
</head>

<body>


<center>

<!-- <table class="mainTable" cellpadding="0" cellspacing="0" > -->
<table class="mainTable" >
  <tr>
    <td>
      <?php include 'phpIncludes/header.php' ?>
  </td>
  </tr>
  
  
  <tr >
   
    <td class="content" valign="top">
      <center>   
          
<div class="whiteRounded" >
  <table border="0" cellpadding="2" width="90%">
    <tr>
      <td width="90%" align="center">
        <table border="0" cellspacing="1" style="border-collapse: collapse" width="100%" id="AutoNumber1">
        <tr>
         <td width="100%" valign="top" align="center">
         <font size="5" face="Verdana"><br>St. George's 2010 Open <br>Registration Form.</font>
         </td>
     </tr>
  </table>
        
      </td>
    </tr>
  </table><br>
<form method="POST" action="entrymail/enq.pl">
<INPUT TYPE="hidden" NAME="recipient" VALUE="gerrymar@ns.sympatico.ca">
<INPUT TYPE="hidden" NAME="subject" VALUE="St. George's Open Tennis Tournament">
<INPUT TYPE="hidden" NAME="redirect" VALUE="http://www.stgeorgetennis.ca/confirmation.html">
<INPUT TYPE="hidden" NAME="env_report" VALUE="HTTP_REFERER">

<table width="100%">

<tr>
<TD width="162" height="25" align="left">Tournament Name:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="TournamentName" size=56 maxlength=40 value=" St. George's 2010 Open Tennis Tournament">
 mandatory
</TD>
</tr>
<TR><TD width="162" height="25" align="left">Name:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="realname" size=56 maxlength=40 value=""> mandatory
</TD></TR>
<TR><TD width="162" height="25" align="left"> Address &amp; Postal Code:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="address" size=56 maxlength=40 value=""> mandatory
</TD></TR>
<tr>
<TD width="162" height="25" align="left">Phone Number:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="phonenumber" size=56 maxlength=40 value=""> mandatory
</TD>
</tr>
<TR><TD width="162" height="25" align="left">E-Mail Address:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="email" size=56 maxlength=40 value=""> mandatory
</TD></TR>

<TR><TD width="162" height="25" align="left">Home Club:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="club" size=56 maxlength=40 value=""> mandatory
</TD></TR>

<TR><TD width="162" height="25" align="left">TNS Number:</TD>
<TD width="370" height="25" colspan="2" align="left">
<INPUT type="text" name="TNSNumber" size=56 maxlength=40 value=""> </TD></TR>

<TR><TD width="162" height="25" align="left">&nbsp;</TD>
<TD width="370" height="25" valign="left" align="left" colspan="2">
</TD>
</TR>

<TR><TD width="162" height="25" align="left">Men's Singles</TD>
<TD width="22" height="25" valign="middle" align="center">
<input type="checkbox" name="Men's Singles" value="yes">  
</TD>
<TD width="454" height="25" valign="middle" align="left">
</TD></TR>
<tr>
<TD width="162" height="25" align="left">Men's Doubles</TD>
<TD width="22" height="25" valign="middle" align="center">
<input type="checkbox" name="Men's Doubles" value="yes"></TD>
<TD width="454" height="25" valign="middle" align="left">
<INPUT type="text" name="Men's Double's Partner" size=52 maxlength=40 value="< -- Partner's Name & Contact No. -- >"></TD>
</tr>
<tr>
  <TD width="162" height="25" align="left">Women's Singles</TD>
<TD width="22" height="25" valign="middle" align="center">
<input type="checkbox" name="Women's Singles" value="yes"></TD>
<TD width="454" height="25"></TD>
</tr>
</tr>
<TR><TD width="162" height="25" align="left">Women's Doubles</TD>
<TD width="22" height="25" valign="middle" align="center">
<input type="checkbox" name="Women's Doubles" value="yes">  
</TD>
<TD width="454" height="25" valign="middle" align="left">
<INPUT type="text" name="Women's Double's Partner" size=52 maxlength=40 value="< -- Partner's Name & Contact No. -- >"></TD></TR>

<tr>
  <TD width="162" height="25" align="left">
<b>Comments</b></TD>

<TD width="350" height="25" colspan="2" align="left">
<p align="left"><textarea name="Comments" rows="2" cols="42"></textarea>
</p>
</TD>
</tr>

<CENTER>

<TR><TD width="532" height="25" colspan="3" align="center">

<p align="center">
<input type="hidden" name="required" value="realname,address,phonenumber,email,club" />
<INPUT TYPE="submit" value="Submit Form">
<INPUT TYPE="reset" value="Clear All Fields">
</p>

</TD></TR>
</TABLE>
</FORM>

  
</div>
          

</td>
</tr>
</table>
 
 
</center>

 <?php include 'phpIncludes/footer.php' ?> 

</body>

</html>