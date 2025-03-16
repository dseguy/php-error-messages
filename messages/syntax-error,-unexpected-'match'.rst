.. _syntax-error,-unexpected-'match':

syntax error, unexpected 'match'
--------------------------------
 
.. meta::
	:description:
		syntax error, unexpected 'match': This error is related to ``match`` being a PHP keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;match&#039;
	:og:description: This error is related to ``match`` being a PHP keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27match%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected 'match'
	:twitter:description: syntax error, unexpected 'match': This error is related to ``match`` being a PHP keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'match'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'match'.html","name":"syntax error, unexpected 'match'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Mar 2025 09:36:44 +0000","dateModified":"Sun, 16 Mar 2025 09:36:44 +0000","description":"This error is related to ``match`` being a PHP keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'match'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is related to ``match`` being a PHP keyword. Since PHP 8.0, it cannot be used anymore as a class or interface name. When moving from PHP 7 to 8, any traditional usage of ``match`` where a class name is expected shall produce such an error.

In the illustrations, no more details are provided about the reason why ``match`` is not allowed. Other situation may provide better hints.

This error applies to all PHP keywords. ``match`` is only the most common, as it is a new PHP 8.0 keyword.

Example
_______

.. code-block:: php

   <?php
   
   // Cannot use Match here.
   interface X extends Match { }
   
   // Cannot use Match here.
   class Y implements Match { 
   
       // Cannot use Match here.
       use Match;
   }
   
   ?>

Solutions
_________

+ Rename ``Match`` to something that is not a PHP keyword.
+ Stay on PHP 7.x.
