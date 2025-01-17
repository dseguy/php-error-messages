.. _match-expressions-may-only-contain-one-default-arm:

Match expressions may only contain one default arm
--------------------------------------------------
 
	.. meta::
		:description:
			Match expressions may only contain one default arm: match() expression may have one ``default`` entry, but no more than that.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Match expressions may only contain one default arm
		:og:description: match() expression may have one ``default`` entry, but no more than that
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/match-expressions-may-only-contain-one-default-arm.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Match expressions may only contain one default arm
	:twitter:description: Match expressions may only contain one default arm: match() expression may have one ``default`` entry, but no more than that
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
match() expression may have one ``default`` entry, but no more than that. It is the same than for switch()

Example
_______

.. code-block:: php

   <?php
   
   $a = match($b) {
   	default => 1;
   	default => 2;
   }
   
   ?>

Solutions
_________

+ Remove one of the default arm.
+ Remove all the default arms.

Related Error Messages
______________________

+ :ref:`switch-statements-may-only-contain-one-default-clause`
