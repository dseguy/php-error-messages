# Unable to generate salt

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unable-to-generate-salt.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unable-to-generate-salt.html","name":"Unable to generate salt","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T16:25:03+00:00","dateModified":"2026-10-09T16:25:03+00:00","description":"``password_hash()`` creates a random salt for each hash, using random bytes from the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unable-to-generate-salt.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`password_hash()` creates a random salt for each hash, using random bytes from the operating system. If those bytes cannot be read, no salt can be made, so no hash is produced and this error is thrown.

This is an environment problem rather than a problem in the code that calls `password_hash()`. It is rare, and it is usually reported on systems where the random source is not available to PHP, or where entropy is missing, such as some containers and virtual machines.

## Example

```php

```

## Literal Examples
+ Unable to generate salt

## Alternatives
+ Check that ``random_bytes()`` works on the system, for example by calling ``random_bytes(16)`` in a small script.
+ Check the random source of the operating system and of the container or virtual machine, and make sure PHP can read from it.
+ Check the PHP build and its extensions, as a broken build can also lead to this error.

## Related error messages
+ [generated-salt-too-short](generated-salt-too-short.html)

## Related error messages
+ [password_hash](https://www.php.net/manual/en/function.password-hash.php)
+ [random_bytes](https://www.php.net/manual/en/function.random-bytes.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()