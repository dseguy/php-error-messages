.. _unclosed-'{':

Unclosed '{'
------------
 
	.. meta::
		:description:
			Unclosed '{': The most frequent situation is an unbalanced block: blocks are delimited with curly brackets, and there must be the same number of opening and closing.

		:og:type: article
		:og:title: Unclosed &#039;{&#039;
		:og:description: The most frequent situation is an unbalanced block: blocks are delimited with curly brackets, and there must be the same number of opening and closing
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%7B%27.html

Description
___________
 
The most frequent situation is an unbalanced block: blocks are delimited with curly brackets, and there must be the same number of opening and closing. In this case, one (at least) too many opening is missing its closing bracket.

Alternatively, both brackets are apparently available, but one of them is in a string: see the last entry, where a double-quoted string was started, but never finished. The whole code, after the double-quote, is now in a string, and PHP discarded the closing bracket as a literal, not a token.

This error may related to the PHP short tags. In the heart of the ``B`` method, the PHP tag is closed, then opened again. That second opening is using the PHP short tags. When this directive is disabled, it makes the rest of the text after the closing tag literal, and it is not parsed anymore into PHP code. Since the closing brackets are there, PHP reports they are missing.

Example
_______

.. code-block:: php

   <?php
   
   { $a = 1+2; 
   
   class A
   {
   	public function B()
   	{
   		?>C<?
   	}
   
   }
   
   // bracket is buried in the string
   { $b = "1+2; }
   

Solutions
_________

+ Make the short open tag a full ``<?php``.
+ Activate the short open tag directive ``<?php``.
+ Check that double quotes are all balanced.
+ Check that curly brackets are all balanced.

Related Error Messages
______________________

+ :ref:`unmatched-'}'`
