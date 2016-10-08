<?php
  require_once('oktoberfest.php');
  $oct = new octoberfest();

?><html>
<head>
  <title>Oktoberfest Random Image Finder (ORIF)</title>
  <style>
    a {
      color: #CE873D;
      text-decoration: none;
      font-family: Verdana;
      font-size: 20pt;
    }
    
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body bgcolor="#1B1816" color="#CE873D">
  <table width="80%" align="center">
    <tr>
      <td align="center"><img src="images/hacktoberfest.svg" width="60%" style="padding-bottom: 20px;" /></td>
    </tr>
    <td align="center">
      <img src="<?php echo $oct->SRC; ?>"  width="100%" /><br />
      <a href="<?php echo $oct->LINK; ?>"><?php echo $oct->TITLE; ?></a>
    </td>
</body>
</html>