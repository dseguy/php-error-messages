.. _'%s'-not-in-the-'loop'-or-'switch'-context:

'%s' not in the 'loop' or 'switch' context
------------------------------------------
 
	.. meta::
		:description:
			'%s' not in the 'loop' or 'switch' context: ``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: &#039;%s&#039; not in the &#039;loop&#039; or &#039;switch&#039; context
		:og:description: ``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27%25s%27-not-in-the-%27loop%27-or-%27switch%27-context.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '%s' not in the 'loop' or 'switch' context
	:twitter:description: '%s' not in the 'loop' or 'switch' context: ``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop. Since PHP 7.0, it is not possible to use them outside such a structure. 

They can't be used in a ``match``.

Example
_______

.. code-block:: php

   <?php
   
   continue;
   
   break;
   
   ?>


Literal Examples
****************
+ 'break' not in the 'loop' or 'switch' context
+ 'continue' not in the 'loop' or 'switch' context

Solutions
_________

+ Remove the ``break``.
+ Remove the ``continue``.
+ Move the ``break`` inside a ``switch`` block.
+ Move the ``continue`` inside a loop  block: ``for``, ``foreach``, ``while``, ``do..while``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"break"`
+ :ref:`syntax-error,-unexpected-token-"continue"`
