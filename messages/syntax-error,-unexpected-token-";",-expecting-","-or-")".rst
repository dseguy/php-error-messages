.. _syntax-error,-unexpected-token-";",-expecting-","-or-")":

syntax error, unexpected token ";", expecting "," or ")"
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "," or ")": The ``declare`` instruction was not finished properly.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;,&quot; or &quot;)&quot;
	:og:description: The ``declare`` instruction was not finished properly
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%2C%22-or-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "," or ")"
	:twitter:description: syntax error, unexpected token ";", expecting "," or ")": The ``declare`` instruction was not finished properly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html","name":"syntax error, unexpected token \";\", expecting \",\" or \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``declare`` instruction was not finished properly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\",\"-or-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``declare`` instruction was not finished properly. ``declare`` accepts one or more paramter. With one parameter, the instruction must be closed with a closing parenthesis after the value expression; with multiple parameters, the parameters are separated by commas ``,``, and the last parameter is followed by a closing parenthesis. 

This error message is dedicated to ``declare``, as similar other syntaxes yield distinct error messages.

Example
_______

.. code-block:: php

   <?php
   
   declare(strict_types=1;
   
   ?>

Solutions
_________

+ Add a closing parenthesis between the ``1`` and the semi-colon ``;``.
+ Add a comma after the ``1``, provide another parameter, and close the ``declare`` with a closing parenthesis.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-";",-expecting-")"`
