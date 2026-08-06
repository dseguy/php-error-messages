.. _the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error:

The modifiers of the trait method %s() are changed, but this method does not exist. Error
-----------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The modifiers of the trait method %s() are changed, but this method does not exist. Error: Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The modifiers of the trait method %s() are changed, but this method does not exist. Error
	:og:description: Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-modifiers-of-the-trait-method-%25s%28%29-are-changed%2C-but-this-method-does-not-exist.-error.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The modifiers of the trait method %s() are changed, but this method does not exist. Error
	:twitter:description: The modifiers of the trait method %s() are changed, but this method does not exist. Error: Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html","name":"The modifiers of the trait method %s() are changed, but this method does not exist. Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 09:14:47 +0000","dateModified":"Thu, 06 Aug 2026 09:14:47 +0000","description":"Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Inside the ``use`` block of a class, a conflict-resolution rule can change the visibility of a trait method without renaming it, by writing ``method as visibility;`` -- with no trait name before the method, and no new name after the modifier.

Here, ``bar`` is not qualified with a trait name, so PHP looks for a method called ``bar`` in every trait used by the class. Since none of them declares it, and the rule does not introduce an alias (there is no new name after ``protected``), PHP reports that the modifiers of a non-existent method were changed, rather than reporting a missing alias target.

Example
_______

.. code-block:: php

   <?php
   
   trait A {
       public function foo() {}
   }
   
   class C {
       use A {
           bar as protected;
       }
   }
   
   ?>


Literal Examples
****************
+ The modifiers of the trait method bar() are changed, but this method does not exist. Error

Solutions
_________

+ Fix the typo in the method name so it matches an existing method of one of the used traits.
+ Remove the rule if changing the visibility of that method is no longer needed.

Related Error Messages
______________________

+ :ref:`an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity`
+ :ref:`a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
