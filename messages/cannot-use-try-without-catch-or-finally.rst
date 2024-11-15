.. _cannot-use-try-without-catch-or-finally:

Cannot use try without catch or finally
---------------------------------------
 
	.. meta::
		:description:
			Cannot use try without catch or finally: Try command have catch and finally clauses.

		:og:type: article
		:og:title: Cannot use try without catch or finally
		:og:description: Try command have catch and finally clauses
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-try-without-catch-or-finally.html

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
