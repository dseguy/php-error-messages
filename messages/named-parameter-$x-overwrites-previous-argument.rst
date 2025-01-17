.. _named-parameter-\$x-overwrites-previous-argument:

Named parameter $x overwrites previous argument
-----------------------------------------------
 
.. meta::
	:description:
		Named parameter $x overwrites previous argument: Named parameter and positional arguments are setting the same argument, with different name.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Named parameter $x overwrites previous argument
		:og:description: Named parameter and positional arguments are setting the same argument, with different name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/named-parameter-%24x-overwrites-previous-argument.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Named parameter $x overwrites previous argument
		:twitter:description: Named parameter $x overwrites previous argument: Named parameter and positional arguments are setting the same argument, with different name
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Named parameter and positional arguments are setting the same argument, with different name. PHP reports this to avoid overwritting the first with the second. 

In the first example, there are two cases for this error: either a repetition of the same parameter in the argument list, or a mix of positional and named parameters, which leads to the second overwriting the first. 

In the second example, a mix of named and positionned arguments is used, and there is a duplicate for the 

There is a distinct error message when this happens to in attributes calls. 


Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) { print_r($b); }
   
   foo(a: 1, a:1);
   foo(1, a:1);
   
   // 1 is given to $a, by its position 0
   // 2 is given to $a, by its name 'a' : this is a conflict
   $args = [1, a => 2];
   foo(...$args); // error
   
   $args = [a => 1, 2];
   foo(...$args); // Cannot use positional argument after named argument during unpacking
   
   ?>

Solutions
_________

+ Remove duplicate named parameters in the argument list.
+ Add all names to parameters in the argument list.
+ Remove all names to parameters in the argument list.

Related Error Messages
______________________

+ :ref:`duplicate-named-parameter-$%s`
+ :ref:`cannot-use-positional-argument-after-named-argument-during-unpacking`
+ :ref:`cannot-use-positional-argument-after-named-argument`
+ :ref:`cannot-use-positional-argument-after-argument-unpacking`
