# session.sid_bits_per_character INI setting is deprecated

## Description
`session.sid_bits_per_character` used to control how many bits of entropy each character of a generated session ID encodes (from 4, hexadecimal, up to 6, a larger custom alphabet), in combination with `session.sid_length`.

Letting this be configurable made it possible to end up with weak, easily-guessable session IDs if the values were lowered, without much practical benefit from raising them either. PHP 8.4 fixes the format to a 32-character hexadecimal session ID (4 bits per character) and deprecates the directive; it is only emitted when the value is set to something other than the fixed default of 4.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_bits_per_character-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_bits_per_character-ini-setting-is-deprecated.html","name":"session.sid_bits_per_character INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:41 +0000","dateModified":"Tue, 11 Aug 2026 20:55:41 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session.sid_bits_per_character-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('session.sid_bits_per_character', '5');

?>
```

## Alternatives
+ Remove ``session.sid_bits_per_character`` from ``php.ini`` and from the code; PHP now always uses a 32-character hexadecimal session ID.

## Related error messages
+ [session.sid_length-ini-setting-is-deprecated](asdf)

In more recent PHP versions, this error message is now :ref:`session.sid_length-ini-setting-is-deprecated`.