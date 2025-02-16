.. _accessing-static-property-%s::\$%s-as-non-static:

Accessing static property %s::$%s as non static
-----------------------------------------------
 
.. meta::
	:description:
		Accessing static property %s::$%s as non static: The ``property`` property is declared as static, and should be access with the ``::`` operator.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Accessing static property %s::$%s as non static
	:og:description: The ``property`` property is declared as static, and should be access with the ``::`` operator
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/accessing-static-property-%25s%3A%3A%24%25s-as-non-static.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Accessing static property %s::$%s as non static
	:twitter:description: Accessing static property %s::$%s as non static: The ``property`` property is declared as static, and should be access with the ``::`` operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/accessing-static-property-%s::$%s-as-non-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/accessing-static-property-%s::$%s-as-non-static.html","name":"Accessing static property %s::$%s as non static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ``property`` property is declared as static, and should be access with the ``::`` operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/accessing-static-property-%s::$%s-as-non-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``property`` property is declared as static, and should be access with the ``::`` operator. 

Accessing that property with the ``->`` or ``?->`` object operators is quite safe, as there is no confusion with the name of the property, and the object holds the name of the host class.

On the other hand, using the object operators does not provide accurate information about the actual property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static $property = 1;
   }
   
   $x = new X;
   echo $x->property;
   
   ?>


Literal Examples
****************
+ Accessing static property X::$property as non static

Solutions
_________

+ Use the ``::`` operator to access static properties.
+ Drop the ``static`` option on the property.
