<!DOCTYPE html>
<head>
  <title>The Splendid Walrus: Fluid Image Tests</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <style type="text/css">
  * {
    margin: 0;
    padding: 0;
  }
  body {
    width: 100%;
  }
  img, object {
    width: 100%;
  }
  div.narrow {
    width: 50%;
    border-width: 0 1px;
    border-color: #ff0;
  }
  </style>
</head>
<body>
<h1>Fluid image tests</h1>

<div class="narrow">
  <p>No width, height tags</p>
  <p><img src="wales.jpg" alt="Pocket Kite in Wales" /></p>
  
  <p>Width, height tags</p>
  <p><img src="wales.jpg" alt="Pocket Kite in Wales" width="1024" height="683" /></p>
  
  <p>Width, height tags set in inline style attribute</p>
  <p><img src="wales.jpg" alt="Pocket Kite in Wales" style="width:1024px;height:683px" /></p>
</div>
</body>
</html>