.. _invalid-utf-8-codepoint-escape:

Invalid UTF-8 codepoint escape
------------------------------
 
.. meta::
	:description:
		Invalid UTF-8 codepoint escape: PHP supports unicode as escape sequence.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Invalid UTF-8 codepoint escape
	:og:description: PHP supports unicode as escape sequence
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-utf-8-codepoint-escape.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invalid UTF-8 codepoint escape
	:twitter:description: Invalid UTF-8 codepoint escape: PHP supports unicode as escape sequence
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape.html","name":"Invalid UTF-8 codepoint escape","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"PHP supports unicode as escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP supports unicode as escape sequence. They are used in double-quoted strings, and use the ``\u{73}`` format. The digits must represent a valid unicode codepoint: here, 73 represents the ASCII letter ``s``.

When the prefix ``\u{`` is detected, PHP tries to understand the next characters as an integer. When this is not the case, it fails the codepoint detection and stops.

Example
_______

.. code-block:: php

   <?php
     $a = "\u{fgh}";
   ?>

Solutions
_________

+ Check the values inside the curly braces: chances are it needs to be replaced with smaller values.
+ If there is no intent to use unicode codepoint, add ``\`` to make PHP handle it as a literal value.

Related Error Messages
______________________

+ :ref:`invalid-utf-8-codepoint-escape:-codepoint-too-large`

See Also
________

+ `Doublequoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_
