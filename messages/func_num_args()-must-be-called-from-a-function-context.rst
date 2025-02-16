.. _func_num_args()-must-be-called-from-a-function-context:

func_num_args() must be called from a function context
------------------------------------------------------
 
.. meta::
	:description:
		func_num_args() must be called from a function context: ``func_num_arg()`` returns the number of arguments used when calling a function or method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: func_num_args() must be called from a function context
	:og:description: ``func_num_arg()`` returns the number of arguments used when calling a function or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/func_num_args%28%29-must-be-called-from-a-function-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: func_num_args() must be called from a function context
	:twitter:description: func_num_args() must be called from a function context: ``func_num_arg()`` returns the number of arguments used when calling a function or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/func_num_args()-must-be-called-from-a-function-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/func_num_args()-must-be-called-from-a-function-context.html","name":"func_num_args() must be called from a function context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"``func_num_arg()`` returns the number of arguments used when calling a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/func_num_args()-must-be-called-from-a-function-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``func_num_arg()`` returns the number of arguments used when calling a function or method. As such, it must be inside a function to be useful.

Example
_______

.. code-block:: php

   <?php
   
   func_num_args();
   
   ?>

Solutions
_________

+ Remove func_num_args() calls from the global space (outside any function).
+ Move the func_num_args() calls inside a function.

Related Error Messages
______________________

+ :ref:`func_get_args()-cannot-be-called-from-the-global-scope`
+ :ref:`func_get_arg()-cannot-be-called-from-the-global-scope`
