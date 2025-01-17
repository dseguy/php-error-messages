.. _property-%s::\$%s-does-not-exist:

Property %s::$%s does not exist
-------------------------------
 
.. meta::
	:description:
		Property %s::$%s does not exist: This error happens when the Reflection API fails at getting the description of a non-existent property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property %s::$%s does not exist
	:og:description: This error happens when the Reflection API fails at getting the description of a non-existent property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-%25s%3A%3A%24%25s-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property %s::$%s does not exist
	:twitter:description: Property %s::$%s does not exist: This error happens when the Reflection API fails at getting the description of a non-existent property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error happens when the Reflection API fails at getting the description of a non-existent property. The name of the property should be checked before using the ``getProperty`` method.

Example
_______

.. code-block:: php

   <?php
       $class = new ReflectionClass('ReflectionClass');
       $property = $class->getProperty('unkown');
       var_dump($property);
   ?>


Literal Examples
****************
+ Property ReflectionClass::$unknown does not exist

Solutions
_________

+ Check that the property exists before using ``getProperty``.

Related Error Messages
______________________

+ :ref:`undefined-property-%s::$%s`


In previous PHP versions, this error message used to be :ref:`property-%s-does-not-exist`.
