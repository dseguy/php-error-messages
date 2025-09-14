.. _must-be-of-type-countable|array,-%s-given:

must be of type Countable|array, %s given
-----------------------------------------
 
.. meta::
	:description:
		must be of type Countable|array, %s given: The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be of type Countable|array, %s given
	:og:description: The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-of-type-countable%7Carray%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be of type Countable|array, %s given
	:twitter:description: must be of type Countable|array, %s given: The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-of-type-countable|array,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-of-type-countable|array,-%s-given.html","name":"must be of type Countable|array, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 08:02:40 +0000","dateModified":"Sun, 14 Sep 2025 08:02:40 +0000","description":"The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-of-type-countable|array,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface. Anything else yields a fatal error.

Example
_______

.. code-block:: php

   <?php
   
   $value = null;
   echo count($value);
   
   ?>

Solutions
_________

+ Check for type before using count: ``is_array`` or ``instanceof \Countable``.


In previous PHP versions, this error message used to be :ref:`parameter-must-be-an-array-or-an-object-that-implements-countable`.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Structures/CanCountNonCountable <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/CanCountNonCountable.html>`_.
