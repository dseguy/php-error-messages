.. _octal-escape-sequence-overflow-%s-is-greater-than--377:

Octal escape sequence overflow \%s is greater than \377
-------------------------------------------------------
 
.. meta::
	:description:
		Octal escape sequence overflow \%s is greater than \377: Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Octal escape sequence overflow \%s is greater than \377
	:og:description: Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/octal-escape-sequence-overflow-%25s-is-greater-than--377.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Octal escape sequence overflow \%s is greater than \377
	:twitter:description: Octal escape sequence overflow \%s is greater than \377: Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/octal-escape-sequence-overflow-%s-is-greater-than--377.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/octal-escape-sequence-overflow-%s-is-greater-than--377.html","name":"Octal escape sequence overflow \\%s is greater than \\377","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/octal-escape-sequence-overflow-%s-is-greater-than--377.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Octal escape is a notation for double quoted strings, where a backslash followed by 3 digits is replaced by the character with this ASCII number. These ASCII numbers have a limit of 0o377. 

Between ``0o377`` and ``0o777``, numbers are valid octals, and not ASCII numbers, so the error message appears. 

Beyond ``0o777``, the sequence is not a valid octal anymore, and PHP does not process it, nor emit an error message.

Example
_______

.. code-block:: php

   <?php
   
   $a = "\500";
   
   ?>

Solutions
_________

+ Check the value in the octal sequence to be valid.
+ Add backslashes, to make the characters literals.
