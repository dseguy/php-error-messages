.. _syntax-error,-unexpected-token-")",-expecting-variable:

syntax error, unexpected token ")", expecting variable
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ")", expecting variable: An attribute placed inside a parameter list must be immediately followed by the parameter it decorates.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;)&quot;, expecting variable
	:og:description: An attribute placed inside a parameter list must be immediately followed by the parameter it decorates
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%29%22%2C-expecting-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ")", expecting variable
	:twitter:description: syntax error, unexpected token ")", expecting variable: An attribute placed inside a parameter list must be immediately followed by the parameter it decorates
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-variable.html","name":"syntax error, unexpected token \")\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 18:57:15 +0000","dateModified":"Wed, 15 Jul 2026 18:57:15 +0000","description":"An attribute placed inside a parameter list must be immediately followed by the parameter it decorates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\")\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An attribute placed inside a parameter list must be immediately followed by the parameter it decorates. Here, the attribute is the last thing before the closing parenthesis, so PHP expects a variable to declare the parameter, but finds the closing parenthesis instead.

Example
_______

.. code-block:: php

   <?php
   
   function foo(string $a, #[SomeAttribute]) {}
   
   ?>

Solutions
_________

+ Add the missing parameter, with its ``$`` variable, right after the attribute.
+ Remove the trailing attribute if no extra parameter was intended.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"#[",-expecting-")"`
+ :ref:`syntax-error,-unexpected-token-"{",-expecting-variable`
+ :ref:`syntax-error,-unexpected-variable-"$%s",-expecting-")"`
+ :ref:`syntax-error,-unexpected-variable-"$task",-expecting-")"`

See Also
________

+ `Attributes <https://www.php.net/manual/en/language.attributes.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
