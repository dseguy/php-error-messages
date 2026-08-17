# continue" targeting switch is equivalent to "break

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/continue-targeting-switch-is-equivalent-to-break.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/continue-targeting-switch-is-equivalent-to-break.html","name":"continue\" targeting switch is equivalent to \"break","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The recommendation is to use ``break`` inside a switch, and ``continue`` in loops","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/continue-targeting-switch-is-equivalent-to-break.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The recommendation is to use `break` inside a switch, and `continue` in loops. Both keywords achieve the same feature of terminating the current structure and following up with the execution, they carry different human meanings.

## Example

```php
<?php
    
switch($a) {
    case 1:
        continue;
}

?>
```

## Alternatives
+ Use ``break``.
