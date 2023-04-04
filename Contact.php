<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact Us</title>
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Contact Us</h1>
    <form method="post" action="process_from.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required><br><br>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea><br><br>

      <input type="submit" value="Submit">
    </form>

	
<?php
if(isset($_POST ['ok'])){
include_once'config.php';
$obj=new Contct();
$res=$obj->contact_us($POST);
if (res==true){
echo"<script>alart('Successful')</script>";
}
else {
echo"<script>alart('unSuccessful')</script>";}
}
?>
  </body>
</html>
