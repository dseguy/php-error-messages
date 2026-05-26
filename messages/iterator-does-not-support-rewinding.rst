.. _iterator-does-not-support-rewinding:

Iterator does not support rewinding
-----------------------------------
 
.. meta::
	:description:
		Iterator does not support rewinding: Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Iterator does not support rewinding
	:og:description: Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/iterator-does-not-support-rewinding.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iterator does not support rewinding
	:twitter:description: Iterator does not support rewinding: Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/iterator-does-not-support-rewinding.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/iterator-does-not-support-rewinding.html","name":"Iterator does not support rewinding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 21:18:41 +0000","dateModified":"Tue, 26 May 2026 21:18:41 +0000","description":"Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/iterator-does-not-support-rewinding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Iterators are executed one way, and cannot be rewind: once they have reached the end of their list of value, they stay there. Some Iterator subclasses are able to rewind at the beginning of the list, though.

Example
_______

.. code-block:: php

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

Solutions
_________

+ Create a second iterator, based on the first one, and run the second operation with it.
+ Replace the usage of the Iterator by a subclass, that accepts rewind, such as ArrayIterator.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
