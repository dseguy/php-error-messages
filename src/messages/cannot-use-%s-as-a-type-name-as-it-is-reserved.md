# Cannot use "%s" as a type name as it is reserved

## Description
array is a native PHP type, and it cannot be used with the leading `\`. This is also the case for the other native types, such as `int` or `string`, although they provide a different error message.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-as-a-type-name-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-as-a-type-name-as-it-is-reserved.html","name":"Cannot use \"%s\" as a type name as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"array is a native PHP type, and it cannot be used with the leading ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-as-a-type-name-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(\array $array) {}

?>
```

## Literal Examples
+ Cannot use "array" as a type name as it is reserved

## Alternatives
+ Remove the leading ``\``, before the ``array``.
+ Change the type from ``array`` to an actual class.

## Related error messages
+ [type-declaration-'%s'-must-be-unqualified](asdf)
+ [cannot-use--"%s-"-as-%s](asdf)
