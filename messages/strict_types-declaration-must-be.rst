.. _strict_types-declaration-must-be:

strict_types declaration must be
--------------------------------
 
.. meta::
	:description:
		strict_types declaration must be: This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: strict_types declaration must be
	:og:description: This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/strict_types-declaration-must-be.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strict_types declaration must be
	:twitter:description: strict_types declaration must be: This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be.html","name":"strict_types declaration must be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:16:14 +0000","dateModified":"Tue, 04 Aug 2026 19:16:14 +0000","description":"This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/strict_types-declaration-must-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = ...)`` pragma changes how the whole file is compiled, so PHP must see it before compiling anything else. Here, the ``namespace`` statement, itself harmless, is still a statement, and it pushes the ``declare()`` out of first position.

Only a preceding ``declare()`` call (for ``ticks`` or ``encoding``) is tolerated before it; any other statement is not.

Example
_______

.. code-block:: php

   <?php
   
   namespace App;
   
   declare(strict_types = 1);
   
   ?>


Literal Examples
****************
+ strict_types declaration must be the very first statement in the script

Solutions
_________

+ Move the ``declare(strict_types = 1)`` statement to be the very first statement in the file.

Related Error Messages
______________________

+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`strict_types-declaration-must-not`
+ :ref:`strict_types-declaration-must-be`
+ :ref:`strict_types-declaration-must-have-0-or-1-as-its-value`


In more recent PHP versions, this error message is now :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
