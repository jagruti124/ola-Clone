<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>


<div class="container">
<br></br> <br></br> <br></br> <br></br> 
 <h2>The getaway car</h2>
 <h4>AC cabs for inter-city travel</h4>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="RENTAL">RENTAL</label>
      <input type="text" class="form-control" id="Current Location" placeholder="Current Location" name="Pickup">
    </div>
    <div class="form-group">
      <label for="">DROP</label>
      <input type="text" class="form-control" id="DROP" placeholder="Enter Destination City" name="Drop">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Outstation Cab</button>
  </form>
</div>

</body>
</html>
