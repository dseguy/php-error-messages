.. _cannot-decrement-property-%s::\$%s-of-type-int-past-its-minimal-value:

Cannot decrement property %s::$%s of type int past its minimal value
--------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot decrement property %s::$%s of type int past its minimal value: When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot decrement property %s::$%s of type int past its minimal value
	:og:description: When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-decrement-property-%25s%3A%3A%24%25s-of-type-int-past-its-minimal-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot decrement property %s::$%s of type int past its minimal value
	:twitter:description: Cannot decrement property %s::$%s of type int past its minimal value: When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html","name":"Cannot decrement property %s::$%s of type int past its minimal value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:10:06 +0000","dateModified":"Tue, 02 Sep 2025 05:10:06 +0000","description":"When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``. There is a symetric error with the max value of an integer.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $p;
   }
   
   $x = new X;
   
   $x->p = PHP_INT_MIN;
   --$test->foo;
   
   ?>


Literal Examples
****************
+ Cannot decrement property Test::$p of type int past its minimal value

Solutions
_________

+ Check the value before decrementing.
+ Drop the type, but see the property get turned into a float.

Related Error Messages
______________________

+ :ref:`cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value`
