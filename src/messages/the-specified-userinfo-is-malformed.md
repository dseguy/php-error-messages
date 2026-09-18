# The specified userinfo is malformed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-userinfo-is-malformed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-userinfo-is-malformed.html","name":"The specified userinfo is malformed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:47+00:00","dateModified":"2026-09-18T17:16:47+00:00","description":"The userinfo component of a URI may only contain unreserved characters, the sub-delimiters, ``:``, and percent-encoded octets (RFC 3986, section 3","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-userinfo-is-malformed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The userinfo component of a URI may only contain unreserved characters, the sub-delimiters, `:`, and percent-encoded octets (RFC 3986, section 3.2.1). `Uri\Rfc3986\Uri::withUserInfo()` and `Uri\Rfc3986\UriBuilder::setUserInfo()` throw when the given string contains a character outside that set — here, the unencoded `/`.

## Example

```php
<?php

$uri = Uri\Rfc3986\Uri::parse('https://example.com');

$uri = $uri->withUserInfo('us/r:password');

?>
```

## Alternatives
+ Percent-encode any reserved or non-ASCII character before passing it as userinfo.
+ Restrict userinfo to unreserved characters, sub-delimiters and ``:``.

## Related error messages
+ [cannot-set-a-userinfo-without-having-a-host](cannot-set-a-userinfo-without-having-a-host.html)
+ [failed-to-update-the-userinfo](failed-to-update-the-userinfo.html)

In previous PHP versions, this error message used to be :ref:`cannot-set-a-userinfo-without-having-a-host`.
In more recent PHP versions, this error message is now :ref:`failed-to-update-the-userinfo`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()