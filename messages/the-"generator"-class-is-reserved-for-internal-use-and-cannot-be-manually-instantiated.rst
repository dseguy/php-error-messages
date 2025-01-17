.. _the-"generator"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated:

The "Generator" class is reserved for internal use and cannot be manually instantiated
--------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The "Generator" class is reserved for internal use and cannot be manually instantiated: Generator is a PHP native class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The &quot;Generator&quot; class is reserved for internal use and cannot be manually instantiated
	:og:description: Generator is a PHP native class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%5C%22generator%5C%22-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The "Generator" class is reserved for internal use and cannot be manually instantiated
	:twitter:description: The "Generator" class is reserved for internal use and cannot be manually instantiated: Generator is a PHP native class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Generator is a PHP native class. It is automagically created when a function or method uses the ``yield`` or ``yield from`` keyword. There is no other ways to create such an object.

In fact, ``generator`` is also a final class, so it cannot be extended too.

Example
_______

.. code-block:: php

   <?php
   
   new Generator();
   
   ?>

Solutions
_________

+ Use composition to use this class in another class.

Related Error Messages
______________________

+ :ref:`class-%s-cannot-extend-final-class-%s`
