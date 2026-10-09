# The "salt" option has been ignored, since providing a custom salt is no longer supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--salt--option-has-been-ignored,-since-providing-a-custom-salt-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--salt--option-has-been-ignored,-since-providing-a-custom-salt-is-no-longer-supported.html","name":"The \"salt\" option has been ignored, since providing a custom salt is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T14:05:12+00:00","dateModified":"2026-10-09T14:05:12+00:00","description":"``password_hash()`` used to accept a ``salt`` option, which let the caller choose the salt of the hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the--salt--option-has-been-ignored,-since-providing-a-custom-salt-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`password_hash()` used to accept a `salt` option, which let the caller choose the salt of the hash. This is no longer supported: the option is ignored, and `password_hash()` generates a random salt itself. The hash is still returned, so the code keeps running, but the custom salt does not appear in it.

A custom salt was a weak practice, as a fixed or badly chosen salt makes it easier to attack many hashes at once. Since the salt is stored inside the hash, `password_verify()` works without the caller managing it.

## Example

```php
<?php

// The salt option is ignored: password_hash() generates its own salt
$hash = password_hash('password', PASSWORD_DEFAULT, ['salt' => 'a-custom-salt-value']);

?>
```

## Literal Examples
+ password_hash(): The "salt" option has been ignored, since providing a custom salt is no longer supported

## Alternatives
+ Remove the ``salt`` option. ``password_hash()`` already generates a random salt for each hash.
+ To check a password, use ``password_verify()``, which reads the salt from the stored hash.

## Related error messages
+ [password_hash](https://www.php.net/manual/en/function.password-hash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()