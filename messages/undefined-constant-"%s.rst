.. _undefined-constant-"%s:

Undefined constant "%s
----------------------
 
.. meta::
	:description:
		Undefined constant "%s: The requested constant doesn&#039;t exist.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined constant &quot;%s
	:og:description: The requested constant doesn&#039;t exist
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%22%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined constant "%s
	:twitter:description: Undefined constant "%s: The requested constant doesn't exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-constant-\"%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-constant-\"%s.html","name":"Undefined constant \"%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 18 Apr 2025 16:40:48 +0000","dateModified":"Fri, 18 Apr 2025 16:40:48 +0000","description":"The requested constant doesn't exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-constant-\"%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The requested constant doesn't exist. 

The constant may be defined at different places in the code : 

+ In the running code: it could be in a different file, which was not included yet, or later in the code.
+ In a dependency: use the name of the constant to find which dependency defines this constant. Then, make sure the dependency is satisfied.
+ In an extension: use the name of the constant to find which PHP extension defines this constant. For example, ``XML_PI_NODE`` is from the ext/xml extension, which may not be in the current PHP engine.

There is a distinct message for class constants.

It is possible to create a circular definition of constant, that leads to this error message. This is the case with a direct recursive definition, where the constant is used to define itself. Since the constant is not defined yet, it cannot be used in the right expression, and that leads to an 'undefined constant' error.

It is also possible to build such recursive structure by using an object, and using that constant in the class of the related object. 

Example
_______

.. code-block:: php

   <?php
   
   // early usage of the constant
   echo A;
   
   const A = 2;
   
   // Recursive constant definition
   const A = A + 1;
   
   // Recursive constant definition (longer version)
   class X {
       const B = C;
   }
   const C = new X;
   
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
