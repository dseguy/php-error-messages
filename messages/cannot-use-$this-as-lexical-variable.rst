.. _cannot-use-\$this-as-lexical-variable:

Cannot use $this as lexical variable
------------------------------------
 
.. meta::
	:description:
		Cannot use $this as lexical variable: A lexical variable is a variable imported into a closure via the ``use`` clause.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use $this as lexical variable
	:og:description: A lexical variable is a variable imported into a closure via the ``use`` clause
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%24this-as-lexical-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use $this as lexical variable
	:twitter:description: Cannot use $this as lexical variable: A lexical variable is a variable imported into a closure via the ``use`` clause
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-lexical-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-lexical-variable.html","name":"Cannot use $this as lexical variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 07:56:48 +0000","dateModified":"Mon, 13 Jul 2026 07:56:48 +0000","description":"A lexical variable is a variable imported into a closure via the ``use`` clause","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-lexical-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A lexical variable is a variable imported into a closure via the ``use`` clause. Since PHP 8.1, ``$this`` is automatically available inside all closures defined in an object context, so it is no longer allowed to explicitly import it as a lexical variable. This is also true for arrow functions, which implicitly capture ``$this`` when defined inside a method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo() {
           $fn = function () use ($this) {
               return $this;
           };
       }
   }
   
   (new X)->foo();
   
   ?>

Solutions
_________

+ Remove ``$this`` from the ``use`` clause, since it is automatically available in the closure.
+ Use a ``static`` closure if ``$this`` is not needed.

Related Error Messages
______________________

+ :ref:`closures-in-constant-expressions-must-be-static`
+ :ref:`using-$this-when-not-in-object-context`
+ :ref:`cannot-use-auto-global-as-lexical-variable`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
