.. _cannot-unset-\$this:

Cannot unset $this
------------------
 
	.. meta::
		:description lang=en:
			Cannot unset $this: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside.

Description
___________
 
It is never possible to unset the pseudo-variable ``$this``, inside a class or outside. Actually, it is also never allowed to write to it. In short, it is possible to read ``$this``, and nothing more.

Example
_______

.. code-block:: php

   <?php
   
   unset($this);
   
   ?>

Solutions
_________

+ Remove this call to unset.

Related Error Messages
______________________

+ :ref:`cannot-re-assign-$this`
