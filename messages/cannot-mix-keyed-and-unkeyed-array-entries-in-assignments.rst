.. _cannot-mix-keyed-and-unkeyed-array-entries-in-assignments:

Cannot mix keyed and unkeyed array entries in assignments
---------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot mix keyed and unkeyed array entries in assignments: list() is a construct that maps an array to a set of variables.

Description
___________
 
list() is a construct that maps an array to a set of variables. The assignation is done by position, or by key. By position, this means the first value of the array goes to the first variable of the list() : in that case, list() doesn't specify keys with the => operator. On the other hand, the key are matched by their value, and not their position. The error here happens when list() syntax is created with a mixed set of position and key assignations.

Example
_______

.. code-block:: php

   <?php
   
   $array = [];
   
   list(
       '' => $foo,
       $bar
   ) = $array;
   ?>


Literal Examples
****************
+ Cannot mix keyed and unkeyed array entries in assignments

Solutions
_________

+ Remove all the => operators in the list() call.
+ Add all the => operators in the list() call.
+ Make the assignations in a different way.
