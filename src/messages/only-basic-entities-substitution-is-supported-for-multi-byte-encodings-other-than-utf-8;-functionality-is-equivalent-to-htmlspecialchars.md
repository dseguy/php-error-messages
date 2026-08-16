# Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html","name":"Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-04-10T10:53:29+02:00","dateModified":"2026-04-10T10:53:29+02:00","description":"When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned. This contrasts with the behavior when the encoding is not recognized, where PHP defaults to UTF-8, and returns something non empty.

## Example

```php
<?php

    var_dump( htmlentities("Café & 'quotes' and € euro", ENT_QUOTES, 'Big5') );
    // '', empty string

?>
```

## Alternatives
+ Check that the used encoding is supported.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()