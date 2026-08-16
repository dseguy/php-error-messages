# Octal escape sequence overflow \%s is greater than \377

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/octal-escape-sequence-overflow--%s-is-greater-than--377.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/octal-escape-sequence-overflow--%s-is-greater-than--377.html","name":"Octal escape sequence overflow \\%s is greater than \\377","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-05T14:01:21+00:00","dateModified":"2026-08-05T14:01:21+00:00","description":"Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/octal-escape-sequence-overflow--%s-is-greater-than--377.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number. These ASCII numbers have a limit of 0o377. 

Between `0o377` and `0o777`, numbers are valid octals, and not ASCII numbers, so the error message appears. 

Beyond `0o777`, the sequence is not a valid octal anymore, and PHP does not process it, nor emit an error message.

## Example

```php
<?php

$a = "\500";

?>
```

## Alternatives
+ Check the value in the octal sequence to be valid.
+ Add backslashes, to make the characters literals.
