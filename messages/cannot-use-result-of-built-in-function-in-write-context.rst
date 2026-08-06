.. _cannot-use-result-of-built-in-function-in-write-context:

Cannot use result of built-in function in write context
-------------------------------------------------------
 
.. meta::
	:description:
		Cannot use result of built-in function in write context: Binding a reference to the return value of a function ($var = &amp;func().
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use result of built-in function in write context
	:og:description: Binding a reference to the return value of a function ($var = &amp;func()
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-result-of-built-in-function-in-write-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use result of built-in function in write context
	:twitter:description: Cannot use result of built-in function in write context: Binding a reference to the return value of a function ($var = &func()
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-result-of-built-in-function-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-result-of-built-in-function-in-write-context.html","name":"Cannot use result of built-in function in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Binding a reference to the return value of a function ($var = &func()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-result-of-built-in-function-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Binding a reference to the return value of a function ($var = &func();) only makes sense if that function itself returns by reference. Built-in, C-implemented functions never do, and unlike a user-defined function, where forgetting the & in the signature merely triggers a notice at run time, the engine can tell this is impossible for an internal function right away, and raises a compile-time error instead.

Example
_______

.. code-block:: php

   <?php
   
   $max = &max(1, 2, 3);
   
   ?>

Solutions
_________

+ Drop the &, and assign the return value normally: $max = max(1, 2, 3);

Related Error Messages
______________________

+ :ref:`can't-use-function-return-value-in-write-context`
+ :ref:`can't-use-method-return-value-in-write-context`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
