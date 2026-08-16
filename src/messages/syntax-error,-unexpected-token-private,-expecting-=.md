# syntax error, unexpected token "private", expecting "="

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html","name":"syntax error, unexpected token \"private\", expecting \"=\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The name of class constant could not use PHP keywords, such as the visibilities `private`, `protected` and `public`; optiosn such as `abstract` or `final`, until PHP 8.3. Until then, they would generate a parse error. Such names are generally not used, as they easily sow confusion in the code, at definition but also at usage.

## Example

```php
<?php

class X {
    private const string private = 'protected';
}

?>
```

## Alternatives
+ Use another name for the constant.
+ Upgrade to PHP 8.3 or more recent.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()