.. _syntax-error,-unexpected-token-",",-expecting-variable:

syntax error, unexpected token ",", expecting variable
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ",", expecting variable: This error is reported when a list of variable is expected after a keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;,&quot;, expecting variable
	:og:description: This error is reported when a list of variable is expected after a keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2C%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ",", expecting variable
	:twitter:description: syntax error, unexpected token ",", expecting variable: This error is reported when a list of variable is expected after a keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-variable.html","name":"syntax error, unexpected token \",\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Jan 2025 10:15:15 +0000","dateModified":"Sun, 19 Jan 2025 10:15:15 +0000","description":"This error is reported when a list of variable is expected after a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when a list of variable is expected after a keyword.

This is the case with the visibility options ``public``, ``protected`` and ``private``, which expect a list of property names.

This is also the case with ``global`` and ``static``, which are declaring global and static variables.

Generally speaking, there can be no two successive commas in an expression, except with the ``list()`` keyword.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public $a, , $c;
   	
   	public function foo() {
   	    static $a, , $c;
   	}
   }
   ?>

Solutions
_________

+ Remove the extra comma.
+ Fill the empty slot with a variable.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable-or-"$"`
