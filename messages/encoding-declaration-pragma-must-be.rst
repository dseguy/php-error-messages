.. _encoding-declaration-pragma-must-be:

Encoding declaration pragma must be
-----------------------------------
 
.. meta::
	:description:
		Encoding declaration pragma must be: The ``declare(encoding = .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Encoding declaration pragma must be
	:og:description: The ``declare(encoding = 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/encoding-declaration-pragma-must-be.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Encoding declaration pragma must be
	:twitter:description: Encoding declaration pragma must be: The ``declare(encoding = 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/encoding-declaration-pragma-must-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/encoding-declaration-pragma-must-be.html","name":"Encoding declaration pragma must be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:15 +0000","dateModified":"Mon, 27 Jul 2026 16:18:15 +0000","description":"The ``declare(encoding = ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/encoding-declaration-pragma-must-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``declare(encoding = ...)`` pragma sets the source encoding PHP uses to parse the rest of the script, so, like ``strict_types``, it has to be known before anything else in the file is compiled. It must therefore be the very first statement in the script, exactly like the ``strict_types`` declaration.

The full message reads: ``Encoding declaration pragma must be the very first statement in the script``. In practice, this directive only has an effect when the ``zend.multibyte`` ini setting is enabled; otherwise it is silently ignored, but the placement rule is still enforced.

Example
_______

.. code-block:: php

   <?php
   
   echo 'Hello';
   
   declare(encoding = 'ISO-8859-1');
   
   ?>


Literal Examples
****************
+ Encoding declaration pragma must be the very first statement in the script

Solutions
_________

+ Move the ``declare(encoding = ...)`` statement to be the very first statement in the file.
+ Remove any characters or statements placed before the opening ``<?php`` tag.

Related Error Messages
______________________

+ :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`
+ :ref:`namespace-declaration-statement-has-to-be`
+ :ref:`declare(%s)-value-must-be-a-literal`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
