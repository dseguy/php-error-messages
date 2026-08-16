# %s() has been disabled for security reasons

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-has-been-disabled-for-security-reasons.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-has-been-disabled-for-security-reasons.html","name":"%s() has been disabled for security reasons","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The function mentioned in the message was disabled with the ``disable_functions`` directive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s()-has-been-disabled-for-security-reasons.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The function mentioned in the message was disabled with the `disable_functions` directive. It is not possible to use it, nor to redefine it.

## Example

```php
<?php

shell_exec('ls -la');

?>
```

## Literal Examples
+ shell_exec() has been disabled for security reasons

## Alternatives
+ Remove the function from the ``disable_functions`` directive.
+ Find another function with a similar feature.

In more recent PHP versions, this error message is now :ref:`call-to-undefined-function-%s()`.