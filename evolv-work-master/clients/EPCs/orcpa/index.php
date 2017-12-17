<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ORCPA Templates</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="images/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/virtualbox_startpage.css">

</head>
<body>
    <div id="wrapper">
        <div id="content">
          <ul>
          <li><a href="form.html">Form</a></li>
          <li><a href="loading.html">Loading</a></li>
          <li><a href="search.html">Search</a></li>
          </ul>
<?php
    // Connect to localhost with username/password sandbox.
    mysql_connect('localhost', 'sandbox', 'sandbox');
    // Get the test content.
    $result = mysql_query('SELECT content FROM sandbox.test');
    // If the query succeeded...
    if ($result) {
      // Display the contents.
      echo '<h1 class="success">SUCCESS!</h1>';
      echo '<p class="success">The VirtualBox server is running and MySQL is working properly!</p>';
    }
    // There was a failure.
    else {
      // Display the failure.
      echo '<h1 class="error">ERROR!</h1>';
      echo "<p class='error'>Probably you don't have the VirtualBox and/or SSH clent running!!!</p>";
      var_dump(mysql_error());
    }
?>
<div id="testLink">
<hr />
<a href="javascript:window.open('browser-size-testing/browser_test.html', '','width=960,height=960')">Open! New Window with Grid Background for Testing Websites</a>
<form action="http://maps.google.com/maps" method="get" target="_blank">
   <label for="saddr">Enter your location</label>
   <input type="text" name="saddr" />
   <input type="hidden" name="daddr" value="66 Broadway St, Asheville, NC 28801" />
   <input type="submit" value="Get directions" />
</form>
</div><!-- end of testLink div -->

</div><!-- end of content div -->

</div><!-- end of wrapper div -->
</body>
</html>