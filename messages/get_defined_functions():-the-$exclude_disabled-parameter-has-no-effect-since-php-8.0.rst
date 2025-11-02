.. _get_defined_functions():-the-\$exclude_disabled-parameter-has-no-effect-since-php-8.0:

get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0
------------------------------------------------------------------------------------
 
.. meta::
	:description:
		get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0: The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0
	:og:description: The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/get_defined_functions%28%29%3A-the-%24exclude_disabled-parameter-has-no-effect-since-php-8.0.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0
	:twitter:description: get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0: The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html","name":"get_defined_functions(): The $exclude_disabled parameter has no effect since PHP 8.0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Nov 2025 20:13:58 +0000","dateModified":"Sun, 02 Nov 2025 20:13:58 +0000","description":"The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-the-$exclude_disabled-parameter-has-no-effect-since-php-8.0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``$exclude_disabled`` parameter of the function get_defined_functions() function is unused since PHP 8.0. In PHP 7.0, it used to remove the disabled function from the result of this function.

Example
_______

.. code-block:: php

   <?php
   
   print_r(get_defined_functions(false));
   
   ?>

Solutions
_________

+ Remove the parameter from any call to get_defined_functions().
