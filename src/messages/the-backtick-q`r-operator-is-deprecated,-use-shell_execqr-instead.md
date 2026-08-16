# The backtick (`) operator is deprecated, use shell_exec() instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html","name":"The backtick (`) operator is deprecated, use shell_exec() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The back tick operator `` \\` `` is the equivalent to the function ``shell_exec()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The back tick operator ` \` ` is the equivalent to the function `shell_exec()`. It is being deprecated since PHP 8.5.

## Example

```php
<?php

echo `ls`;

?>
```

## Alternatives
+ Use shell_exec() instead.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[backtick](backtick)