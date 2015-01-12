<!DOCTYPE html>
<html>

<head>
  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="style/calendar11.css" />
  <link rel="stylesheet" type="text/css" href="calendar/calendar13.css" />
</head>

<body><center>

<div class="rightShadow">
<div class="leftShadow" >

<table class="mainTable">
<tr>
  <td>
    <?php include 'phpIncludes/header.php' ?> 
    <?php include 'phpIncludes/calendarSubmenu.php' ?>


    <?php $now = date('Y-m-d');
        if ($now < date('2014-05-01') ) { include 'calendar/April.html'; }
     ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-06-01')) { include 'calendar/May.html'; } ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-07-01')) { include 'calendar/June.html'; } ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-08-01')) { include 'calendar/July.html'; } ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-09-01')) { include 'calendar/August.html'; } ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-10-01')) { include 'calendar/September.html'; } ?>
    <div style="clear:both;"/>
<?php if ($now < date('2014-11-01')) { include 'calendar/October.html'; } ?>
    <div style="clear:both;"/>
<?php  include 'calendar/November.html';  ?>

  </td>
</tr>
</table>
<?php include 'phpIncludes/footer.php' ?> 
</div>
</div>

</CENTER>

</body>

</html>
