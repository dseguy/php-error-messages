.. _type-contains-both-true-and-false,-bool-must-be-used-instead:

Type contains both true and false, bool must be used instead
------------------------------------------------------------
 
.. meta::
	:description:
		Type contains both true and false, bool must be used instead: PHP has several types.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Type contains both true and false, bool must be used instead
		:og:description: PHP has several types
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-contains-both-true-and-false%2C-bool-must-be-used-instead.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Type contains both true and false, bool must be used instead
		:twitter:description: Type contains both true and false, bool must be used instead: PHP has several types
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
PHP has several types. They may combined to provide the same type safety one another: PHP reports those situations, and prevents them. 

Here, the ``bool`` type represents ``true|false``. So, when both ``true`` and ``false`` are used in the type, they should be replaced with ``bool``.

``bool|true`` or ``bool|false`` yield another error; ``bool&true`` is not possible, at all. `

Example
_______

.. code-block:: php

   <?php
   
   function foo() : true|int|false {}
   
   ?>

Solutions
_________

+ Use the bool type instead.
+ Remove the usage of either true or false, or both.

Related Error Messages
______________________

+ :ref:`duplicate-type-%s-is-redundant`
