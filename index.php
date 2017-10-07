<?php
  require_once('oktoberfest.php');
  $oct = new octoberfest();

?><html>
<head>
  <title>Oktoberfest Random Image Finder (ORIF)</title>
  <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet" >
  <style>
    a {
      color: #CE873D;
      text-decoration: none;
      font-family: 'Gochi Hand', cursive;
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
      <a href="<?php echo $oct->LINK; ?>"><?php echo $oct->TITLE; ?></a><br />
      <img src="<?php echo $oct->SRC; ?>"  width="100%" />
    </td>
  </table>
</body>
</html>
