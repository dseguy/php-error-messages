.. _set-access-level-of-%s::\$%s-must-be-%s-(as-in-class-%s)%s:

Set access level of %s::$%s must be %s (as in class %s)%s
---------------------------------------------------------
 
.. meta::
	:description:
		Set access level of %s::$%s must be %s (as in class %s)%s: This error is specific to asymmetric visibility.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Set access level of %s::$%s must be %s (as in class %s)%s
	:og:description: This error is specific to asymmetric visibility
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/set-access-level-of-%25s%3A%3A%24%25s-must-be-%25s-%28as-in-class-%25s%29%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Set access level of %s::$%s must be %s (as in class %s)%s
	:twitter:description: Set access level of %s::$%s must be %s (as in class %s)%s: This error is specific to asymmetric visibility
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s.html","name":"Set access level of %s::$%s must be %s (as in class %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"This error is specific to asymmetric visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is specific to asymmetric visibility. A property may expose a wider visibility for reading than for writing, for example ``public protected(set) string $foo``, which can be read from anywhere but only written from within the class or its subclasses.

When a child class redeclares such a property, the write (``set``) visibility it declares must be the same as, or weaker (more permissive) than, the one inherited from the parent. It cannot be narrowed. In the example, the parent grants write access to ``protected(set)``, but the child tries to restrict it further to ``private(set)``, which is forbidden.

The same error is raised, with an ``omitted`` access level instead of a named one, when the parent property has no explicit set-visibility restriction at all (a plain read/write property, or a hooked virtual property whose ``get`` hook exists but ``set`` hook does not restrict visibility): in that case, the child is not allowed to introduce any set-visibility restriction, since that would also be a narrowing of what the parent allows.

A property declared ``readonly`` implicitly behaves as write-once with an asymmetric set visibility, so this error can also surface when a plain or hooked property overrides, or implements, a readonly property with looser write access.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       public protected(set) string $foo;
   }
   
   class B extends A {
       public private(set) string $foo;
   }
   
   ?>


Literal Examples
****************
+ Set access level of B::$foo must be protected(set) (as in class A) or weaker
+ Set access level of B::$foo must be omitted (as in class A)

Solutions
_________

+ Use the same set-visibility keyword as the parent class (or omit it, if the parent has none).
+ Widen the set-visibility of the child property so that it is the same as, or weaker than, the parent's.
+ Remove the asymmetric visibility from the child property altogether.

Related Error Messages
______________________

+ :ref:`access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s`
+ :ref:`set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s)`
+ :ref:`cannot-override-final-property-hook-%s::%s()`
+ :ref:`access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
