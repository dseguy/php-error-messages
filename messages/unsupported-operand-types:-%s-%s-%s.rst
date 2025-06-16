.. _unsupported-operand-types:-%s-%s-%s:

Unsupported operand types: %s %s %s
-----------------------------------
 
.. meta::
	:description:
		Unsupported operand types: %s %s %s: This error is reported when the types of the operands are valids (here, ``int`` and ``string``), but they are not compatible one another.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unsupported operand types: %s %s %s
	:og:description: This error is reported when the types of the operands are valids (here, ``int`` and ``string``), but they are not compatible one another
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unsupported-operand-types%3A-%25s-%25s-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unsupported operand types: %s %s %s
	:twitter:description: Unsupported operand types: %s %s %s: This error is reported when the types of the operands are valids (here, ``int`` and ``string``), but they are not compatible one another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types:-%s-%s-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types:-%s-%s-%s.html","name":"Unsupported operand types: %s %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Jun 2025 16:23:55 +0000","dateModified":"Mon, 16 Jun 2025 16:23:55 +0000","description":"This error is reported when the types of the operands are valids (here, ``int`` and ``string``), but they are not compatible one another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types:-%s-%s-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when the types of the operands are valids (here, ``int`` and ``string``), but they are not compatible one another. It is possible to use the ``&`` operator with two integers, or with two strings but not with one string and one integer.

Example
_______

.. code-block:: php

   <?php
   
   1 & 'B'; 
   
   ?>


Literal Examples
****************
+ Unsupported operand types: int & string

Solutions
_________

+ Make both sides of the operator the same type.
