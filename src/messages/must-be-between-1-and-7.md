# must be between 1 and 7

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-7.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-7.html","name":"must be between 1 and 7","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-10T22:59:39+02:00","dateModified":"2025-09-14T18:09:14+02:00","description":"When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-7.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When processing days of the week as an integers, the days are represented by the integers from 1 (Monday) to 7 (Sunday). Other values are non used, and are reported as faulty.

## Example

```php
<?php

$c = new IntlGregorianCalendar(NULL, 'pt_PT');

try {
    var_dump($c->setMinimalDaysInFirstWeek(0));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
```

## Alternatives
+ Use an integer with a value between 1 and 7.
