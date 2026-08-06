.. _cannot-use--"parent-"-when-no-class-scope-is-active:

Cannot use \"parent\" when no class scope is active
---------------------------------------------------
 
.. meta::
	:description:
		Cannot use \"parent\" when no class scope is active: ``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;parent\&quot; when no class scope is active
	:og:description: ``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22parent-%22-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"parent\" when no class scope is active
	:twitter:description: Cannot use \"parent\" when no class scope is active: ``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html","name":"Cannot use \\\"parent\\\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:34 +0000","dateModified":"Wed, 05 Aug 2026 11:31:34 +0000","description":"``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``parent::`` can only be used inside a class, trait, or enum, referring to the parent of the class in scope. It cannot be used in a plain function, nor at the top level of a script, where there is no class scope at all.

This differs from using ``parent::`` inside a class that has no parent: that case is a distinct, related error.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       parent::bar();
   }
   
   ?>

Solutions
_________

+ Move the code inside a class that extends another class.
+ Call the target method directly, on an instance or via its class name.

Related Error Messages
______________________

+ :ref:`cannot-use--"parent-"-when-current-class-scope-has-no-parent`
+ :ref:`cannot-use--"%s-"-when-no-class-scope-is-active`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
