.. _only-variable-references-should-be-yielded-by-reference:

Only variable references should be yielded by reference
-------------------------------------------------------
 
.. meta::
	:description:
		Only variable references should be yielded by reference: With the ``&amp;`` option in the signature, a generator is yielding values by reference, and not by value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only variable references should be yielded by reference
	:og:description: With the ``&amp;`` option in the signature, a generator is yielding values by reference, and not by value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-variable-references-should-be-yielded-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only variable references should be yielded by reference
	:twitter:description: Only variable references should be yielded by reference: With the ``&`` option in the signature, a generator is yielding values by reference, and not by value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-yielded-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-yielded-by-reference.html","name":"Only variable references should be yielded by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"With the ``&`` option in the signature, a generator is yielding values by reference, and not by value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-yielded-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
With the ``&`` option in the signature, a generator is yielding values by reference, and not by value. This way, literal values cannot be yielded: they must be stored in a variable or property first.

Example
_______

.. code-block:: php

   <?php
   
   function &gen() {
       yield foo;
   }
   
   $gen = gen();
   var_dump($gen->current());
   
   ?>

Solutions
_________

+ Store the literal in a variable and yield the variable.
+ Remove the & in the method signature.
