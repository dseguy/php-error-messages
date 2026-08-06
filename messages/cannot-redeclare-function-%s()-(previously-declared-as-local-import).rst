.. _cannot-redeclare-function-%s()-(previously-declared-as-local-import):

Cannot redeclare function %s() (previously declared as local import)
--------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot redeclare function %s() (previously declared as local import): A ``use function`` statement imports a function under a local name, in the current namespace.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare function %s() (previously declared as local import)
	:og:description: A ``use function`` statement imports a function under a local name, in the current namespace
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-function-%25s%28%29-%28previously-declared-as-local-import%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare function %s() (previously declared as local import)
	:twitter:description: Cannot redeclare function %s() (previously declared as local import): A ``use function`` statement imports a function under a local name, in the current namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html","name":"Cannot redeclare function %s() (previously declared as local import)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:19:30 +0000","dateModified":"Wed, 05 Aug 2026 16:19:30 +0000","description":"A ``use function`` statement imports a function under a local name, in the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``use function`` statement imports a function under a local name, in the current namespace. When a function is then declared, in the same namespace, under that same local name, and its declared name differs (case insensitively) from the fully qualified imported name, PHP cannot tell which of the import or the local declaration should be used.

This is detected at compile time, as soon as the local function declaration is compiled.

Example
_______

.. code-block:: php

   <?php
   
   namespace App;
   
   use function Other\bar;
   
   function bar() {}
   
   ?>


Literal Examples
****************
+ Cannot redeclare function bar() (previously declared as local import)

Solutions
_________

+ Remove the ``use function`` import, and call the function using its fully qualified name.
+ Alias the import with the ``as`` keyword, so it no longer collides with the local function name.
+ Rename the local function.

Related Error Messages
______________________

+ :ref:`cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)`
+ :ref:`cannot-redeclare-%s()-(previously-declared-in-%s:%d)`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
