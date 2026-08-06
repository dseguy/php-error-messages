.. _%s-and-%s-define-the-same-property-(\$%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed:

%s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
-----------------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed: There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
	:og:description: There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-and-%25s-define-the-same-property-%28%24%25s%29-in-the-composition-of-%25s.-however%2C-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
	:twitter:description: %s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed: There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","name":"%s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 08:59:08 +0000","dateModified":"Thu, 06 Aug 2026 08:59:08 +0000","description":"There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class.

To be considered compatible, the property must have the same visibility, the same type, the same default value, and the same ``readonly``/``static`` modifiers in every trait it comes from.

Unlike methods, property conflicts cannot be settled with an ``insteadof`` or ``as`` rule in the ``use`` block: the only way out is to make the definitions match, or to remove the property from all but one trait.

Example
_______

.. code-block:: php

   <?php
   
   trait A {
       public int $count = 0;
   }
   
   trait B {
       protected int $count = 1;
   }
   
   class C {
       use A, B;
   }
   
   ?>


Literal Examples
****************
+ A and B define the same property ($count) in the composition of C. However, the definition differs and is considered incompatible. Class was composed

Solutions
_________

+ Make the property declaration identical (visibility, type, default value and modifiers) in every trait.
+ Remove the property from all traits but one.
+ Declare the property directly on the class instead, and remove it from the traits.

Related Error Messages
______________________

+ :ref:`%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
