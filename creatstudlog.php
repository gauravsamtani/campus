<?php

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Campus Recruitment</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="logincss/style.css">
<style>
body  {
    background-image: url("img/slides/2.jpg");
    /*background-color: #cccccc;*/
}
</style>

</head>

<body>

<div class="container">
    <div class="info">

    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="img/hat.svg"/></div>
    <form method="POST"  action="trystud.php" >
         <input type="text" name ="name" placeholder="Name" pattern="[a-zA-Z][a-zA-Z\s]*"required>
        <input type="text" name ="univid" placeholder="SRN" pattern="[0]{1}[1]{1}[a-z]{2}[0-9]{2}[a-z]{3}[0-9]{3}" required="required">
        <input type="password" name ="password" placeholder="Password" pattern=".{8,}"  required>
        <input type="email" name ="email" placeholder="Email address"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
        <input type="text" name ="number" placeholder="Mobile number" pattern="[789][0-9]{9}" required="required">
        <input type="text" name ="address" placeholder="Address" required="required">
        <input type="text" name ="degree" placeholder="Current Degree" required="required">
        <input type="text" name ="sem" placeholder="Sem" required="required">
        <div class="styled">
        <select name="branch"  style="outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;">
        <option value="West"><--select campus--></option>
        <option value="West campus">West campus</option>
        <option value="South campus">South campus</option>

        </select>
        </div>
  <!-- type="text" name ="branch" placeholder="Branch"    required="required"> -->
        <button type="submit">create</button>
        <p class="message">Already registered? <a href="studlogin.php">Sign In</a></p>
    </form>
 <!-- pattern="/^[0-9]{2}[a-z]{2}[1-9]{2}[a-z]{3}[0-9]{3}$" --> 
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="logincss/index.js"></script>

</body>
</html>

