.. _%s-%s-inherits-both-%s::%s-and-%s::%s:

%s %s inherits both %s::%s and %s::%s
-------------------------------------
 
	.. meta::
		:description lang=en:
			%s %s inherits both %s::%s and %s::%s: PHP reports duplicate constant definitions in different interfaces.

Description
___________
 
PHP reports duplicate constant definitions in different interfaces.

This is very unusual occurrence, reported at linting time. It may also lead to quite a set back when one has to untangle these definitions.

So, shall we always give unique names across interfaces? Or just avoid multiple interfaces with constants on the same class?

There is no 'use' expression to solve the conflict. The same applies to traits, though they can resolve conflicts with the use expression.

Also, multiple same methods in different interface are OK.


Example
_______

.. code-block:: php

   <?php
   
   interface test1 {
       const FOO = 10;
   }
   
   interface test2 {
       const FOO = 10;
   }
   
   class test implements test1, test2 {
   }
   
   echo Done\n;
   ?>

Solutions
_________

+ Remove one of the constant definition.
+ Rename one of the interface constant.
+ Define the conflicted constant in the class.
+ Remove one of the interfaces.
