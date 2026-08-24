# Looking up the DSN from a URI is deprecated due to possible security concerns with DSNs coming from remote URIs

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/looking-up-the-dsn-from-a-uri-is-deprecated-due-to-possible-security-concerns-with-dsns-coming-from-remote-uris.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/looking-up-the-dsn-from-a-uri-is-deprecated-due-to-possible-security-concerns-with-dsns-coming-from-remote-uris.html","name":"Looking up the DSN from a URI is deprecated due to possible security concerns with DSNs coming from remote URIs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-21T07:46:54+00:00","dateModified":"2026-08-21T07:46:54+00:00","description":"PDO supports a ``uri:`` DSN prefix: instead of passing the real DSN, an application could pass ``uri:`` followed by a URI, and PDO would fetch the actual DSN string from the resource that URI points to","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/looking-up-the-dsn-from-a-uri-is-deprecated-due-to-possible-security-concerns-with-dsns-coming-from-remote-uris.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PDO supports a `uri:` DSN prefix: instead of passing the real DSN, an application could pass `uri:` followed by a URI, and PDO would fetch the actual DSN string from the resource that URI points to. The URI could name a local file, but could also be a remote URL fetched through a stream wrapper.

Fetching connection credentials from an arbitrary, potentially remote, URI on every connection is risky: with drivers such as SQLite it could be abused to read arbitrary files on the server, and remote URIs add an unpredictable performance cost and an extra trust boundary. This lookup mechanism is therefore deprecated.

## Example

```php
<?php

$pdo = new PDO('uri:file:///etc/myapp/dsn.txt');

?>
```

## Alternatives
+ Read the DSN from the file yourself in userland code (for example with ``file_get_contents()`` against a local, trusted path) and pass the resulting string directly to the ``PDO`` constructor.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()