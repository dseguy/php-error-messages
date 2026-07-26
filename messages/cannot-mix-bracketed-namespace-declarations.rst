.. _cannot-mix-bracketed-namespace-declarations:

Cannot mix bracketed namespace declarations
-------------------------------------------
 
.. meta::
	:description:
		Cannot mix bracketed namespace declarations: PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot mix bracketed namespace declarations
	:og:description: PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-mix-bracketed-namespace-declarations.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot mix bracketed namespace declarations
	:twitter:description: Cannot mix bracketed namespace declarations: PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-bracketed-namespace-declarations.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-bracketed-namespace-declarations.html","name":"Cannot mix bracketed namespace declarations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-mix-bracketed-namespace-declarations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP supports two syntaxes to declare a namespace: the unbracketed form, ``namespace Foo;``, which applies to the rest of the file (or until the next ``namespace`` statement), and the bracketed form, ``namespace Foo { ... }``, which delimits the namespace explicitly.

A single file must consistently use one form or the other; mixing bracketed and unbracketed declarations together is not allowed. The full message reads: ``Cannot mix bracketed namespace declarations with unbracketed namespace declarations``.

Example
_______

.. code-block:: php

   <?php
   
   namespace A {
       // bracketed syntax
   }
   
   namespace B;
   // unbracketed syntax, in the same file
   
   ?>

Solutions
_________

+ Convert every ``namespace`` statement in the file to the bracketed form.
+ Convert every ``namespace`` statement in the file to the unbracketed form.
+ Split the file so that each file only uses one of the two forms.

Related Error Messages
______________________

+ :ref:`namespace-declarations-cannot-be-nested`
+ :ref:`no-code-may-exist-outside-of-namespace-{}`
+ :ref:`namespace-declaration-statement-has-to-be`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
