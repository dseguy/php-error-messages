.. _cannot-re-assign-\$this:

Cannot re-assign $this
----------------------
 
	.. meta::
		:description:
			Cannot re-assign $this: It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside.

		:og:type: article
		:og:title: Cannot re-assign $this
		:og:description: It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-re-assign-%24this.html

Description
___________
 
It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside. In fact, it is also never allowed to unset it either. In short, it is possible to read ``$this``, and nothing more.

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

+ :ref:`cannot-unset-$this`
