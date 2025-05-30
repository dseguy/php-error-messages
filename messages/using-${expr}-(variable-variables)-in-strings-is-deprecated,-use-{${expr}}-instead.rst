.. _using-\${expr}-(variable-variables)-in-strings-is-deprecated,-use-{\${expr}}-instead:

Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead: The interpolation syntax ``${expression}`` is deprecated.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead
	:og:description: The interpolation syntax ``${expression}`` is deprecated
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-%24%7Bexpr%7D-%28variable-variables%29-in-strings-is-deprecated%2C-use-%7B%24%7Bexpr%7D%7D-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead
	:twitter:description: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead: The interpolation syntax ``${expression}`` is deprecated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html","name":"Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Mar 2025 08:33:20 +0000","dateModified":"Sat, 15 Mar 2025 08:33:20 +0000","description":"The interpolation syntax ``${expression}`` is deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-${expr}-(variable-variables)-in-strings-is-deprecated,-use-{${expr}}-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The interpolation syntax ``${expression}`` is deprecated. It takes an expression (here, a concatenation) to build the name of the variable that is used in the end. It is recommended to update the syntax with a compatible one or use concatenation, before the syntax is removed.

Example
_______

.. code-block:: php

   <?php
   
   $foo = 'bar';
   $bar = 'xyz';
   var_dump("foo is $\{$foo}");
   
   ?>

Solutions
_________

+ Use ``{}`` instead.
+ Use concatenation instead.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dollar_curly_expression <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dollar_curly_expression.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dollar_curly_expression <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dollar_curly_expression.html>`_.
