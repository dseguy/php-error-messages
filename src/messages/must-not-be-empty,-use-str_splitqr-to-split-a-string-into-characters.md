# must not be empty, use str_split() to split a string into characters

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty,-use-str_splitqr-to-split-a-string-into-characters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty,-use-str_splitqr-to-split-a-string-into-characters.html","name":"must not be empty, use str_split() to split a string into characters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T20:16:36+00:00","dateModified":"2026-08-24T20:16:36+00:00","description":"``explode()`` splits a string on every occurrence of a ``$separator``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty,-use-str_splitqr-to-split-a-string-into-characters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`explode()` splits a string on every occurrence of a `$separator`. An empty separator has no well-defined meaning for that operation, so it has always been rejected.

As of PHP 8.6, the `ValueError` message for this case was made more actionable: instead of just saying the separator cannot be empty, it now points directly to `str_split()`, which is the correct tool for splitting a string into its individual characters.

## Example

```php
<?php

explode('', 'hello');

?>
```

## Literal Examples
+ explode(): Argument #1 ($separator) must not be empty, use str_split() to split a string into characters

## Alternatives
+ Use ``str_split()`` instead of ``explode('', ...)`` to split a string into individual characters.

## Related error messages
+ [must-not-be-empty](must-not-be-empty.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, this was reported as "explode(): Argument #1 ($separator) cannot be empty", without the str_split() suggestion.](Previously, this was reported as "explode(): Argument #1 ($separator) cannot be empty", without the str_split() suggestion.)