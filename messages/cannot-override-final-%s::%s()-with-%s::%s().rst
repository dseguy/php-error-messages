.. _cannot-override-final-%s::%s()-with-%s::%s():

Cannot override final %s::%s() with %s::%s()
--------------------------------------------
 
.. meta::
	:description:
		Cannot override final %s::%s() with %s::%s(): The ``final`` keyword prevents any child class to define the same constant or method.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot override final %s::%s() with %s::%s()
	:og:description: The ``final`` keyword prevents any child class to define the same constant or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-override-final-%25s%3A%3A%25s%28%29-with-%25s%3A%3A%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot override final %s::%s() with %s::%s()
	:twitter:description: Cannot override final %s::%s() with %s::%s(): The ``final`` keyword prevents any child class to define the same constant or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-override-final-%s::%s()-with-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-override-final-%s::%s()-with-%s::%s().html","name":"Cannot override final %s::%s() with %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 18:26:24 +0000","dateModified":"Tue, 01 Jul 2025 18:26:24 +0000","description":"The ``final`` keyword prevents any child class to define the same constant or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-override-final-%s::%s()-with-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``final`` keyword prevents any child class to define the same constant or method. This impacts any class that tries to extends a ``final`` class.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	final function foo() {}
   }
   
   class Y extends X {
   	function foo() {}
   }
   
   ?>


Literal Examples
****************
+ Cannot override final x::foo() with y::foo()

Solutions
_________

+ Remove the final option in the parent class.
+ Rename the non-final constant or method in the child class.

Related Error Messages
______________________

+ :ref:`%s::%s-cannot-override-final-constant-%s::%s`
