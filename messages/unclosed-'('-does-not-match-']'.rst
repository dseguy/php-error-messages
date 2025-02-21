.. _unclosed-'('-does-not-match-']':

Unclosed \'(\' does not match \']\'
-----------------------------------
 
.. meta::
	:description:
		Unclosed \'(\' does not match \']\': This is a variation of the unbalanced parenthesis or square brackets.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unclosed \&#039;(\&#039; does not match \&#039;]\&#039;
	:og:description: This is a variation of the unbalanced parenthesis or square brackets
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%28%27-does-not-match-%27%5D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unclosed \'(\' does not match \']\'
	:twitter:description: Unclosed \'(\' does not match \']\': This is a variation of the unbalanced parenthesis or square brackets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('-does-not-match-']'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('-does-not-match-']'.html","name":"Unclosed \\'(\\' does not match \\']\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This is a variation of the unbalanced parenthesis or square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unclosed-'('-does-not-match-']'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is a variation of the unbalanced parenthesis or square brackets. Here, the parenthesis were not closed before the nesting square brackets was closed.

Example
_______

.. code-block:: php

   <?php
   
   $array[foo(1,2]; 
   
   ?>

Solutions
_________

+ Close the parenthesis before closing the square bracket.

Related Error Messages
______________________

+ :ref:`unmatched-']'`
+ :ref:`unmatched-'}'`
+ :ref:`unmatched-')'`
