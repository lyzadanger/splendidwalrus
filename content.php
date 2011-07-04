<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <?php
    $step_count = 5;
    $step       = 1;
    if(isset($_GET['step']) && is_numeric($_GET['step'])) {
      $step = ($_GET['step'] > 0 && $_GET['step'] <= $step_count) ? $_GET['step'] : $step;
    }
  ?>
  <?php if ($step > 1): ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><?php endif; ?>
  <title>The Splendid Walrus: Public House and Spirits</title>
  <link rel="stylesheet" type="text/css" href="css/step<?php print $step; ?>.css" />
</head>
<body>
<div class="navigation">
      <ul>
      <li><a href="/">Home</a></li>
      <li><a href="ontap.html">On Tap Now</a></li>
      <li><a href="about.html">About Us</a></li>
    </ul>
</div>
<div class="header"><p>[The splendid walrus surveys his domain!]</p></div>
<h1>The Splendid Walrus: Public House & Spirits</h1>
<div class="left column">
  <h2>Visit Us!</h2>
  <dl>
    <dt>Location</dt>
    <dd>1543 SW Pretend Street<br />
    Portland, OR 97201 <small>[<a href="#">Map</a>]</small></dd>
    
    <dt>Hours</dt>
      <dd>
        <dl>
          <dt>M-F</dt>
          <dd>Until midnight</dd>
          <dt>Sa-Su</dt>
          <dd>Until 1AM*<p><em><small>*At least</small></em></p></dd>
        </dl>
      </dd>
    <dt>Call us</dt>
    <dd>+1 (503) 555-1212</dd>
  </dl>
  <p>
    <?php if ($step == 5): ?>
    <iframe src="http://www.youtube.com/embed/O-jOEAufDQ4" frameborder="0" allowfullscreen style="max-width:100%"></iframe>
    <?php else: ?>
    <object width="230" height="179" type="application/x-shockwave-flash" data="http://www.youtube.com/v/O-jOEAufDQ4?fs=1&amp;hl=en_US&amp;rel=0"><embed src="http://www.youtube.com/v/O-jOEAufDQ4?fs=1&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="230" height="179" /></object>
    <?php endif; ?>
  </p>
</div>
<div class="right column">
  <p class="intro">The Splendid Walrus pub is <em>the</em> place in downtown Portland, Ore., to do all of these things:</p>
    <ul>
      <li>Sample local and hard-to-find microbrews&mdash;always at least 20 <a href="ontap.html">rotating taps</a></li>
      <li>Meet friends and hang out</li>
      <li>Surf the Web while sipping a pint (free wifi!)</li>
      <li>Catch a cult flick (movie Mondays!)</li>
      <li>Have a favorite cocktail or sample spirits from local distilleries</li>
    </ul>

</div>
<div class="main column">
  <h2>This month's special</h2>
  
  <p class="intro">25% off Jazz Hands Vodka: locally-made vodka bliss.</p>
  <p>Jazz Hands Vodka is the newest product from local distiller Awesomesauce. Bright and vivid, it's the perfect warm-weather treat. We've concocted some pretty wonderful custom cocktails to highlight it (try the <em title="There's Tabasco in this!">White Devil</em> or the <em>Regret</em>). Or you can go classic with our ultra-fresh Lemon Drop (made with organic citrus).</p>
  <img src="images/sample.jpg" width="430" height="293" alt="Tastes wonderful" />
</div>
<div class="footer">
  <p>See you soon! Love, The Splendid Walrus</p>
</div>
</body>
</html>