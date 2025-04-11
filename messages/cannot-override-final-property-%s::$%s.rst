.. _cannot-override-final-property-%s::\$%s:

Cannot override final property %s::$%s
--------------------------------------
 
.. meta::
	:description:
		Cannot override final property %s::$%s: A property that is private for writing, is automatically considered ``final``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot override final property %s::$%s
	:og:description: A property that is private for writing, is automatically considered ``final``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-override-final-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot override final property %s::$%s
	:twitter:description: Cannot override final property %s::$%s: A property that is private for writing, is automatically considered ``final``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-override-final-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-override-final-property-%s::$%s.html","name":"Cannot override final property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A property that is private for writing, is automatically considered ``final``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-override-final-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property that is private for writing, is automatically considered ``final``. That is, it cannot be redeclared in a child class, with a different visibility.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public private(set) int $property;
   }
   
   class Y extends X {
   	public int $property;
   }
   
   new Y;
   
   ?>


Literal Examples
****************
+ Cannot override final property X::$property

Solutions
_________

+ Remove the asymmetric visibility from the parent class.
+ Remove the property declaration from the child class.
+ Add the ``final`` keyword to the property declaration in the parent (and adapt the children).
