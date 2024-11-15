.. _cannot-use-empty-list:

Cannot use empty list
---------------------
 
	.. meta::
		:description:
			Cannot use empty list: list() must contain at least one non-empty element.

		:og:type: article
		:og:title: Cannot use empty list
		:og:description: list() must contain at least one non-empty element
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-empty-list.html

Description
___________
 
list() must contain at least one non-empty element. Otherwise, it would attempt to load data into no variables, and that makes no sense.

Example
_______

.. code-block:: php

   <?php
   
   [,,,] = [1,2,3];
   list(,,,) = [1,2,3];
   
   ?>

Solutions
_________

+ Add at least one variable in the list() call.
+ Remove the call to list().

Related Error Messages
______________________

+ :ref:`cannot-use-positional-argument-after-named-argument`
