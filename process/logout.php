<?php 
include('db_config.php');

?>
<?php 
session_start();
unset($_SESSION["id"]);
session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank</title>
<!--Bootstrap -->
<!-- Latest compiled and minified CSS -->

 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!-- End of Bootstrap -->


<!-- MDL -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<!-- End of MDL -->

<link rel="stylesheet" type="text/css" href="style.css">
<style>
 /* General Styling */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header Styling */
.mdl-layout__header {
    background-color: #d32f2f; /* Blood bank theme color */
    color: #fff;
}

.mdl-layout-title {
    font-weight: bold;
    font-size: 1.5em;
}

.mdl-navigation__link {
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
}

.mdl-navigation__link:hover {
    background-color: #b71c1c;
}

/* Drawer Styling */
.mdl-layout__drawer {
    background-color: #fff;
    color: #d32f2f;
}

.mdl-navigation__link {
    color: #d32f2f;
}

.mdl-navigation__link:hover {
    background-color: blue;
}

/* Main Content */
.mdl-layout__content {
    padding: 20px;
}

/* Logout Message Panel */
.panel-danger {
    border-color: #d32f2f;
    background-color: #fce4ec; /* Light pink for the background */
}

.panel-body {
    color: #d32f2f;
    font-size: 1.25em;
    text-align: center;
    padding: 20px;
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 768px) {
    .mdl-layout__header,
    .mdl-layout__drawer {
        text-align: center;
    }
    
    .mdl-layout-title {
        font-size: 1.25em;
    }
    
    .panel-body {
        font-size: 1.1em;
        padding: 15px;
    }
}
   
</style>

</head>
<body>


<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Blood Bank</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="../index.html">Log In</a>
        
       
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Blood Bank</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="login.php">Log In</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
  <div class="page-content">
<div id="lo" class="panel panel-danger">
   <div class="panel-body">
    You have been logged out!!!
  </div>
</div>


</div>
</main>
</div>
</div>
</div>
</body>
</html>