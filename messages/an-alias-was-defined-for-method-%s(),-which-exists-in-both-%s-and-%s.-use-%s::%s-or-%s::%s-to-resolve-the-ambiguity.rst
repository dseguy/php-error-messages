.. _an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity:

An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity
-------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity: Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity
	:og:description: Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/an-alias-was-defined-for-method-%25s%28%29%2C-which-exists-in-both-%25s-and-%25s.-use-%25s%3A%3A%25s-or-%25s%3A%3A%25s-to-resolve-the-ambiguity.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity
	:twitter:description: An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity: Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity.html","name":"An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 09:14:55 +0000","dateModified":"Thu, 06 Aug 2026 09:14:55 +0000","description":"Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias;``.

When several of the traits used by the class declare a method with that exact name, PHP has no way to decide which one the alias should refer to, since the unqualified form only works when the name is unambiguous. The class composition fails until the origin trait is made explicit.

Example
_______

.. code-block:: php

   <?php
   
   trait A {
       public function foo() {}
   }
   
   trait B {
       public function foo() {}
   }
   
   class C {
       use A, B {
           foo as bar;
       }
   }
   
   ?>


Literal Examples
****************
+ An alias was defined for method foo(), which exists in both A and B. Use A::foo or B::foo to resolve the ambiguity

Solutions
_________

+ Qualify the reference with the trait it should come from, as in `A::foo as bar;`.
+ Rename or remove the method in one of the conflicting traits so only one of them still declares it.

Related Error Messages
______________________

+ :ref:`the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error`
+ :ref:`a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
