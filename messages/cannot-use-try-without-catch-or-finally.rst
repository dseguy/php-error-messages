.. _cannot-use-try-without-catch-or-finally:

Cannot use try without catch or finally
---------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use try without catch or finally: Try command have catch and finally clauses.

Description
___________
 
Try command have catch and finally clauses. While both are optional, they can't be omitted both at the same time.

Example
_______

.. code-block:: php

   <?php
   
   try {}
   
   ?>

Solutions
_________

+ Add a catch clause.
+ Add a finally clause.
