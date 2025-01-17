.. _only-hooked-properties-may-be-declared-abstract:

Only hooked properties may be declared abstract
-----------------------------------------------
 
.. meta::
	:description:
		Only hooked properties may be declared abstract: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Only hooked properties may be declared abstract
		:og:description: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-hooked-properties-may-be-declared-abstract.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Only hooked properties may be declared abstract
		:twitter:description: Only hooked properties may be declared abstract: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block.

In previous version, PHP would never allow properties to be abstract.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
       public abstract string $x;
   }
   
   ?>

Solutions
_________

+ Add an identity hook to the class, such as ``get => $this->x`` or ``set => $this->x = $value;``.
+ Remove the abstract keyword.


In previous PHP versions, this error message used to be :ref:`cannot-use-the-abstract-modifier-on-a-property`.
