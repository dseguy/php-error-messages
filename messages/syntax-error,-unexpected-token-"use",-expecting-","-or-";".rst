.. _syntax-error,-unexpected-token-"use",-expecting-","-or-";":

syntax error, unexpected token "use", expecting "," or ";"
----------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "use", expecting "," or ";": The previous ``use`` command was not properly finished with a semi-colon.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;use&quot;, expecting &quot;,&quot; or &quot;;&quot;
	:og:description: The previous ``use`` command was not properly finished with a semi-colon
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22use%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "use", expecting "," or ";"
	:twitter:description: syntax error, unexpected token "use", expecting "," or ";": The previous ``use`` command was not properly finished with a semi-colon
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"use\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Mar 2025 14:16:25 +0000","dateModified":"Sat, 15 Mar 2025 14:16:25 +0000","description":"The previous ``use`` command was not properly finished with a semi-colon","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The previous ``use`` command was not properly finished with a semi-colon. It could also be 

Example
_______

.. code-block:: php

   <?php
   
   use A as B
   use C as D;
   
   ?>

Solutions
_________

+ Add another ``use`` case, with a comma, and then finish the instruction with ``;``.
+ Finish the previous ``use`` case, with a semi colon ``;``.
+ Remove the next ``use`` keyword, and replace it with a comma.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"use"`
