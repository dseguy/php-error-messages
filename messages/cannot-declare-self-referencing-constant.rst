.. _cannot-declare-self-referencing-constant:

Cannot declare self-referencing constant
----------------------------------------
 
.. meta::
	:description:
		Cannot declare self-referencing constant: A self-referencing constant is a constant that is defined by itself.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare self-referencing constant
	:og:description: A self-referencing constant is a constant that is defined by itself
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-self-referencing-constant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare self-referencing constant
	:twitter:description: Cannot declare self-referencing constant: A self-referencing constant is a constant that is defined by itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-self-referencing-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-self-referencing-constant.html","name":"Cannot declare self-referencing constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A self-referencing constant is a constant that is defined by itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-declare-self-referencing-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A self-referencing constant is a constant that is defined by itself.

This error doesn't apply to global constants. The global constants are immediately made available, and, for that, they need to be evaluated: this leads to the error ``Undefined constant A``.

Self-referencing constants are not allowed, contraty to self-referencing acronym, that PHP enjoys.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const A = x::A + 1;
   
       const B = self::C + 1;
       const C = x::B + 1;
   }
   
   ?>

Solutions
_________

+ Create a distinct constant that can help build this one.
+ Fix the name of the constant with a distinct one.
+ Fix the name of the class with a distinct one.

Related Error Messages
______________________

+ :ref:`undefined-constant-"%s`
