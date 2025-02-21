.. _syntax-error,-unexpected-token-"&":

syntax error, unexpected token "&"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "&": The ``&amp;`` operator is used in two distinct situations: as the bitwise operator, between two different values.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;&amp;&quot;
	:og:description: The ``&amp;`` operator is used in two distinct situations: as the bitwise operator, between two different values
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%26%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "&"
	:twitter:description: syntax error, unexpected token "&": The ``&`` operator is used in two distinct situations: as the bitwise operator, between two different values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"&\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"&\".html","name":"syntax error, unexpected token \"&\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``&`` operator is used in two distinct situations: as the bitwise operator, between two different values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"&\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``&`` operator is used in two distinct situations: as the bitwise operator, between two different values; as the reference operator, before a variable.

As the reference operator, it may be used in a method signature, to identify a passed-by-reference argument. It may not be used anymore at call time, for sending an argument nor receiving a value. 

The reference operator returns a new reference, and it should be stored in another variable (or any data container). Otherwise, it is.

Example
_______

.. code-block:: php

   <?php
   
   function foo(&$a) {}
   
   // Cannot make a reference at call time
   foo(&$c);
   
   // Cannot return a reference at call time
   $d = &foo($c);
   
   ?>

Solutions
_________

+ Remove the ``&`` in function call's argument, and put it in the function signature.
+ Remove the ``&`` in function call returned value, and put it in the function signature.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"&",-expecting-end-of-file`
