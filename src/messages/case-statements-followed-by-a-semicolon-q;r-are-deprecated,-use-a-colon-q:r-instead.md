# Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:)-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:)-instead.html","name":"Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 15:16:33 +0000","dateModified":"Mon, 13 Jul 2026 15:16:33 +0000","description":"It is possible to use a semi-colon ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-statements-followed-by-a-semicolon-(;)-are-deprecated,-use-a-colon-(:)-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to use a semi-colon `;` instead of a colon `:` after a case in a switch. This is deprecated in PHP 8.5, and will disappear in PHP 9.

## Example

```php
<?php

switch($a) {
    case 1;
        echo one;
        break;
}

?>
```

## Alternatives
+ Replace the semicolon by a colon.
+ Do not place a closing tag after a case value.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[case-with-semicolon](case-with-semicolon)