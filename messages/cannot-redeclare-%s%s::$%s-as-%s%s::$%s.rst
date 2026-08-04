.. _cannot-redeclare-%s%s::\$%s-as-%s%s::\$%s:

Cannot redeclare %s%s::$%s as %s%s::$%s
---------------------------------------
 
.. meta::
	:description:
		Cannot redeclare %s%s::$%s as %s%s::$%s: A non-``private`` property redeclared in a child class must keep the same ``static``/non-``static`` nature as in the parent class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare %s%s::$%s as %s%s::$%s
	:og:description: A non-``private`` property redeclared in a child class must keep the same ``static``/non-``static`` nature as in the parent class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-%25s%25s%3A%3A%24%25s-as-%25s%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare %s%s::$%s as %s%s::$%s
	:twitter:description: Cannot redeclare %s%s::$%s as %s%s::$%s: A non-``private`` property redeclared in a child class must keep the same ``static``/non-``static`` nature as in the parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html","name":"Cannot redeclare %s%s::$%s as %s%s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:21:19 +0000","dateModified":"Tue, 04 Aug 2026 14:21:19 +0000","description":"A non-``private`` property redeclared in a child class must keep the same ``static``\/non-``static`` nature as in the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A non-``private`` property redeclared in a child class must keep the same ``static``/non-``static`` nature as in the parent class. A static property belongs to the class itself, while a non-static property belongs to each instance; the two are fundamentally different storage locations, so a child class cannot silently turn one into the other while inheriting from the same family.

Here, ``X::$property`` is declared ``static``, and ``Y`` redeclares it as an instance property, which is rejected.

This is a distinct check from the one that reports ``readonly`` conflicts between parent and child properties: that message uses the literal word "property" (as in ``Cannot redeclare readonly property X::$property as non-readonly Y::$property``), while the static/non-static check never does.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       protected static $property;
   }
   
   class Y extends X {
       protected $property;
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare static X::$property as non static Y::$property
+ Cannot redeclare non static X::$property as static Y::$property

Solutions
_________

+ Make both declarations static.
+ Make both declarations non-static.
+ Remove the redeclaration in the child class, and inherit the parent property as-is.

Related Error Messages
______________________

+ :ref:`cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s`
+ :ref:`cannot-override-final-property-%s::$%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
