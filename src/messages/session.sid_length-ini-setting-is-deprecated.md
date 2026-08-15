# session.sid_length INI setting is deprecated

## Description
`session.sid_length` used to control the number of characters in a generated session ID, in combination with `session.sid_bits_per_character`.

Letting this be configurable made it possible to end up with weak, easily-guessable session IDs if the value was lowered too much. PHP 8.4 fixes the format to a 32-character session ID and deprecates the directive; it is only emitted when the value is set to something other than the fixed default of 32.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_length-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_length-ini-setting-is-deprecated.html","name":"session.sid_length INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:47 +0000","dateModified":"Tue, 11 Aug 2026 20:55:47 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_length-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('session.sid_length', '26');

?>
```

## Alternatives
+ Remove ``session.sid_length`` from ``php.ini`` and from the code; PHP now always uses a 32-character session ID.

## Related error messages
+ [session.sid_bits_per_character-ini-setting-is-deprecated](session.sid\_bits\_per\_character-ini-setting-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`session.sid_bits_per_character-ini-setting-is-deprecated`.