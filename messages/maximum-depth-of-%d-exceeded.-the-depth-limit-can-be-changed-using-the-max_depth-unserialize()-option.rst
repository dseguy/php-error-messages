.. _maximum-depth-of-%d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize()-option:

Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option
-----------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option: PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option
	:og:description: PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/maximum-depth-of-%25d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize%28%29-option.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option
	:twitter:description: Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option: PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/maximum-depth-of-%d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize()-option.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/maximum-depth-of-%d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize()-option.html","name":"Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Feb 2025 14:56:58 +0000","dateModified":"Tue, 04 Feb 2025 14:56:58 +0000","description":"PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/maximum-depth-of-%d-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserialize()-option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 7.4 introduced an option with the unserialize() function. It is called ``max_depth`` and it limits the number of nesting levels that unserialize allows, when producing the PHP structures. This saves memory and processing power.

Example
_______

.. code-block:: php

   <?php
   
   // 4 levels of nesting
   $a = [[[[]]]];
   
   $string = serialize($a);
   
   print_r(unserialize($string, ['max_depth' => 2]));
   
   ?>


Literal Examples
****************
+ Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option

Solutions
_________

+ Remove the option from the call to unserialize().
+ Check the string and count the level of nesting, before calling unserialize().
