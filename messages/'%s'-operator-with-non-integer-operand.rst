.. _'%s'-operator-with-non-integer-operand:

'%s' operator with non-integer operand
--------------------------------------
 
.. meta::
	:description:
		'%s' operator with non-integer operand: The ``break`` and ``continue`` operators only accept a positive non-null literal integer.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &#039;%s&#039; operator with non-integer operand
	:og:description: The ``break`` and ``continue`` operators only accept a positive non-null literal integer
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27%25s%27-operator-with-non-integer-operand.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '%s' operator with non-integer operand
	:twitter:description: '%s' operator with non-integer operand: The ``break`` and ``continue`` operators only accept a positive non-null literal integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'%s'-operator-with-non-integer-operand.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'%s'-operator-with-non-integer-operand.html","name":"'%s' operator with non-integer operand","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``break`` and ``continue`` operators only accept a positive non-null literal integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/'%s'-operator-with-non-integer-operand.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``break`` and ``continue`` operators only accept a positive non-null literal integer. 

Beyond the obvious improper code that is ``break 1.2``, even storing the number of break levels in a constant or a variable is not a valid syntax. It can only accept an integer.

Example
_______

.. code-block:: php

   <?php
   
   break 1.2;
   
   const A = 1;
   break A;
   
   ?>


Literal Examples
****************
+ 'break' operator with non-integer operand
+ 'continue' operator with non-integer operand

Solutions
_________

+ Round the number to the closest integer.
+ Remove the call to break altogether.
+ Move the loop in a separate method, and use return to break out of the loop.
+ Use a goto to jump out of the loop.

Related Error Messages
______________________

+ :ref:`'%s'-operator-accepts-only-positive-integers`
