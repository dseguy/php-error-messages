.. _unmatched-']':

Unmatched ']'
-------------
 
.. meta::
	:description:
		Unmatched ']': PHP has encountered a closing parenthesis, but has no related opening parenthesis.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unmatched &#039;]&#039;
	:og:description: PHP has encountered a closing parenthesis, but has no related opening parenthesis
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unmatched-%27%5D%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unmatched ']'
	:twitter:description: Unmatched ']': PHP has encountered a closing parenthesis, but has no related opening parenthesis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
PHP has encountered a closing parenthesis, but has no related opening parenthesis.

In more complex situations, there might be opening and closing parenthesis: this error reports that there are more closing ones than opening. Eventually, some will not have a matching bracket.

Inside double-quoted strings, the unmatched closing brackets are ignored, and used as literal value. 


Example
_______

.. code-block:: php

   <?php
   
   $a[1 + 2 = 3;
   
   // One too many parenthesis
   if (in_array(foo(), array()))) { doSomething(); }
   
   ?>

Solutions
_________

+ Remove the closing curly bracket.
+ Add an opening closing curly bracket.

Related Error Messages
______________________

+ :ref:`unclosed-'('`
+ :ref:`unmatched-'}'`
+ :ref:`unmatched-')'`
+ :ref:`syntax-error,-unexpected-string-content`
