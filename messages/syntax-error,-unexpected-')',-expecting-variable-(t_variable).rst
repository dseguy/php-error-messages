.. _syntax-error,-unexpected-')',-expecting-variable-(t_variable):

syntax error, unexpected ')', expecting variable (T_VARIABLE)
-------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected ')', expecting variable (T_VARIABLE): This error is related to the support the trailing comma in function calls: in PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;)&#039;, expecting variable (T_VARIABLE)
	:og:description: This error is related to the support the trailing comma in function calls: in PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-variable-%28t_variable%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected ')', expecting variable (T_VARIABLE)
	:twitter:description: syntax error, unexpected ')', expecting variable (T_VARIABLE): This error is related to the support the trailing comma in function calls: in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html","name":"syntax error, unexpected ')', expecting variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:20:22 +0000","dateModified":"Sun, 16 Feb 2025 12:20:22 +0000","description":"This error is related to the support the trailing comma in function calls: in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-variable-(t_variable).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is related to the support the trailing comma in function calls: in PHP 7.4, it is allowed to add a final comma at the end of the arguments list, and yet, not provide an extra argument.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a,
                $b,
                $c) { echo __METHOD__; }
   
   echo foo(1,
            2,
            3,
            );
   
   ?>

Solutions
_________

+ Upgrade to PHP 7.4.
+ Remove the trailing comma.
