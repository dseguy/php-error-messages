.. _"static::"-is-not-allowed-in-compile-time-constants:

"static::" is not allowed in compile-time constants
---------------------------------------------------
 
.. meta::
	:description:
		"static::" is not allowed in compile-time constants: The ``static`` keyword is a relative class identifier.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &quot;static::&quot; is not allowed in compile-time constants
	:og:description: The ``static`` keyword is a relative class identifier
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%22static%3A%3A%22-is-not-allowed-in-compile-time-constants.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: "static::" is not allowed in compile-time constants
	:twitter:description: "static::" is not allowed in compile-time constants: The ``static`` keyword is a relative class identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/\"static::\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/\"static::\"-is-not-allowed-in-compile-time-constants.html","name":"\"static::\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``static`` keyword is a relative class identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/\"static::\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``static`` keyword is a relative class identifier. It is resolved at execution time, depending on which class is calling the expression.

In the case of constants, such as class constants or default values in parameters or properties, they must be known at compile time, to be usable as soon as the application start. 

On the other hand, ``self`` and ``parent`` are valid relative values, as there can only be one.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       const C = static::NAME;
   }
   
   class X {
   	public $c = static::name;
       function foo($c = static::NAME) {}
   }
   
   ?>

Solutions
_________

+ Use self::.
+ Set the value dynamically, at execution time.
