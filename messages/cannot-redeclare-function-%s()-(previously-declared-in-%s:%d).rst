.. _cannot-redeclare-function-%s()-(previously-declared-in-%s:%d):

Cannot redeclare function %s() (previously declared in %s:%d)
-------------------------------------------------------------
 
.. meta::
	:description:
		Cannot redeclare function %s() (previously declared in %s:%d): Functions must have a unique name: there cannot be two functions with the same name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare function %s() (previously declared in %s:%d)
	:og:description: Functions must have a unique name: there cannot be two functions with the same name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-function-%25s%28%29-%28previously-declared-in-%25s%3A%25d%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare function %s() (previously declared in %s:%d)
	:twitter:description: Cannot redeclare function %s() (previously declared in %s:%d): Functions must have a unique name: there cannot be two functions with the same name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-in-%s:%d).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-in-%s:%d).html","name":"Cannot redeclare function %s() (previously declared in %s:%d)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Functions must have a unique name: there cannot be two functions with the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-in-%s:%d).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Functions must have a unique name: there cannot be two functions with the same name. 

Function names are case insensitive, so making changing the case doesn't make the function name unique.

In fact, two functions in the same namespace cannot have the same name, so the complete constraint is namespace + function must be unique.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {}
   
   function FOO() {}
   
   ?>


Literal Examples
****************
+ Cannot redeclare foo() (previously declared in file:3)

Solutions
_________

+ Change the name of the function.
+ Make the function a closure.
+ Move the function to another namespace.


In previous PHP versions, this error message used to be :ref:`cannot-redeclare-%s()-(previously-declared-in-%s:%d)`.
