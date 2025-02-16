.. _too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected:

Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected
-------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected: This error is emitted when the number of arguments to call a method or a function is not enough.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected
	:og:description: This error is emitted when the number of arguments to call a method or a function is not enough
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments-to-function-%25s%25s%25s%28%29%2C-%25d-passed-in-%25s-on-line-%25d-and-%25s-%25d-expected.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected
	:twitter:description: Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected: This error is emitted when the number of arguments to call a method or a function is not enough
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html","name":"Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error is emitted when the number of arguments to call a method or a function is not enough","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when the number of arguments to call a method or a function is not enough.

Without the required number of arguments at function call, the function cannot execute, as some variables would be missing.

This error covers situations where all the arguments are compulsory.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(1);
   
   ?>


Literal Examples
****************
+ Too few arguments to function foo(), 1 passed in file.php on line 5 and exactly 2 expected

Solutions
_________

+ Add the missing arguments.
+ Add default values to the missing arguments.

Related Error Messages
______________________

+ :ref:`too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d`
