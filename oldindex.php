<?php include('phpIncludes/functions.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="Style/index.css" />
  <title>St. George's Webpage index.php</title>
</head>

<body>

<center>

<div class="rightShadow">
<div class="leftShadow" >

<table class="mainTable" >
  <tr>
    <td>
      <?php include 'phpIncludes/header.php' ?>
  </td>
  </tr>
  <tr >
  <td class="content" valign="top">

<div class="whiteRounded" align="center">
<img src="images/pushpin.png" width="32" height="32">
<font size="5">St. Georges Courts Now Closed Till May 2013<br>
  Special Thanks To The Volunteers</font>
</div>

<div class="whiteRounded" align="Center">
<img src="images/pushpin.png" width="32" height="32"> <font size="5">New 2013 
Application Forms are being drawn up. </font><br>
Please view the 
<font size="3"><a href="fees.php">St. George's 2012 Application Form</a></font> 
only as a reference.
</div>

<div class="whiteRounded" align="Center">
<img src="images/pushpin.png" width="32" height="32"><font size="6"> <a href="calendar.php">St. George's 2012 Calendar</a></font>
</div>
    
<div class="whiteRounded" align="Center">
<font size="6">St. George's Closed Club Tournament</font><br>
<a href="closed12.php">RESULTS</a> and
<a href="http://sports.webshots.com/album/583379882KCkvyF">PHOTOS</a><br>
&nbsp;</div>

<div align="center" class="whiteRounded">
<h1>
<a href="http://community.webshots.com/user/gerrymar">
C*L*U*B&nbsp;&nbsp;-&nbsp;&nbsp;P*H*&nbsp;<img border="0" src="images/camera.gif" width="45" height="37">
<a href="http://community.webshots.com/user/gerrymar">*T*O*S</a></h1>
</div>

<div class="whiteRounded" align="Center">
<b><font size="5">
<a href="http://www.courtsidecanada.ca/communities/nova_scotia/news/578/">2012 
Atlantic Masters Championship Results</a></font></b><br>
<b><a href="http://sports.webshots.com/album/583238573YQivGP"><font size="4">
PHOTOS</font></a></b> </div>

<center> 

<table  class="contentblock footwear" >
  <tr>
    <td width="25%" bgcolor="#FFFFFF">
    <p align="center">
    <font color="#0000FF" face="Comic Sans MS">
    <a href="sneekers.htm"><img style="margin-left:20px;" src="images/sneakers.jpg" align="left" width="105" height="100" /></a>
    </font>
    </p>
    </td>
    <td width="75%" bgcolor="#FFFFFF" background="images/gradient-blu.jpg">
    <p align="center"><font color="#0000FF" face="Arial"><a href="sneekers.htm">
    &nbsp;Improper footwear will destroy our courts.</a><br />
    <a href="sneekers.htm"><br />Checkout which styles ARE and ARE NOT acceptable for St. George's Har-Tru courts. </a> </font>
    </p></td>
  </tr>
</table>

</center> 

<div class="whiteRounded textPadding" >
            
            <h2>St. George's E-mail List</h2>
            <p>
            Please fill out the form below if you wish to be on our e-mail list.</p>   
           
           <!-- 
           For information on how to setup a form using CSS instead of a kludgy table.
           http://articles.sitepoint.com/article/fancy-form-design-css/
           -->
           
           <form action="mailto:gerrymar@ns.sympatico.ca?subject=St.%20George's%20Subscription%20Request" 
           method="post" enctype="text/plain" name="mail" id="mail" onSubmit="return isMailReady(this);">
           <fieldset>
             
           <ul>
             <li>
               <label for="fullname" >Name:</label>
               <input type="text" name="fullname" onFocus="getValue(this)" onBlur="setValue(this)" size="41" />
             </li><li>
               <label for="province" >Province:</label> 
               <input type="text" name="province" onFocus="getValue(this)" onBlur="setValue(this)" size="41" />
             </li><li>
               <label for="email" >Email:</label> 
               <input type="text" name="email" onFocus="getValue(this)" onBlur="setValue(this)" size="41" />
             </li>
           </ul>
           
           <center>
           <div style="margin-bottom:20px;" >
             <input type="submit" value="Send" />
             <input type="reset" value=" Reset" />
           </div>
           </center>
           
           </fieldset>      
           </form>
           
           &nbsp;
           
   </div>

                    

</td>

   </tr>


  <tr >
  <td class="content" valign="top">

&nbsp;</td>

   </tr>


 </table>
 <?php include 'phpIncludes/footer.php' ?> 
 </div>
 </div>
 
</center>

  </h2>

</body>

</html>