.. _func_get_args()-cannot-be-called-from-the-global-scope:

func_get_args() cannot be called from the global scope
------------------------------------------------------
 
.. meta::
	:description:
		func_get_args() cannot be called from the global scope: ``func_get_args()`` returns the list of arguments used when calling a function or method.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: func_get_args() cannot be called from the global scope
	:og:description: ``func_get_args()`` returns the list of arguments used when calling a function or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/func_get_args%28%29-cannot-be-called-from-the-global-scope.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: func_get_args() cannot be called from the global scope
	:twitter:description: func_get_args() cannot be called from the global scope: ``func_get_args()`` returns the list of arguments used when calling a function or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/func_get_args()-cannot-be-called-from-the-global-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/func_get_args()-cannot-be-called-from-the-global-scope.html","name":"func_get_args() cannot be called from the global scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``func_get_args()`` returns the list of arguments used when calling a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/func_get_args()-cannot-be-called-from-the-global-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``func_get_args()`` returns the list of arguments used when calling a function or method. As such, it must be inside a function to be useful.

Example
_______

.. code-block:: php

   <?php
   
   func_get_args();
   
   ?>

Solutions
_________

+ Remove func_get_args() calls from the global space (outside any function).
+ Move the func_get_args() calls inside a function.

Related Error Messages
______________________

+ :ref:`func_get_arg()-cannot-be-called-from-the-global-scope`
+ :ref:`func_num_args()-must-be-called-from-a-function-context`
