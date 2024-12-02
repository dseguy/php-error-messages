.. _%s-%s-cannot-implement-previously-implemented-interface-%s:

%s %s cannot implement previously implemented interface %s
----------------------------------------------------------
 
	.. meta::
		:description:
			%s %s cannot implement previously implemented interface %s: This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again.

		:og:type: article
		:og:title: %s %s cannot implement previously implemented interface %s
		:og:description: This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-cannot-implement-previously-implemented-interface-%25s.html

Description
___________
 
This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again. 

For enumerations, it applies to ``BackEnum`` and ``UnitEnum``, as enumerations don't have parents.

For interfaces and classes, it applies to repetitions of interfaces in the implements list. 

It doesn't apply to duplicate implements between a parent and a child class or interface.

It doesn't apply to trait, that have no relationship with interfaces.


Example
_______

.. code-block:: php

   <?php
   
   enum x implements unitenum {}
   
   interface j extends i, i {}
   
   class x implements i {}
   
   // This is OK
   // It is also duplicate and useless, but valid.
   class y extends x implements i {}
   
   ?>


Literal Examples
****************
+ Enum x cannot implement previously implemented interface UnitEnum

Solutions
_________

+ Remove duplicate interfaces from the ``implements`` keyword on classes.
+ Remove duplicate interfaces from the ``extends`` keyword on interfaces.
+ Remove ``BackEnum`` and ``UnitEnum`` from the ``implements`` keyword on an enumeration.

Related Error Messages
______________________

+ :ref:`non-enum-class-%s-cannot-implement-interface-%s`
