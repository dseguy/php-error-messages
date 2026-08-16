# Invalid indentation - tabs and spaces cannot be mixed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html","name":"Invalid indentation - tabs and spaces cannot be mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-20T23:03:49+02:00","dateModified":"2025-08-20T23:03:49+02:00","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-indentation---tabs-and-spaces-cannot-be-mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 7.3, HEREDOCS and NOWDOCS syntax allows the text to be indented by the same amount than the closing tag (here `X`). The indentation must be built with only spaces or only tabulations, and cannot be a mix of both.

## Example

```php
<?php

$x = <<<X
       classic text
	 X // one tabulation + one space

?>
```

## Alternatives
+ Make the indentation spaces only.
+ Make the indentation tabulations only.
