.. _cannot-use-positional-argument-after-named-argument:

Cannot use positional argument after named argument
---------------------------------------------------
 
.. meta::
	:description:
		Cannot use positional argument after named argument: When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use positional argument after named argument
	:og:description: When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-named-argument.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use positional argument after named argument
	:twitter:description: Cannot use positional argument after named argument: When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument.html","name":"Cannot use positional argument after named argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Jan 2025 17:23:34 +0000","dateModified":"Wed, 22 Jan 2025 17:23:34 +0000","description":"When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument. Said another way, the unpacked arguments must be the last one in the list. 

Example
_______

.. code-block:: php

   <?php
   
   // Valid, the unpacked argument is the last
   foo($a, $b, ...$c);
   
   // Also valid, the unpacked arguments are the last
   foo($a, $b, ...$c, ...$d);
   
   // Not valid
   foo(...$a, $b, ...$c);
   
   ?>

Solutions
_________

+ Write the positional argument before the named ones in the call.

Related Error Messages
______________________

+ :ref:`cannot-use-empty-list`
+ :ref:`named-parameter-$%s-overwrites-previous-argument`
