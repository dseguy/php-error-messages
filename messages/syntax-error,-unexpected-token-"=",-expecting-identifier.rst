.. _syntax-error,-unexpected-token-"=",-expecting-identifier:

syntax error, unexpected token "=", expecting identifier
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "=", expecting identifier: In this error, the declared optin name value has been removed.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;=&quot;, expecting identifier
	:og:description: In this error, the declared optin name value has been removed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3D%22%2C-expecting-identifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "=", expecting identifier
	:twitter:description: syntax error, unexpected token "=", expecting identifier: In this error, the declared optin name value has been removed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html","name":"syntax error, unexpected token \"=\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"In this error, the declared optin name value has been removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this error, the declared optin name value has been removed. It could be ``strict_types``, ``ticks`` or ``encoding``.

Example
_______

.. code-block:: php

   <?php
   
   declare(= 1);
   
   declare(= 'iso-8859-1');
   
   ?>

Solutions
_________

+ Add ``strict_types`` before the ``=`` operator.
+ Add ``ticks`` before the ``=`` operator.
+ Add ``encoding`` before the ``=`` operator.
+ Remove the ``declare`` call.
