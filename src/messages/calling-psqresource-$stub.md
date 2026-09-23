# Calling %s(resource $stub

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqresource-$stub.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqresource-$stub.html","name":"Calling %s(resource $stub","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:41:13+00:00","dateModified":"2026-09-21T21:41:13+00:00","description":"``Phar::setStub()`` (and ``PharData::setStub()``) historically accepted two different signatures: a plain ``string $stub``, or a ``resource $stub`` together with an ``int $length`` telling PHP how many bytes to read from the stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqresource-$stub.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Phar::setStub()` (and `PharData::setStub()`) historically accepted two different signatures: a plain `string $stub`, or a `resource $stub` together with an `int $length` telling PHP how many bytes to read from the stream. Overloaded signatures like this make the function harder to reason about and to type-check.

As of PHP 8.3, calling the method with the `(resource $stub, int $length)` form is deprecated in favour of the single `string $stub` signature; the resource variant will be removed in PHP 9.0.

## Example

```php
<?php

$phar = new Phar('/tmp/test.phar');

$stream = fopen('php://memory', 'r+');
fwrite($stream, "<?php __HALT_COMPILER(); ?>");
rewind($stream);

// Passing a resource plus an explicit length is the overloaded,
// now-deprecated signature.
$phar->setStub($stream, 20);

fclose($stream);

?>
```

## Literal Examples
+ Calling Phar::setStub(resource $stub, int $length) is deprecated
+ Calling PharData::setStub(resource $stub, int $length) is deprecated

## Alternatives
+ Read the resource into a string first and pass that string: $phar->setStub(stream_get_contents($stub)).
+ If the resource is a file, read its contents with file_get_contents() instead of fopen()+fread().

## Related error messages
+ [Phar::setStub](https://www.php.net/manual/en/phar.setstub.php)
+ [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()