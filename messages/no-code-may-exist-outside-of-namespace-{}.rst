.. _no-code-may-exist-outside-of-namespace-{}:

No code may exist outside of namespace {}
-----------------------------------------
 
.. meta::
	:description:
		No code may exist outside of namespace {}: When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: No code may exist outside of namespace {}
	:og:description: When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/no-code-may-exist-outside-of-namespace-%7B%7D.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No code may exist outside of namespace {}
	:twitter:description: No code may exist outside of namespace {}: When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/no-code-may-exist-outside-of-namespace-{}.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/no-code-may-exist-outside-of-namespace-{}.html","name":"No code may exist outside of namespace {}","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Feb 2025 13:57:48 +0000","dateModified":"Sat, 22 Feb 2025 13:57:48 +0000","description":"When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/no-code-may-exist-outside-of-namespace-{}.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks. Here, the function ``foo()`` is outside the namespace block. 

The error message is not strictly true: the ``declare`` command may be left out of the namespace, and so does any comments.

Example
_______

.. code-block:: php

   <?php
   
   namespace A {
   
   }
   
   function foo() {}
   
   ?>

Solutions
_________

+ Move all the code inside a namespace block.
+ For global namespace, use the ``namespace {...}`` command without a name.
+ Switch to the namespace command without block: all the code will be in that namespace, until the next namespace command.
