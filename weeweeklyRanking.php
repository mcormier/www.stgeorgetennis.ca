<!DOCTYPE html>
<html>

<head>
  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="style/weeweekly.css" />
</head>

<body onLoad="setActiveTab('formulaMenuItem');"><center>

<div class="rightShadow">
<div class="leftShadow" >

<table class="mainTable">
 <tr>
   <td >
     <?php include 'phpIncludes/header.php' ?> 
     <?php include 'phpIncludes/weeWeeklyMenu.php' ?>
   </td>
 </tr>
 
 <tr>
 
 
 
<td class="content" valign="top">
<center>


<p align="center">



  
  <a name="calculations"></a>
  <div class="guidelines">
  <center>
  <h2>Wee Weekly Ranking Formula</h2>
  For each tournament the draw is assigned the following points:<br>
  <BR> 
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
    <tr>
      <td width="37%" colspan="2" nowrap align="center" valign="top"> 
      S I N G L E S</td>
      <td width="27%" nowrap align="center" valign="top">TOURNAMENT</td>
      <td width="36%" colspan="2" nowrap align="center" valign="top"> 
      D O U B L E S</td>
    </tr>
    <tr>
      <td width="17%" nowrap align="center" valign="top">Main</td>
      <td width="18%" nowrap align="center" valign="top">Consolation</td>
      <td width="30%" nowrap align="center" valign="top">Draw / Round</td>
      <td width="15%" nowrap align="center" valign="top">Main</td>
      <td width="20%" nowrap align="center" valign="top">Consolation</td>
    </tr>
    <tr>
      <td width="18%" nowrap align="center" valign="top">45<br>
      30<br>
      20<br>
      14<br>
      10</td>
      <td width="19%" nowrap align="center" valign="top">12<br>
      8<br>
      5<br>
      3<br>
      2</td>
      <td width="27%" nowrap align="center" valign="top">W i n n e r<br>
      F i n a l i s t<br>
      Semi - Finalist<br>
      Quarter - Finalist<br>
      Round Of 16 Participants</td>
      <td width="16%" nowrap align="center" valign="top">30<br>
      20<br>
      14<br>
      10</td>
      <td width="20%" nowrap align="center" valign="top">12<br>
      8<br>
      5<br>
      3</td>
    </tr>
  </table>
  </center>
  
  <p align="left"><BR>
  Each player's overall performance is assessed after each tournament by 
  dividing his/her accumulated &quot;Total Points&quot; by the applicable &quot;Current Division 
  Factor&quot;. All calculations are done on results accumulated up to and including 
  the pass 12 months.</p>
  <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
    <tr>
      <td width="100%" align="center">FORMULA<br>
      <i>&nbsp;CD (Current Division Factor) = 1.5 + Tm (Times played) x 0.5<br>
      </i>Avg. Pts = TTL Pts / CD</td>
    </tr>
  </table>
  <center>
  <p>Players are seeded according to their rankings. Rankings are updated bi-weekly.<br>
  </p>
  </center>
  </div>
  
    
    
    &nbsp;</td>
    
    </tr>
 </table>
  <?php include 'phpIncludes/footer.php' ?> 
 </div>
 </div>
 
</center>

</body>

</html>