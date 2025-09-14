.. _cannot-use-"parent"-when-current-class-scope-has-no-parent:

Cannot use "parent" when current class scope has no parent
----------------------------------------------------------
 
.. meta::
	:description:
		Cannot use "parent" when current class scope has no parent: ``parent`` keyword represents the first available class in the current class hierarchy.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &quot;parent&quot; when current class scope has no parent
	:og:description: ``parent`` keyword represents the first available class in the current class hierarchy
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22parent%22-when-current-class-scope-has-no-parent.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use "parent" when current class scope has no parent
	:twitter:description: Cannot use "parent" when current class scope has no parent: ``parent`` keyword represents the first available class in the current class hierarchy
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html","name":"Cannot use \"parent\" when current class scope has no parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:19:07 +0000","dateModified":"Sun, 14 Sep 2025 15:19:07 +0000","description":"``parent`` keyword represents the first available class in the current class hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-current-class-scope-has-no-parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``parent`` keyword represents the first available class in the current class hierarchy. A class has a ``parent`` class, when that class uses the ``extends`` keyword. When the current class has no such keyword, it has no ``parent`` and cannot use it.

This error applies to ``parent`` as a class descriptor or as a type.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo(parent $y) {
           parent::goo();
       }
   }
   
   ?>

Solutions
_________

+ Add a parent to the current class.
+ Use another class name, instead of ``parent``: for example, the actual name of the target class, rather than the relative one.


In previous PHP versions, this error message used to be :ref:`parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!`.
