.. _a-%s-with-return-type-must-return-a-value:

A %s with return type must return a value
-----------------------------------------
 
.. meta::
	:description:
		A %s with return type must return a value: When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A %s with return type must return a value
	:og:description: When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-%25s-with-return-type-must-return-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A %s with return type must return a value
	:twitter:description: A %s with return type must return a value: When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-%s-with-return-type-must-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-%s-with-return-type-must-return-a-value.html","name":"A %s with return type must return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:30:35 +0000","dateModified":"Wed, 05 Aug 2026 11:30:35 +0000","description":"When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-%s-with-return-type-must-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a function or a method declares a return type, every ``return`` statement in its body must provide a value, unless the type accepts no returned value (``void``, ``never``) or the type allows ``null``.

Writing a bare ``return;``, without an expression, is only valid when the declared return type permits the absence of a value. Here, ``int`` does not, so the engine cannot supply an implicit value.

This is a compile time check: it does not depend on the code being executed.

Example
_______

.. code-block:: php

   <?php
   
   function foo(): int {
       return;
   }
   
   ?>

Solutions
_________

+ Add a value to the return statement, matching the declared return type.
+ Remove the return type, if the function is not meant to return a value.
+ Change the return type to ``void`` if the function is not meant to return a value.

Related Error Messages
______________________

+ :ref:`a-void-%s-must-not-return-a-value`
+ :ref:`a-void-%s-does-not-return-a-value`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
