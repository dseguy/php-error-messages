.. _cannot-increment-property-%s::\$%s-of-type-int-past-its-maximal-value:

Cannot increment property %s::$%s of type int past its maximal value
--------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot increment property %s::$%s of type int past its maximal value: When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot increment property %s::$%s of type int past its maximal value
	:og:description: When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-increment-property-%25s%3A%3A%24%25s-of-type-int-past-its-maximal-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot increment property %s::$%s of type int past its maximal value
	:twitter:description: Cannot increment property %s::$%s of type int past its maximal value: When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html","name":"Cannot increment property %s::$%s of type int past its maximal value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:08:34 +0000","dateModified":"Tue, 02 Sep 2025 05:08:34 +0000","description":"When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float. There is a symetric error with the min value of an integer.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $p;
   }
   
   $x = new X;
   
   $x->p = PHP_INT_MAX;
   ++$test->foo;
   
   ?>


Literal Examples
****************
+ Cannot increment property X::$p of type int past its maximal value

Solutions
_________

+ Check the value before incrementing.
+ Drop the type, but see the property get turned into a float.

Related Error Messages
______________________

+ :ref:`cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value`
