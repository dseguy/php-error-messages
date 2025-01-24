.. _method-name-must-be-a-string:

Method name must be a string
----------------------------
 
.. meta::
	:description:
		Method name must be a string: When using a dynamic syntax to call a method, the name of the method must be a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method name must be a string
	:og:description: When using a dynamic syntax to call a method, the name of the method must be a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-name-must-be-a-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method name must be a string
	:twitter:description: Method name must be a string: When using a dynamic syntax to call a method, the name of the method must be a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-name-must-be-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-name-must-be-a-string.html","name":"Method name must be a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 09:59:26 +0000","dateModified":"Fri, 17 Jan 2025 09:59:26 +0000","description":"When using a dynamic syntax to call a method, the name of the method must be a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-name-must-be-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using a dynamic syntax to call a method, the name of the method must be a string. It cannot be any other type, as no type juggling will take place. In particular, objects with ``toString`` are not converted to their string value.

Although method names have a specific format, this is not checked here, and the string is used raw.

Note that there is not equivalent for dynamic property names: they are cast to string as needed.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() {}
   }
   
   $b = 1;
   X::$b();
   
   ?>

Solutions
_________

+ Cast the variable to string first, with ``(string)``.
+ Check if the variable is a string before using it.
+ Use a switch to hardcode the method name.
