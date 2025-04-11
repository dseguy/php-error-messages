.. _syntax-error,-unexpected-token-"public":

syntax error, unexpected token "public"
---------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "public": The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;public&quot;
	:og:description: The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22public%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "public"
	:twitter:description: syntax error, unexpected token "public": The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\".html","name":"syntax error, unexpected token \"public\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 17:46:16 +0000","dateModified":"Fri, 11 Apr 2025 17:46:16 +0000","description":"The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function.

This may apply to the other visibilies, ``protected`` and ``private``, and also to some other method options, such as ``abstract``.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       function foo() {
           public $x;
       }
   }
   ?>

Solutions
_________

+ Close the initial method body, before creating another property or method with a visibility.
+ Remove the ``public`` keyword in the body of the method.
