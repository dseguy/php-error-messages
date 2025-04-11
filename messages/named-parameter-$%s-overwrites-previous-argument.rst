.. _named-parameter-\$%s-overwrites-previous-argument:

Named parameter $%s overwrites previous argument
------------------------------------------------
 
.. meta::
	:description:
		Named parameter $%s overwrites previous argument: Named parameter and positional arguments are setting the same argument, with different name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Named parameter $%s overwrites previous argument
	:og:description: Named parameter and positional arguments are setting the same argument, with different name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/named-parameter-%24%25s-overwrites-previous-argument.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named parameter $%s overwrites previous argument
	:twitter:description: Named parameter $%s overwrites previous argument: Named parameter and positional arguments are setting the same argument, with different name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/named-parameter-$%s-overwrites-previous-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/named-parameter-$%s-overwrites-previous-argument.html","name":"Named parameter $%s overwrites previous argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 16:34:35 +0000","dateModified":"Fri, 11 Apr 2025 16:34:35 +0000","description":"Named parameter and positional arguments are setting the same argument, with different name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/named-parameter-$%s-overwrites-previous-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Named parameter and positional arguments are setting the same argument, with different name. PHP reports this to avoid overwritting the first with the second. 

In the first example, there are two cases for this error: either a repetition of the same parameter in the argument list, or a mix of positional and named parameters, which leads to the second overwriting the first. 

In the second example, a mix of named and positionned arguments is used, and there is a duplicate for the 

There is a distinct error message when this happens to in attributes calls.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) { print_r($b); }
   
   foo(a: 1, a:1);
   foo(1, a:1);
   
   // 1 is given to $a, by its position 0
   // 2 is given to $a, by its name 'a'. This is a conflict
   $args = [1, a => 2];
   foo(...$args); // error
   
   $args = [a => 1, 2];
   foo(...$args); // Cannot use positional argument after named argument during unpacking
   
   $args = [b => 1];
   foo(...$args, b: 2); // b is overwritten
   
   ?>


Literal Examples
****************
+ Named parameter $a overwrites previous argument

Solutions
_________

+ Remove duplicate named parameters in the argument list.
+ Add all names to parameters in the argument list.
+ Remove all names to parameters in the argument list.

Related Error Messages
______________________

+ :ref:`duplicate-named-parameter-$%s`
+ :ref:`cannot-use-positional-argument-after-named-argument-during-unpacking`
+ :ref:`cannot-use-positional-argument-after-named-argument`
+ :ref:`cannot-use-positional-argument-after-argument-unpacking`
