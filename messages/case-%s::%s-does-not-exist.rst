.. _case-%s::%s-does-not-exist:

Case %s::%s does not exist
--------------------------
 
	.. meta::
		:description lang=en:
			Case %s::%s does not exist: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.

Description
___________
 
This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.

Example
_______

.. code-block:: php

   

Solutions
_________

+ Make sure the case exists before trying to instantiate its relate object.
