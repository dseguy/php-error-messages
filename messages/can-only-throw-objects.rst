.. _can-only-throw-objects:

Can only throw objects
----------------------
 
.. meta::
	:description:
		Can only throw objects: The ``throw`` keyword operates on exceptions, which are exclusively objects.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can only throw objects
	:og:description: The ``throw`` keyword operates on exceptions, which are exclusively objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can-only-throw-objects.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can only throw objects
	:twitter:description: Can only throw objects: The ``throw`` keyword operates on exceptions, which are exclusively objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The ``throw`` keyword operates on exceptions, which are exclusively objects.

Example
_______

.. code-block:: php

   <?php
   
   throw 1;
   
   ?>

Solutions
_________

+ Use ``throw new Exception()``.
+ Use ``throw new Error()``.
+ Use ``throw $object``, where $object contains an error or an exception.
+ Use ``throw ($object)``, where $object contains an error or an exception.

Related Error Messages
______________________

+ :ref:`__clone-method-called-on-non-object`
