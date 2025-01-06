.. _the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'>>'-'<<'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence:

The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence
-------------------------------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence: ``&lt;&lt;``/``&gt;&gt;`` and ``.

		:og:type: article
		:og:title: The behavior of unparenthesized expressions containing both &#039;.&#039; and &#039;&gt;&gt;&#039;/&#039;&lt;&lt;&#039; will change in PHP 8: &#039;&lt;&lt;&#039;/&#039;&gt;&gt;&#039; will take a higher precedence
		:og:description: ``&lt;&lt;``/``&gt;&gt;`` and ``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-behavior-of-unparenthesized-expressions-containing-both-%27.%27-and-%27%3E%3E%27-%27%3C%3C%27-will-change-in-php-8%3A-%27%3C%3C%27-%27%3E%3E%27-will-take-a-higher-precedence.html

Description
___________
 
``<<``/``>>`` and ``.`` operators used to have the same priority. This meant that expressions which mixed them would see them executed from left to right. This was confusing, so PHP 8.0 has made the addition the highest priority, closer to human way of reading the code.

Example
_______

.. code-block:: php

   <?php
   
   $b = 16;
   $a = 'a '. $b << 1;
   
   ?>

Solutions
_________

+ Add parenthesis to make the code less ambiguous.

Related Error Messages
______________________

+ :ref:`the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence`
