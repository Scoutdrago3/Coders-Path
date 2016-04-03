<!DOCTYPE HTML>
<html>

    <head>
        <title>CodersPath - Learn Code</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/starStyle.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kVo/Eh0sv7ZdiwZK32nRsp1FrDT3sLRLx3zVpSSTI9UdO5H02LJNLBg5F1gwvKg0" crossorigin="anonymous">
    </head>
    <body>

<div class="container">
  <h2>Create an Account</h2>
  <form role="form">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="John">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Doe">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="john.doe@example.com">
    </div>
    <div class="form-group">
      <label for="emailConf">Confirm Email:</label>
      <input type="email" class="form-control" id="emailConf" placeholder="john.doe@example.com">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="pwdConf">Password:</label>
      <input type="password" class="form-control" id="pwdConf" placeholder="Password">
    </div>
    <div class="form-group">
      <fieldset>
          <span class="">
            <label for="rating">How Much Experience Do You Have? (1 being none, 10 being professional):</label>
            <input type="radio" id="rating-10" name="rating" value="10" /><label for="rating-10">10</label>
            <input type="radio" id="rating-9" name="rating" value="9" /><label for="rating-9">9</label>
            <input type="radio" id="rating-8" name="rating" value="8" /><label for="rating-8">8</label>
            <input type="radio" id="rating-7" name="rating" value="7" /><label for="rating-7">7</label>
            <input type="radio" id="rating-6" name="rating" value="6" /><label for="rating-6">6</label>
            <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
            <input type="radio" id="rating-4" name="rating" value="4" /><label for="rating-4">4</label>
            <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
            <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
            <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
          </span>
        </fieldset>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
    </body>
</html>
