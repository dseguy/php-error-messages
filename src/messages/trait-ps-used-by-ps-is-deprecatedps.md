# Trait %s used by %s is deprecated%S

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-%s-used-by-%s-is-deprecated%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-%s-used-by-%s-is-deprecated%s.html","name":"Trait %s used by %s is deprecated%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-%s-used-by-%s-is-deprecated%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.4 introduced the `#[\Deprecated]` attribute to flag functions, methods and class constants as deprecated. PHP 8.5 extends this to traits: a trait declared with `#[\Deprecated]` emits this deprecation notice as soon as another class `use`-s it, pinpointing the class doing the using.

The optional `since` and `message` arguments of the attribute are appended to the notice, for example " since 1.0, use LoggerTrait instead", to help locate a replacement.

## Example

```php
<?php

#[\Deprecated(message: 'use LoggerTrait instead', since: '1.0')]
trait DeprecatedLoggingTrait {
    public function log(string $message): void {
        echo $message, PHP_EOL;
    }
}

class Service {
    use DeprecatedLoggingTrait;
}

?>
```

## Literal Examples
+ Trait DeprecatedLoggingTrait used by Service is deprecated since 1.0, use LoggerTrait instead

## Alternatives
+ Stop using the deprecated trait and switch to the alternative mentioned in the deprecation message.
+ If you own the trait, keep the ``#[\Deprecated]`` attribute until the trait is actually removed, so callers get a clear migration path.

## Related error messages
+ [function-%s()-is-deprecated%s](function-%s\(\)-is-deprecated%s.html)
+ [constant-%s-is-deprecated](constant-%s-is-deprecated.html)
+ [constant-%s::%s-is-deprecated](constant-%s::%s-is-deprecated.html)
+ [cannot-instantiate-trait-%s](cannot-instantiate-trait-%s.html)

## Related error messages
+ [Deprecated attribute](https://www.php.net/manual/en/class.deprecated.php)
