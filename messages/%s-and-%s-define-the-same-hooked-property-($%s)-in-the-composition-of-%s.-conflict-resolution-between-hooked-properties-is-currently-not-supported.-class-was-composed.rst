.. _%s-and-%s-define-the-same-hooked-property-(\$%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed:

%s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed: When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed
	:og:description: When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-and-%25s-define-the-same-hooked-property-%28%24%25s%29-in-the-composition-of-%25s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed
	:twitter:description: %s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed: When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-hooked-property-($%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-hooked-property-($%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html","name":"%s and %s define the same hooked property ($%s) in the composition of %s. Conflict resolution between hooked properties is currently not supported. Class was composed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:59:43 +0000","dateModified":"Fri, 24 Jul 2026 15:59:43 +0000","description":"When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-and-%s-define-the-same-hooked-property-($%s)-in-the-composition-of-%s.-conflict-resolution-between-hooked-properties-is-currently-not-supported.-class-was-composed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a class and a trait it uses both declare hooks for a property of the same name, PHP cannot merge the two definitions, even when the hooks are effectively identical.

For plain properties, a trait property is simply overridden by an identically named property in the using class, as long as the two are type-compatible. For methods, name clashes between traits can be settled with the ``insteadof`` and ``as`` operators. Hooked properties have neither mechanism: there is no way to tell PHP which of the two conflicting sets of hooks (``get``/``set``) should win, so the compiler always raises a fatal error instead of picking one silently.

The same restriction applies when two different traits, both used by the same class, declare hooks for a property with the same name.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       public $prop {
           get { echo __METHOD__, PHP_EOL; }
           set { echo __METHOD__, PHP_EOL; }
       }
   }
   
   class C {
       use T;
   
       public $prop {
           get { echo __METHOD__, PHP_EOL; }
           set { echo __METHOD__, PHP_EOL; }
       }
   }
   
   ?>


Literal Examples
****************
+ C and T define the same hooked property ($prop) in the composition of C. Conflict resolution between hooked properties is currently not supported. Class was composed

Solutions
_________

+ Rename the property in the trait or in the class so that they no longer collide.
+ Remove the hooks from the property in the class, and rely solely on the trait's hooks.
+ Remove the hooks from the property in the trait, and only declare hooks in the class.
+ Move the shared behaviour into a method that both the trait and the class hooks can call, instead of duplicating the hooks.

Related Error Messages
______________________

+ :ref:`%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed`
+ :ref:`cannot-redeclare-property-hook`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
