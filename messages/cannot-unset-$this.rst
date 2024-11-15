.. _cannot-unset-\$this:

Cannot unset $this
------------------
 
	.. meta::
		:description:
			Cannot unset $this: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside.

		:og:type: article
		:og:title: Cannot unset $this
		:og:description: It is never possible to unset the pseudo-variable ``$this``, inside a class or outside
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-%24this.html

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
