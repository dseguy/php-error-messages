.. _non-enum-class-%s-cannot-implement-interface-%s:

Non-enum class %s cannot implement interface %s
-----------------------------------------------
 
.. meta::
	:description:
		Non-enum class %s cannot implement interface %s: UnitEnum is an PHP native and reserved interface.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Non-enum class %s cannot implement interface %s
		:og:description: UnitEnum is an PHP native and reserved interface
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-enum-class-%25s-cannot-implement-interface-%25s.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Non-enum class %s cannot implement interface %s
		:twitter:description: Non-enum class %s cannot implement interface %s: UnitEnum is an PHP native and reserved interface
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
UnitEnum is an PHP native and reserved interface. It is only used with enumerations. It is also handled by PHP itself, which adds it to enumerations: there is no need to add it explictely. This applies to ``BackedEnum`` and ``UnitEnum``, as of PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   class X implements YnitEnum {}
   
   ?>


Literal Examples
****************
+ Non-enum class x cannot implement interface UnitEnum
+ Non-enum class x cannot implement interface BackEnum

Solutions
_________

+ Turn the class into an enumeration.
+ Remove the UnitEnum implementation.

Related Error Messages
______________________

+ :ref:`%s-%s-cannot-implement-previously-implemented-interface-%s`
