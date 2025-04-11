.. _the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence:

The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
---------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence: ``+``/``-`` and ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The behavior of unparenthesized expressions containing both &#039;.&#039; and &#039;+&#039;/&#039;-&#039; will change in PHP 8: &#039;+&#039;/&#039;-&#039; will take a higher precedence
	:og:description: ``+``/``-`` and ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-behavior-of-unparenthesized-expressions-containing-both-%27.%27-and-%27%2B%27-%27-%27-will-change-in-php-8%3A-%27%2B%27-%27-%27-will-take-a-higher-precedence.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
	:twitter:description: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence: ``+``/``-`` and ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence.html","name":"The behavior of unparenthesized expressions containing both '.' and '+'\/'-' will change in PHP 8: '+'\/'-' will take a higher precedence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 11:01:17 +0000","dateModified":"Mon, 24 Mar 2025 11:01:17 +0000","description":"``+``\/``-`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``+``/``-`` and ``.`` operators used to have the same priority. This meant that expressions which mixed them would see them executed from left to right. This was confusing, so PHP 8.0 has made the addition the highest priority, closer to human way of reading the code.

Example
_______

.. code-block:: php

   <?php
   
   $b = 2;
   $a = 'a '. $b + 1;
   
   ?>

Solutions
_________

+ Add parenthesis to make the code less ambiguous.

Related Error Messages
______________________

+ :ref:`the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'>>'-'<<'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dotAndMinus <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndMinus.html>`_, `dotAndPlus <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndPlus.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dotAndMinus <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndMinus.html>`_, `dotAndPlus <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndPlus.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/ConcatAndAddition <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ConcatAndAddition.html>`_.
