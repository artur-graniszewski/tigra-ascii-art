# ASCII ART GENERATOR

## Introduction

This class can generate a text that looks like a given image.

It traverses the pixels of a given image and converts the color values of each region to a character text, so when you look at the sequence of converted characters it looks like the original image.

The result text can optionally be outputted formatted as HTML and be displayed in color.

## Sample output

### Original image
![Original](http://php.webtutor.pl/ascii-art/example.jpg)

### ASCII art after image crop
![Result](http://php.webtutor.pl/ascii-art/ascii_art.jpg)

## Code example

```php
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
```