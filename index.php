<!--
You may use this in any way, on any site, all we ask is that you please keep the link(s) crediting the author.   Though this is not mandatory, it is certainly appreciated.
 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Philip Moss Robinson</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="bluebliss.css" />
    
  </head>
  <body>
    <div id="mainContentArea">
      <div id="contentBox">
        <div id="title">Philip Moss Robinson</div>
        
	<?php $VALID = array("Color", "Competitions","Projects","Home");?>
	
        <div id="linkGroup">
	  <div class="link">
	    <a href="#" onclick="this.href='mai'+'lto'+':'+'pmoss.robinson+site'+'@'+'gmail'+'.com';">Contact</a>
	  </div>	  
	  <?php
	  foreach($VALID as &$entry){
	  echo "
          <div class='link'>
            <a href='index.php?name=".$entry."'>".$entry."</a>
          </div>
          ";
	  }
	  ?>
	  
        </div>
        
        <div id="blueBox"> 
          <div id="header"></div>
	  <a href="https://github.com/probinso/resume/raw/master/resume.pdf" >
	    
	    <div id="resume">
	      <a href="https://github.com/probinso/resume/raw/master/resume.pdf" >		<img width="100px" src="https://raw.githubusercontent.com/probinso/resume/master/restmp.gif" style="border-style=none;"/>
	      </a>
	      <br /><strong style="padding-left:30px;" >Resume</strong>
	    </div>
	  </a>
	  <!--
	  <br /><a href="https://github.com/probinso?tab=activity">
	    <strong style="padding-left:30px;" >Github</strong>
	  </a>
	  -->
	  <?php 
if ((isset($_GET['name'])) && in_array($_GET['name'],$VALID)) {
$fname = $_GET['name'];
}else{
$fname = 'Home';
}
echo "<div class='contentTitle'>".$fname."</div>";

echo file_get_contents('./'.strtolower($fname).'.html',true);
?>
	  
          <div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a> | <a href="http://www.quackit.com">web tutorials</a> | <a href="http://www.htmlcodes.me">HTML code</a> | <a href="http://www.free-templates.me">free templates</a> </div>
	</div>
      </div>
    </div>
  </body>
</html>
