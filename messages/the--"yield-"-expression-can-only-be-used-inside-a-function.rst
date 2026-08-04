.. _the--"yield-"-expression-can-only-be-used-inside-a-function:

The \"yield\" expression can only be used inside a function
-----------------------------------------------------------
 
.. meta::
	:description:
		The \"yield\" expression can only be used inside a function: ``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The \&quot;yield\&quot; expression can only be used inside a function
	:og:description: ``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the--%22yield-%22-expression-can-only-be-used-inside-a-function.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The \"yield\" expression can only be used inside a function
	:twitter:description: The \"yield\" expression can only be used inside a function: ``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html","name":"The \\\"yield\\\" expression can only be used inside a function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:22:12 +0000","dateModified":"Tue, 04 Aug 2026 14:22:12 +0000","description":"``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the--\"yield-\"-expression-can-only-be-used-inside-a-function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``yield`` is what turns a function into a generator: it can only appear inside a function body (a named function, a method, a closure, or an arrow function). Using it directly in the top-level script code -- outside of any function -- is meaningless, since there is no generator for it to belong to, and PHP rejects it at compile time.

The same error is raised for any ``yield`` (or ``yield from``) written at the top level of an included or required file, as long as it is not nested inside a function definition there.

Example
_______

.. code-block:: php

   <?php
   
   yield 1;
   
   ?>

Solutions
_________

+ Wrap the code that needs to yield values inside a generator function, and call that function instead.
+ Remove the yield statement if it was left over by mistake.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
