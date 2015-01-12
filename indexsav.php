<?php include('phpIncludes/functions.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include 'phpIncludes/metadata.php' ?>
  <link rel="stylesheet" type="text/css" href="Style/index.css" />

  <style>
    ol.tumblr_posts { list-style:none; -webkit-padding-start:0px;  
}

    .tumblr_post {background-color:#fff;margin:40px 0px 20px;
                  border-radius:10px; padding:20px 50px; }

    .tumblr_text_post {}

    .tumblr_title {text-align:center; font-size:20px; }

    .tumblr_body { }
    
  </style>

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

<div class="whiteRounded textPadding" >
<p style="">Schedule of Events
<a style="float:right" href="http://stgeorgetennis.ca/calendar.php">View by Month</a>
</p>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=iqhb9dbp2u78k101t5koefssvc%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FHalifax" style=" border:solid 1px #777 " width="580" height="250" frameborder="0" scrolling="no"></iframe>
</div>

<script type="text/javascript" src="http://stgeorgewebsite.tumblr.com/js"></script>



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
