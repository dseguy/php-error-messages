.. _syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-',':

syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','
----------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ',': Using the static class syntax directly on an interpolated string was not possible until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;::&#039; (T_PAAMAYIM_NEKUDOTAYIM), expecting &#039;;&#039; or &#039;,&#039;
	:og:description: Using the static class syntax directly on an interpolated string was not possible until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27-%28t_paamayim_nekudotayim%29%2C-expecting-%27%3B%27-or-%27%2C%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','
	:twitter:description: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ',': Using the static class syntax directly on an interpolated string was not possible until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html","name":"syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Using the static class syntax directly on an interpolated string was not possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Using the static class syntax directly on an interpolated string was not possible until PHP 8.0. Until then, it reported a syntax error.

Example
_______

.. code-block:: php

   <?php
   
   class Bar {
       static function foo() {}
       static $property = 3;
       const C = 4;
   }
   
   $a = "ar";
   echo "B$a"::foo();
   echo "B$a"::$property;
   echo "B$a"::C;
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0 or more recent.
+ Store the class name in a variable, and use that variable instead of the direct string.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-'[',-expecting-';'-or-','`
