.. _unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported.:

Unparenthesized `a ? b : c ? d : e` is not supported.
-----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Unparenthesized `a ? b : c ? d : e` is not supported.: The nested ternary operator requires a clear definition of priorities, by using parenthesis.

Description
___________
 
The nested ternary operator requires a clear definition of priorities, by using parenthesis. 

The code above could be understood as `($a ? $b : $c) ? $d : $e` or `$a ? $b : ($c ? $d : $e)`. Until PHP 8.0, the engine choose the second option; Since then, it must be explicitly written.

Note that, in the error message, the letters represent a full expression. They may be variables, as in the illustration, but any other expression.

Example
_______

.. code-block:: php

   <?php
   
   $x = $a ? $b : $c ? $d : $e;
   
   ?>

Solutions
_________

+ Write the expression as `($a ? $b : $c) ? $d : $e`.
+ Write the expression as `$a ? $b : ($c ? $d : $e)`.
+ Rewrite the expression as an if/then.
