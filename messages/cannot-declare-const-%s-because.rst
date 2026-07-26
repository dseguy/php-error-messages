.. _cannot-declare-const-%s-because:

Cannot declare const %s because
-------------------------------
 
.. meta::
	:description:
		Cannot declare const %s because: This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare const %s because
	:og:description: This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-const-%25s-because.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare const %s because
	:twitter:description: Cannot declare const %s because: This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-const-%s-because.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-const-%s-because.html","name":"Cannot declare const %s because","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:31:08 +0000","dateModified":"Sun, 26 Jul 2026 06:31:08 +0000","description":"This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-declare-const-%s-because.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const ... as ...`` import.

The full message reads: ``Cannot declare const %s because the name is already in use``.

Example
_______

.. code-block:: php

   <?php
   
   use const App\FOO as BAR;
   
   const BAR = 42;
   
   ?>


Literal Examples
****************
+ Cannot declare const BAR because the name is already in use

Solutions
_________

+ Rename the ``const`` declaration.
+ Change the alias used in the ``use const`` import.

Related Error Messages
______________________

+ :ref:`cannot-use%s-%s-as-%s-because-the-name-is-already-in-use`
+ :ref:`cannot-redeclare-constant-'%s'`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
