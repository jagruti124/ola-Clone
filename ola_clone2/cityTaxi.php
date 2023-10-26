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

<div class="left">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    
</script></div>

  </div>


<div class="container">
<br></br> <br></br> <br></br> <br></br> 
 <h2>Your everyday travel partner</h2>
 <h4>AC Cabs for point to point travel</h4>
  <form action="/action_page.php">
    
    <div class="form-group">
      <label for="PICKUP">PICKUP</label>
      <input type="text" class="form-control" id="pickup" placeholder="Enter Pickup location" name="Pickup">
    </div>
    <div class="form-group">
      <label for="">DROP</label>
      <input type="text" class="form-control" id="DROP" placeholder="Enter drop for ride estimate" name="Drop">
    </div>
    
    <button type="submit" class="btn btn-primary">Search Cab</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>


</body>
</html>
