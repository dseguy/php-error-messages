# Cannot set a userinfo without having a host

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-set-a-userinfo-without-having-a-host.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-set-a-userinfo-without-having-a-host.html","name":"Cannot set a userinfo without having a host","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:25+00:00","dateModified":"2026-09-18T17:16:25+00:00","description":"Per RFC 3986, the userinfo component (``user:pass@``) only exists as part of an authority, and an authority always includes a host","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-set-a-userinfo-without-having-a-host.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Per RFC 3986, the userinfo component (`user:pass@`) only exists as part of an authority, and an authority always includes a host. There is no valid way to serialize a URI that carries userinfo but no host. `Uri\Rfc3986\UriBuilder::build()` (and the equivalent `withUserInfo()` call on an already-hostless URI) rejects that combination instead of producing a URI that would be ambiguous or unparsable when read back.

## Example

```php
<?php

$builder = new Uri\Rfc3986\UriBuilder();
$builder->setUserInfo('user:pass');

$uri = $builder->build();

?>
```

## Alternatives
+ Set a host on the builder (or the URI) before, or at the same time as, setting the userinfo.
+ If the URI genuinely has no authority (e.g. a ``mailto:`` URI), do not set userinfo on it.

## Related error messages
+ [failed-to-update-the-userinfo](failed-to-update-the-userinfo.html)
+ [the-specified-userinfo-is-malformed](the-specified-userinfo-is-malformed.html)

In more recent PHP versions, this error message is now :ref:`the-specified-userinfo-is-malformed`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()