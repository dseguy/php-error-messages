.. _cannot-use--"parent-"-when-current-class-scope-has-no-parent:

Cannot use \"parent\" when current class scope has no parent
------------------------------------------------------------
 
.. meta::
	:description:
		Cannot use \"parent\" when current class scope has no parent: ``parent::`` refers to the parent of the class currently being defined.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;parent\&quot; when current class scope has no parent
	:og:description: ``parent::`` refers to the parent of the class currently being defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22parent-%22-when-current-class-scope-has-no-parent.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"parent\" when current class scope has no parent
	:twitter:description: Cannot use \"parent\" when current class scope has no parent: ``parent::`` refers to the parent of the class currently being defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html","name":"Cannot use \\\"parent\\\" when current class scope has no parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:58 +0000","dateModified":"Wed, 05 Aug 2026 14:18:58 +0000","description":"``parent::`` refers to the parent of the class currently being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"parent-\"-when-current-class-scope-has-no-parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``parent::`` refers to the parent of the class currently being defined. It can only be used inside a class that actually extends another class.

Using ``parent::`` in a class that has no parent (no ``extends`` clause) used to only trigger a deprecation notice, in PHP 7.4. Since PHP 8.0, it is a compile time fatal error.

This differs from using ``parent::`` completely outside of any class scope, which is a separate error.

Example
_______

.. code-block:: php

   <?php
   
   class Foo {
       public function bar() {
           parent::bar();
       }
   }
   
   ?>

Solutions
_________

+ Make the class extend a parent class.
+ Remove the ``parent::`` call, and implement the logic directly in the method.

Related Error Messages
______________________

+ :ref:`cannot-use--"parent-"-when-no-class-scope-is-active`
+ :ref:`cannot-use--"%s-"-when-no-class-scope-is-active`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `orphanedParent <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/orphanedParent.html>`_.
