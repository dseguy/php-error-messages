.. _switch-statements-may-only-contain-one-default-clause:

Switch statements may only contain one default clause
-----------------------------------------------------
 
	.. meta::
		:description:
			Switch statements may only contain one default clause: The switch expression uses cases and a default entry.

		:og:type: article
		:og:title: Switch statements may only contain one default clause
		:og:description: The switch expression uses cases and a default entry
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/switch-statements-may-only-contain-one-default-clause.html

Description
___________
 
The switch expression uses cases and a default entry. Cases are matched against the parameter variable, and when all of them fail, the default case (sic) is used. This also means that there can be only one defaut entry, as it will be used after all the cases. 

When several default cases are spotted, PHP stops compilation.

Note that there is no error message for multiple identical cases: in such situations, the first one is used.


Example
_______

.. code-block:: php

   <?php
   
   switch($a) {
       default:
       default: 
   }
   
   ?>

Solutions
_________

+ Remove all defaults but one.

Related Error Messages
______________________

+ :ref:`match-expressions-may-only-contain-one-default-arm`
