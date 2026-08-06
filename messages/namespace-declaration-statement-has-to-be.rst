.. _namespace-declaration-statement-has-to-be:

Namespace declaration statement has to be
-----------------------------------------
 
.. meta::
	:description:
		Namespace declaration statement has to be: A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Namespace declaration statement has to be
	:og:description: A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/namespace-declaration-statement-has-to-be.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace declaration statement has to be
	:twitter:description: Namespace declaration statement has to be: A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-declaration-statement-has-to-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/namespace-declaration-statement-has-to-be.html","name":"Namespace declaration statement has to be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/namespace-declaration-statement-has-to-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``namespace`` declaration must be the very first statement of the file, or immediately follow a ``declare()`` call (such as ``declare(strict_types=1);``). Any other statement, including a simple ``echo``, a comment that generates output, or whitespace before the opening ``<?php`` tag, placed before the ``namespace`` statement makes it invalid.

The full message reads: ``Namespace declaration statement has to be the very first statement or after any declare call in the script``.

Example
_______

.. code-block:: php

   <?php
   
   echo 'Hello';
   
   namespace App;
   
   ?>


Literal Examples
****************
+ Namespace declaration statement has to be the very first statement or after any declare call in the script

Solutions
_________

+ Move the ``namespace`` statement to be the first statement in the file, right after the opening ``<?php`` tag.
+ Only keep a ``declare()`` call before the ``namespace`` statement, and move everything else after it.
+ Remove any whitespace or output before the opening ``<?php`` tag.

Related Error Messages
______________________

+ :ref:`no-code-may-exist-outside-of-namespace-{}`
+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`cannot-mix-bracketed-namespace-declarations`
+ :ref:`encoding-declaration-pragma-must-be`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
