.. _syntax-error,-unexpected-token-"?->",-expecting-","-or-";":

syntax error, unexpected token "?->", expecting "," or ";"
----------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "?->", expecting "," or ";": The object operator ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;?-&gt;&quot;, expecting &quot;,&quot; or &quot;;&quot;
	:og:description: The object operator ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F-%3E%22%2C-expecting-%22%2C%22-or-%22%3B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "?->", expecting "," or ";"
	:twitter:description: syntax error, unexpected token "?->", expecting "," or ";": The object operator ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"?->\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The object operator ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?->\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The object operator ``?->`` is used in an expression, where it is not expected. 

Here, it is a global variable statement. Such statement were possible in PHP 5 and older, but are not valid anymore since PHP 7.0. Then, PHP would use the content of the property as the name of the global variable. 

The same error is emitted with static variables, with the ``::`` and the ``->`` operators.

Example
_______

.. code-block:: php

   <?php
   
   global $object->property;
   
   static $object->property;
   
   ?>

Solutions
_________

+ Remove the property or method call from the global instruction.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"::",-expecting-","-or-";"`
+ :ref:`syntax-error,-unexpected-token-"->",-expecting-","-or-";"`
