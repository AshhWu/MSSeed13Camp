# MSSeed13Camp
## How to use navbar
1. Include links to Bootstrap  
```  
<head>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  ...
  <!-- jQuery --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <!-- Bootstrap Core JavaScript --> 
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>
```

2. Include `nav.php` file in `<body>`
```
  <?php
  include "nav.php";
  ?>
```

3. Modify links to your page in `nav.php`
```
  <li <?=findActiveClass("home")?>><a href="home.php">首頁</a></li>
```
