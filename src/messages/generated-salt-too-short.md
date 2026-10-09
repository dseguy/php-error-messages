# Generated salt too short

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generated-salt-too-short.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generated-salt-too-short.html","name":"Generated salt too short","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T14:08:31+00:00","dateModified":"2026-10-09T14:08:31+00:00","description":"``password_hash()`` creates a random salt for each hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generated-salt-too-short.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`password_hash()` creates a random salt for each hash. This error is thrown when the salt that was generated is shorter than the length the hashing algorithm needs, so the hash cannot be built.

Application code cannot fix this directly, as the salt is created inside PHP. It points to a problem with the random data or with the PHP build, and it is rare.

## Example

```php

```

## Literal Examples
+ Generated salt too short

## Alternatives
+ Check that ``random_bytes()`` works on the system, for example by calling ``random_bytes(16)`` in a small script.
+ Check the PHP build, and reinstall PHP if it is a custom or damaged build.

## Related error messages
+ [unable-to-generate-salt](unable-to-generate-salt.html)

## Related error messages
+ [password_hash](https://www.php.net/manual/en/function.password-hash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()