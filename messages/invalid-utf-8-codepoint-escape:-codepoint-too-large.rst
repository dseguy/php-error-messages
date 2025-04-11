.. _invalid-utf-8-codepoint-escape:-codepoint-too-large:

Invalid UTF-8 codepoint escape: Codepoint too large
---------------------------------------------------
 
.. meta::
	:description:
		Invalid UTF-8 codepoint escape: Codepoint too large: PHP supports unicode as escape sequence.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Invalid UTF-8 codepoint escape: Codepoint too large
	:og:description: PHP supports unicode as escape sequence
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-utf-8-codepoint-escape%3A-codepoint-too-large.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invalid UTF-8 codepoint escape: Codepoint too large
	:twitter:description: Invalid UTF-8 codepoint escape: Codepoint too large: PHP supports unicode as escape sequence
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html","name":"Invalid UTF-8 codepoint escape: Codepoint too large","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP supports unicode as escape sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invalid-utf-8-codepoint-escape:-codepoint-too-large.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP supports unicode as escape sequence. They are used in double-quoted strings, and use the ``\u{73}`` format. The digits must represent a valid unicode codepoint: here, 73 represents the ASCII letter ``s``.

When a valid escape sequence is detected, PHP use the integer between the curly braces. Unicode comprises 1,114,112 code points in the range 0 to 10FFFF. Beyond that value, codepoint are undefined, and do not represent anything anymore.

Example
_______

.. code-block:: php

   <?php
     $a = "\u{ffffff}";
   ?>

Solutions
_________

+ Check the values inside the curly braces: chances are it needs to be replaced with smaller values.

Related Error Messages
______________________

+ :ref:`invalid-utf-8-codepoint-escape`

See Also
________

+ `Doublequoted <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`_
