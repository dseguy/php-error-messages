# Cannot use positional argument after named argument

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument.html","name":"Cannot use positional argument after named argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-27T19:23:52+01:00","dateModified":"2025-05-06T07:21:26+02:00","description":"When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument. Said another way, the unpacked arguments must be the last one in the list.

## Example

```php
<?php

// Valid, the unpacked argument is the last
foo($a, $b, ...$c);

// Also valid, the unpacked arguments are the last
foo($a, $b, ...$c, ...$d);

// Not valid
foo(...$a, $b, ...$c);

?>
```

## Alternatives
+ Write the positional argument before the named ones in the call.

## Related error messages
+ [cannot-use-empty-list](cannot-use-empty-list.html)
+ [named-parameter-$%s-overwrites-previous-argument](named-parameter-$%s-overwrites-previous-argument.html)
