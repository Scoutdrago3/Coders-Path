<!DOCTYPE HTML>
<html>

    <head>
        <title>CodersPath - Learn Code</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kVo/Eh0sv7ZdiwZK32nRsp1FrDT3sLRLx3zVpSSTI9UdO5H02LJNLBg5F1gwvKg0" crossorigin="anonymous">
    </head>
    <body>
      <form class="form-horizontal">
        <fieldset>
          <legend>Legend</legend>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Checkbox
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="textArea"></textarea>
              <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Radios</label>
            <div class="col-lg-10">
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                  Option one is this
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  Option two can be something else
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Selects</label>
            <div class="col-lg-10">
              <select class="form-control" id="select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
              <select multiple="" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </fieldset>
      </form>
    </body>
</html>
