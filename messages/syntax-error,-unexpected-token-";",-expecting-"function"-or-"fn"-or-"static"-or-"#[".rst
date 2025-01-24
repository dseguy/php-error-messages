.. _syntax-error,-unexpected-token-";",-expecting-"function"-or-"fn"-or-"static"-or-"#[":

syntax error, unexpected token ";", expecting "function" or "fn" or "static" or "#["
------------------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "function" or "fn" or "static" or "#[": In this command, an attribute has been configured.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;function&quot; or &quot;fn&quot; or &quot;static&quot; or &quot;#[&quot;
	:og:description: In this command, an attribute has been configured
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22function%22-or-%22fn%22-or-%22static%22-or-%22%23%5B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "function" or "fn" or "static" or "#["
	:twitter:description: syntax error, unexpected token ";", expecting "function" or "fn" or "static" or "#[": In this command, an attribute has been configured
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","name":"syntax error, unexpected token \";\", expecting \"function\" or \"fn\" or \"static\" or \"#[\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jan 2025 14:05:55 +0000","dateModified":"Fri, 24 Jan 2025 14:05:55 +0000","description":"In this command, an attribute has been configured","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this command, an attribute has been configured. The attributes can only precede a structure, such as a class, method or function. 

In this case, the attribute has been placed inside an expression, so only a closure can be declared: hence, the request for a ``function``, ``fn``. That closure could be ``static`` or have another attribute.

In the end, the closure is not compatible with the ``+`` or similar operator, so the suggestion is not valid here. It could be valid with a comma.

This error appears after PHP 8.0: this is when the ``#[`` token was introduced. Until that version, ``#`` introduces a comment, until the end of the line.

Example
_______

.. code-block:: php

   <?php
   
   1 + #[attribute]; 
   
   

Solutions
_________

+ Remove the attribute.
+ Turn the ``#`` comment into a ``//`` comment.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-")",-expecting-"function"-or-"fn"-or-"static"-or-"#["`
