# must be a valid encoding, "%s" given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-encoding,-\"%s\"-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-encoding,-\"%s\"-given.html","name":"must be a valid encoding, \"%s\" given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The encoding arguments, in any ``mb_`` function, must be a supported encoding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-encoding,-\"%s\"-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The encoding arguments, in any `mb_` function, must be a supported encoding. Otherwise, the mbstring extension doesn't know how to handle it.

The current list of encodings is available with the function `mb_list_encodings()`. Encoding names are case insensitive.

The list of supported encoding depends on the PHP version. Some are added or removed, depending on the version.

## Example

```php
<?php

	print mb_chr(128024, 'UTF-8')); // emoji of an elephant

	//Argument #2 ($encoding) must be a valid encoding, "elephpant" given 
	print mb_chr($value, 'elephpant'));
?>
```

## Literal Examples
+ must be a valid encoding, "qprint" given
+ must be a valid encoding, "uuencode" given

## Alternatives
+ Check the encoding with mb_list_encodings() before using one.
