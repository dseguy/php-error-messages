# %s\" is returned from __sleep() multiple times

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--is-returned-from-__sleepqr-multiple-times.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--is-returned-from-__sleepqr-multiple-times.html","name":"%s\\\" is returned from __sleep() multiple times","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:45+00:00","dateModified":"2026-03-31T09:10:45+00:00","description":"This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps--is-returned-from-__sleepqr-multiple-times.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of `__sleep()`. All the duplicated properties are reported in one pass, although each of them only once. The warning is only triggered when the code is run.

## Example

```php
<?php

class X {
    private $data;

    public function __sleep() {
        return ['data', 'data', 'data'];
    }
}

// Create an instance and serialize it
$example = new Example('test');
$serialized = serialize($example);

?>
```

## Literal Examples
+ data" is returned from __sleep() multiple time

## Alternatives
+ Make sure the properties names are all unique in the returned array.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()