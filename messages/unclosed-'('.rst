.. _unclosed-'(':

Unclosed '('
------------
 
.. meta::
	:description:
		Unclosed '(': The closing parenthesis is missing.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unclosed &#039;(&#039;
	:og:description: The closing parenthesis is missing
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%28%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unclosed '('
	:twitter:description: Unclosed '(': The closing parenthesis is missing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('.html","name":"Unclosed '('","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 10:41:54 +0000","dateModified":"Tue, 21 Jan 2025 10:41:54 +0000","description":"The closing parenthesis is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unclosed-'('.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The closing parenthesis is missing. 

It might be missing, as in the first two examples; it might also be inside a string, as in the third example: the double quote is not closed, which includes the closing square bracket, and makes it missing.

Example
_______

.. code-block:: php

   <?php
   
   // These should be at the end of a code, without ; not ?>
   foo($b, 3
   $a = 10 * (2 + 3
   
   // closing parenthesis is in the double quoted string
   $b = 'c' . ( "d . $e)
   

Solutions
_________

+ Check that the square brackets are balanced.
+ Check that the closing square brackets are not hidden in a string.

Related Error Messages
______________________

+ :ref:`unclosed-'{'`
+ :ref:`unclosed-'['`
+ :ref:`unmatched-')'`
+ :ref:`unmatched-']'`
