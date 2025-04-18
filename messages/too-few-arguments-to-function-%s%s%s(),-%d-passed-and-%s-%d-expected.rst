.. _too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected:

Too few arguments to function %s%s%s(), %d passed and %s %d expected
--------------------------------------------------------------------
 
.. meta::
	:description:
		Too few arguments to function %s%s%s(), %d passed and %s %d expected: This error reports that not enough parameters were used when calling a method or a function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Too few arguments to function %s%s%s(), %d passed and %s %d expected
	:og:description: This error reports that not enough parameters were used when calling a method or a function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments-to-function-%25s%25s%25s%28%29%2C-%25d-passed-and-%25s-%25d-expected.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Too few arguments to function %s%s%s(), %d passed and %s %d expected
	:twitter:description: Too few arguments to function %s%s%s(), %d passed and %s %d expected: This error reports that not enough parameters were used when calling a method or a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html","name":"Too few arguments to function %s%s%s(), %d passed and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports that not enough parameters were used when calling a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that not enough parameters were used when calling a method or a function. All the arguments in the method signature are compulsory.

While there is an error message when there are missing arguments at call time, there is not error when too many arguments are provided.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(1);
   
   ?>


Literal Examples
****************
+ Too few arguments to function foo(), 1 passed and exactly 2 expected

Solutions
_________

+ Provide more arguments to the method call.
+ Add default values to the missing parameters in the method signature.

Related Error Messages
______________________

+ :ref:`too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d`
