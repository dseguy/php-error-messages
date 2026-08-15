# Iterator does not support rewinding

## Description
Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there. Some Iterator subclasses are able to rewind at the beginning of the list, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-does-not-support-rewinding.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-does-not-support-rewinding.html","name":"Iterator does not support rewinding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 21:18:41 +0000","dateModified":"Tue, 26 May 2026 21:18:41 +0000","description":"Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/iterator-does-not-support-rewinding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$XML = <<< XML
<root>
  <item>1</item>
  <item>2</item>
  <item>3</item>
</root>
XML;

$dom = new DomDocument();
$dom->loadXml($XML);
$items = $dom->getElementsByTagName('item');

echo 'Count: '.count($items).PHP_EOL;
echo 'Count: '.iterator_count($items->getIterator()).PHP_EOL;
$it = new IteratorIterator($items);
echo 'Count: '.iterator_count($it).PHP_EOL;
echo 'Count: '.iterator_count($it).PHP_EOL;

?>
```

## Alternatives
+ Create a second iterator, based on the first one, and run the second operation with it.
+ Replace the usage of the Iterator by a subclass, that accepts rewind, such as ArrayIterator.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()