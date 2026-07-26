.. _cannot-redeclare-class-%s:

Cannot redeclare class %s
-------------------------
 
.. meta::
	:description:
		Cannot redeclare class %s: A class name can only be declared once per request.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare class %s
	:og:description: A class name can only be declared once per request
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare class %s
	:twitter:description: Cannot redeclare class %s: A class name can only be declared once per request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-class-%s.html","name":"Cannot redeclare class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"A class name can only be declared once per request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A class name can only be declared once per request. This error appears when the same class name is declared twice, either directly in the same file, or because a file defining the class was included more than once (for instance with ``include`` instead of ``include_once``), or because two different files both declare a class with the same name.

Unlike functions, PHP does not allow a class to be conditionally redeclared, even if the two declarations are identical.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
   }
   
   class X
   {
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare class X

Solutions
_________

+ Use ``include_once`` or ``require_once`` instead of ``include`` or ``require`` to avoid loading the same file twice.
+ Wrap the class declaration in a ``class_exists()`` check if it may legitimately be loaded more than once.
+ Rename one of the two classes, or move them into different namespaces.

Related Error Messages
______________________

+ :ref:`cannot-redeclare-%s::%s()`
+ :ref:`cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)`
+ :ref:`class-declarations-may-not-be-nested`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
