<?php

use Tigra\AsciiArt\Generator;

require_once('generator.php');
$x = new Generator('example.jpg');
$color = $x->getBackgroundColor()->getHexValue();
?>
<html>
<head>
<title>ASCII art demo</title>
</head>
<body bgcolor="#<?php echo $color; ?>">
<?php
$x->setFontSize(6);
$x->show(range("a", "z"), 0.25, true, true);
?>
</body>
</html>

