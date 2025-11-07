.. _syntax-error,-unexpected-token-"private",-expecting-"=":

syntax error, unexpected token "private", expecting "="
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "private", expecting "=": The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;private&quot;, expecting &quot;=&quot;
	:og:description: The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22private%22%2C-expecting-%22%3D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "private", expecting "="
	:twitter:description: syntax error, unexpected token "private", expecting "=": The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html","name":"syntax error, unexpected token \"private\", expecting \"=\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 09:57:05 +0000","dateModified":"Fri, 07 Nov 2025 09:57:05 +0000","description":"The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\"=\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The name of class constant could not use PHP keywords, such as the visibilities ``private``, ``protected`` and ``public``; optiosn such as ``abstract`` or ``final``, until PHP 8.3. Until then, they would generate a parse error. Such names are generally not used, as they easily sow confusion in the code, at definition but also at usage.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private const string private = 'protected';
   }
   
   ?>

Solutions
_________

+ Use another name for the constant.
+ Upgrade to PHP 8.3 or more recent.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
