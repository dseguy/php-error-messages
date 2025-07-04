.. _unclosed-'('-on-line-%s-does-not-match-']':

Unclosed \'(\' on line %s does not match \']\'
----------------------------------------------
 
.. meta::
	:description:
		Unclosed \'(\' on line %s does not match \']\': PHP keeps track of parentheses and square brackets.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unclosed \&#039;(\&#039; on line %s does not match \&#039;]\&#039;
	:og:description: PHP keeps track of parentheses and square brackets
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%28%27-on-line-%25s-does-not-match-%27%5D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unclosed \'(\' on line %s does not match \']\'
	:twitter:description: Unclosed \'(\' on line %s does not match \']\': PHP keeps track of parentheses and square brackets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('-on-line-%s-does-not-match-']'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unclosed-'('-on-line-%s-does-not-match-']'.html","name":"Unclosed \\'(\\' on line %s does not match \\']\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 22 Jun 2025 19:21:19 +0000","dateModified":"Sun, 22 Jun 2025 19:21:19 +0000","description":"PHP keeps track of parentheses and square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unclosed-'('-on-line-%s-does-not-match-']'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP keeps track of parentheses and square brackets. Any of them that is opened, must be closed by the corresponding one. In the current situation, an open parentheses is followed by a closing square bracket, which does not match.

Example
_______

.. code-block:: php

   <?php
   
   $array = [foo(1, 2];
   
   ?>


Literal Examples
****************
+ Unclosed '(' on line 17 does not match ']'

Solutions
_________

+ Close the parenthese before the closing square bracket.
+ Open a square bracket after the opening parenthese.
