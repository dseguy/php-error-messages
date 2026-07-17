.. _syntax-error,-unexpected-token-"#[",-expecting-")":

syntax error, unexpected token "#[", expecting ")"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "#[", expecting ")": Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;#[&quot;, expecting &quot;)&quot;
	:og:description: Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%23%5B%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "#[", expecting ")"
	:twitter:description: syntax error, unexpected token "#[", expecting ")": Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html","name":"syntax error, unexpected token \"#[\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:10 +0000","dateModified":"Wed, 15 Jul 2026 07:12:10 +0000","description":"Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"#[\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Attributes can only be placed in front of the declarations that support them, such as classes, functions, methods and parameters. A ``catch`` block's caught-exception clause does not accept an attribute: PHP was expecting the closing parenthesis of the ``catch (...)`` clause, and found the beginning of an attribute, ``#[``, instead.

Example
_______

.. code-block:: php

   <?php
   
   try {
   } catch (Exception #[SomeAttribute] $e) {
   }
   
   ?>

Solutions
_________

+ Remove the attribute from the ``catch`` clause.
+ Move the attribute to a declaration that supports it, such as the enclosing method.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-")",-expecting-variable`

See Also
________

+ `Attributes <https://www.php.net/manual/en/language.attributes.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
