.. _function-name-must-be-a-string:

Function name must be a string
------------------------------
 
.. meta::
	:description:
		Function name must be a string: When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Function name must be a string
	:og:description: When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/function-name-must-be-a-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function name must be a string
	:twitter:description: Function name must be a string: When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-name-must-be-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-name-must-be-a-string.html","name":"Function name must be a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/function-name-must-be-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist.

Some other scalars, such as integer, might be used as function name, although it will fail.

Example
_______

.. code-block:: php

   <?php
   
   $method = new stdClass;
   $method();
   
   ?>

Solutions
_________

+ Only use string names for dynamic call to functions.
+ Cast the variable to string before using it.


In more recent PHP versions, this error message is now :ref:`object-of-type-%s-is-not-callable`.
