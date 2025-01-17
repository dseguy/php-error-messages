.. _unhandled-match-case-%s:

Unhandled match case %s
-----------------------
 
	.. meta::
		:description:
			Unhandled match case %s: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn&#039;t have a default entry.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Unhandled match case %s
		:og:description: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn&#039;t have a default entry
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unhandled-match-case-%25s.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unhandled match case %s
	:twitter:description: Unhandled match case %s: The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
The error is emitted when the ``matching`` value is not found in the list of entry of the expression (here true is not in the list of 1 and 2), and also when the expression doesn't have a default entry. That default entry would act as a catch-all entry, and would process unknown values.

Example
_______

.. code-block:: php

   <?php
   
   match(3) {
       1, 2 => 'foo',
   };
   
   ?>


Literal Examples
****************
+ Unhandled match case 3

Solutions
_________

+ Add the missing entry in the list.
+ Add the missing default in the match.
+ Weed out the value before submitting it to the match().
