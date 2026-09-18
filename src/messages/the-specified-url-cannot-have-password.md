# The specified URL cannot have password

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-password.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-password.html","name":"The specified URL cannot have password","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T18:50:34+02:00","dateModified":"2026-09-18T18:50:34+02:00","description":"The WHATWG URL Standard, implemented by the ``Uri\\WhatWg\\Url`` class introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-password.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The WHATWG URL Standard, implemented by the `Uri\WhatWg\Url` class introduced in PHP 8.5, forbids credentials and a port on `file:` URLs: a local file path has no notion of an authenticated remote host. Calling `withPassword()` on a URL whose scheme is `file` therefore throws instead of silently producing an invalid URL.

## Example

```php
<?php

use Uri\WhatWg\Url;

$url = new Url('file:///path/to/file');

$url = $url->withPassword('secret');

?>
```

## Alternatives
+ Do not set a password on a ``file:`` URL.
+ Use a scheme that supports userinfo components, such as ``ftp`` or ``https``, if credentials are actually needed.

## Related error messages
+ [the-specified-url-cannot-have-username](the-specified-url-cannot-have-username.html)
+ [the-specified-url-cannot-have-port](the-specified-url-cannot-have-port.html)

In previous PHP versions, this error message used to be :ref:`the-specified-url-cannot-have-username`.
In more recent PHP versions, this error message is now :ref:`the-specified-url-cannot-have-port`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()