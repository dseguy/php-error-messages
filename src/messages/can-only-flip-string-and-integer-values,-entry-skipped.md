# Can only flip string and integer values, entry skipped

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-flip-string-and-integer-values,-entry-skipped.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-flip-string-and-integer-values,-entry-skipped.html","name":"Can only flip string and integer values, entry skipped","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"array_flip() converts values into keys and keys into values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-flip-string-and-integer-values,-entry-skipped.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
array_flip() converts values into keys and keys into values. The former values undergo a process to convert them to valid keys, which are strings or integers. 

In general, non-scalar values cannot be converted, and are skipped: this is the case of arrays.

In particular, string or integer backed enumerations and stringable objects are not converted to strings. This applies with or without strict_types.

## Example

```php
<?php

array_flip([[1], E::A, new X])

enum E : string {
    case A = 'a';
}

class X implements Stringable {
    function __toString() {
        return 'X';
    }
}


?>
```

## Alternatives
+ Force the type to be string when building the array.
+ Apply a converting method with array_map(), before calling array_filter.
