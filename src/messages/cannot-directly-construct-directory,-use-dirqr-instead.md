# Cannot directly construct Directory, use dir() instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-directly-construct-directory,-use-dir()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-directly-construct-directory,-use-dir()-instead.html","name":"Cannot directly construct Directory, use dir() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-25T18:45:01+02:00","dateModified":"2026-07-25T18:45:01+02:00","description":"``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-directly-construct-directory,-use-dir()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Directory` is the object returned by the `dir()` function, giving access to `path`, `handle`, `read()`, `rewind()` and `close()`. It predates the rest of PHP's object model and is a thin, internal wrapper around a directory stream: it has no public constructor of its own.

Calling `new Directory(...)` directly is rejected, because the object needs to be initialized with an already-opened directory handle, something only `dir()` can set up correctly.

## Example

```php
<?php

$d = new Directory('.');

?>
```

## Alternatives
+ Use ``dir($path)`` to obtain a ``Directory`` object.
+ Use ``opendir()``, ``readdir()``, ``closedir()`` for a purely procedural approach instead of the ``Directory`` object.
+ Use ``DirectoryIterator`` or ``RecursiveDirectoryIterator`` for an object-oriented, iterable interface.

## Related error messages
+ [sqlite3result-cannot-be-directly-instantiated](sqlite3result-cannot-be-directly-instantiated.html)
+ [the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed](the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html)

## Related error messages
+ [dir](https://www.php.net/manual/en/function.dir.php)
+ [Directory](https://www.php.net/manual/en/class.directory.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()