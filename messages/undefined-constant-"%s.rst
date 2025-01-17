.. _undefined-constant-"%s:

Undefined constant "%s
----------------------
 
.. meta::
	:description:
		Undefined constant "%s: The requested constant doesn&#039;t exist.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined constant &quot;%s
	:og:description: The requested constant doesn&#039;t exist
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%5C%22%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined constant "%s
	:twitter:description: Undefined constant "%s: The requested constant doesn't exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The requested constant doesn't exist. 

The constant may be defined at different places in the code : 

+ In the running code: it could be in a different file, which was not included yet, or later in the code.
+ In a dependency: use the name of the constant to find which dependency defines this constant. Then, make sure the dependency is satisfied.
+ In an extension: use the name of the constant to find which PHP extension defines this constant. For example, ``XML_PI_NODE`` is from the ext/xml extension, which may not be in the current PHP engine.

There is a distinct message for class constants.

Example
_______

.. code-block:: php

   <?php
   
   // early usage of the constant
   echo A;
   
   const A = 2;
   
   ?>


Literal Examples
****************
+ Undefined constant "A"
+ Undefined constant "XML_PI_NODE"

Solutions
_________

+ Find the actual name of the requested constant.
+ Check the namespace, or its import: ``use const``.
+ Check if the constant is used after its definition.
+ Check if the constant is defined in a PHP extension, and the extension was forgotten.
+ Check if the constant is defined in a dependency, and the dependency was forgotten.

Related Error Messages
______________________

+ :ref:`undefined-constant-%s::%s`
+ :ref:`cannot-declare-self-referencing-constant`
