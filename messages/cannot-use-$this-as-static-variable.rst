.. _cannot-use-\$this-as-static-variable:

Cannot use $this as static variable
-----------------------------------
 
.. meta::
	:description:
		Cannot use $this as static variable: ``$this`` is a special variable, automatically bound to the current object inside a method.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use $this as static variable
	:og:description: ``$this`` is a special variable, automatically bound to the current object inside a method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%24this-as-static-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use $this as static variable
	:twitter:description: Cannot use $this as static variable: ``$this`` is a special variable, automatically bound to the current object inside a method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-static-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-static-variable.html","name":"Cannot use $this as static variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:06 +0000","dateModified":"Wed, 05 Aug 2026 11:31:06 +0000","description":"``$this`` is a special variable, automatically bound to the current object inside a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-static-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``$this`` is a special variable, automatically bound to the current object inside a method. It cannot be redefined, in particular by making it a ``static`` variable, which would give it a persistent value between calls and remove its automatic binding to the object.

This is checked at compile time, whether the method is ever called or not.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function foo() {
           static $this;
       }
   }
   
   ?>

Solutions
_________

+ Use another variable name for the static variable.
+ Store the required data in a property of the object instead.

Related Error Messages
______________________

+ :ref:`cannot-use-$this-as-parameter`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
