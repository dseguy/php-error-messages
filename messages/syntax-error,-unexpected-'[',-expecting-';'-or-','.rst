.. _syntax-error,-unexpected-'[',-expecting-';'-or-',':

syntax error, unexpected '[', expecting ';' or ','
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected '[', expecting ';' or ',': Using the array syntax directly on an interpolated string was not possible until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;[&#039;, expecting &#039;;&#039; or &#039;,&#039;
	:og:description: Using the array syntax directly on an interpolated string was not possible until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%5B%27%2C-expecting-%27%3B%27-or-%27%2C%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected '[', expecting ';' or ','
	:twitter:description: syntax error, unexpected '[', expecting ';' or ',': Using the array syntax directly on an interpolated string was not possible until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html","name":"syntax error, unexpected '[', expecting ';' or ','","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Using the array syntax directly on an interpolated string was not possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'[',-expecting-';'-or-','.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Using the array syntax directly on an interpolated string was not possible until PHP 8.0. Until then, it reported a syntax error.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'foo';
   echo bar$a[4]; // display f
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0 or more.
+ Put the string in a variable first.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','`
