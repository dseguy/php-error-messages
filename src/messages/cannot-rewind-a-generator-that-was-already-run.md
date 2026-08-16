# Cannot rewind a generator that was already run

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rewind-a-generator-that-was-already-run.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rewind-a-generator-that-was-already-run.html","name":"Cannot rewind a generator that was already run","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 21:12:10 +0000","dateModified":"Tue, 26 May 2026 21:12:10 +0000","description":"In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rewind-a-generator-that-was-already-run.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In this code, `$g` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i.

## Example

```php
<?php

$g = function (): Generator {
    yield from [1,2,3,4];
};    echo $i +;

$g = $g();

foreach($g as $h) {
    print h:$h -;
    foreach($g as $i) {
        echo i:$i +;
        
        break 1;
    }
}

?>
```

## Alternatives
+ Do not reuse the generator in two loops, but rather call ``$g()`` each time. It generates distinct and new data sources.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()