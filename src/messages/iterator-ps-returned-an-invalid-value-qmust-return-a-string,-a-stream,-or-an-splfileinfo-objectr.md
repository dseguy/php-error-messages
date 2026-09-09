# Iterator %s returned an invalid value (must return a string, a stream, or an SplFileInfo object)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-ps-returned-an-invalid-value-qmust-return-a-string,-a-stream,-or-an-splfileinfo-objectr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-ps-returned-an-invalid-value-qmust-return-a-string,-a-stream,-or-an-splfileinfo-objectr.html","name":"Iterator %s returned an invalid value (must return a string, a stream, or an SplFileInfo object)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:14:59+00:00","dateModified":"2026-09-09T14:14:59+00:00","description":"``Phar::buildFromIterator()`` (and ``PharData::buildFromIterator()``) adds one archive entry per value produced by the given iterator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-ps-returned-an-invalid-value-qmust-return-a-string,-a-stream,-or-an-splfileinfo-objectr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Phar::buildFromIterator()` (and `PharData::buildFromIterator()`) adds one archive entry per value produced by the given iterator. Each value it receives must be either a `string` (the content of the file), a stream resource, or an `SplFileInfo` object (or subclass, such as `SplFileObject`) pointing at the file to add; the corresponding key is used as the entry's path inside the archive.

If the iterator yields anything else, such as an integer, an array, or a plain object that is not an `SplFileInfo`, PHP cannot turn it into archive content and throws this `UnexpectedValueException`, naming the iterator's class.

## Example

```php
<?php

class MyIterator implements Iterator {
    private array $items = ['a.txt', 42, 'b.txt'];
    private int $pos = 0;

    public function current(): mixed { return $this->items[$this->pos]; }
    public function key(): mixed { return $this->pos; }
    public function next(): void { $this->pos++; }
    public function rewind(): void { $this->pos = 0; }
    public function valid(): bool { return isset($this->items[$this->pos]); }
}

$phar = new PharData('/tmp/archive.tar');
$phar->buildFromIterator(new MyIterator());

?>
```

## Literal Examples
+ Iterator MyIterator returned an invalid value (must return a string, a stream, or an SplFileInfo object)

## Alternatives
+ Make sure every value the iterator yields is a string, a stream resource, or an SplFileInfo (e.g. SplFileObject) instance.
+ Use RecursiveDirectoryIterator or a similar built-in filesystem iterator, which naturally yields SplFileInfo objects.

## Related error messages
+ [Phar::buildFromIterator()](https://www.php.net/manual/en/phar.buildfromiterator.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()