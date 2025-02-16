.. _cannot-make-non-static-method-%s::%s()-static-in-class-%s:

Cannot make non static method %s::%s() static in class %s
---------------------------------------------------------
 
.. meta::
	:description:
		Cannot make non static method %s::%s() static in class %s: Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot make non static method %s::%s() static in class %s
	:og:description: Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-make-non-static-method-%25s%3A%3A%25s%28%29-static-in-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot make non static method %s::%s() static in class %s
	:twitter:description: Cannot make non static method %s::%s() static in class %s: Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-make-non-static-method-%s::%s()-static-in-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-make-non-static-method-%s::%s()-static-in-class-%s.html","name":"Cannot make non static method %s::%s() static in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 23:07:03 +0000","dateModified":"Sun, 16 Feb 2025 23:07:03 +0000","description":"Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-make-non-static-method-%s::%s()-static-in-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo() {}
   }
   
   class Y extends X {
       static function foo() {}
   }
   
   ?>


Literal Examples
****************
+ Cannot make non static method X::foo() static in class Y

Solutions
_________

+ Add the ``static`` keyword to the method in the parent class.
+ Remove the ``static`` keyword in all eponymous methods in the children class.
+ Rename some of the methods to avoid a ``static`` conflict.

Related Error Messages
______________________

+ :ref:`cannot-make-static-method-%s::%s()-non-static-in-class-%s`
