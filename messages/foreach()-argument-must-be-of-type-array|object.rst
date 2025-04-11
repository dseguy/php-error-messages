.. _foreach()-argument-must-be-of-type-array|object:

foreach() argument must be of type array|object
-----------------------------------------------
 
.. meta::
	:description:
		foreach() argument must be of type array|object: foreach() works on arrays or objects.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: foreach() argument must be of type array|object
	:og:description: foreach() works on arrays or objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/foreach%28%29-argument-must-be-of-type-array%7Cobject.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: foreach() argument must be of type array|object
	:twitter:description: foreach() argument must be of type array|object: foreach() works on arrays or objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/foreach()-argument-must-be-of-type-array|object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/foreach()-argument-must-be-of-type-array|object.html","name":"foreach() argument must be of type array|object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"foreach() works on arrays or objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/foreach()-argument-must-be-of-type-array|object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
foreach() works on arrays or objects. 

For the arrays, all the elements of the array are read.

For the objects, it is either the public properties, read like an array; or the object has the Iterator interface: then, there is a list of specific methods to implements, which control how the object is traversed; the object may be a generator, which is a method that uses the ``yield`` keyword; finally, the object may be a PHP native iterator, or a child of them. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null.

Example
_______

.. code-block:: php

   <?php
   
       $source = null;
       foreach($source as $x) { }
   
   ?>

Solutions
_________

+ Check that the source of the foreach can be used with is_iterable().

See Also
________

+ `PHPIterators <https://inspector.dev/php-iterators-for-walking-through-data-structures-fasttips/>`_
+ `PHPsIterator <https://www.php.net/iterator>`_
+ `PHPsGenerator <https://www.php.net/manual/en/class.generator.php>`_


In previous PHP versions, this error message used to be :ref:`invalid-argument-supplied-for-foreach()`.
