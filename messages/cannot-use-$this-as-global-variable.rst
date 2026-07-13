.. _cannot-use-\$this-as-global-variable:

Cannot use $this as global variable
-----------------------------------
 
.. meta::
	:description:
		Cannot use $this as global variable: The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use $this as global variable
	:og:description: The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%24this-as-global-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use $this as global variable
	:twitter:description: Cannot use $this as global variable: The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-global-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-global-variable.html","name":"Cannot use $this as global variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:09:50 +0000","dateModified":"Mon, 13 Jul 2026 08:09:50 +0000","description":"The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-global-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The pseudo-variable ``$this`` is automatically available inside every method of a class, and refers to the current object. It is not possible to import ``$this`` into the global symbol table using the ``global`` keyword. ``$this`` is special and not a regular variable that may be made global.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo() {
           global $this;
       }
   }
   
   (new X)->foo();
   
   ?>

Solutions
_________

+ Use ``$this`` directly inside the method, without importing it as global.
+ Pass the object as a parameter to the function that needs it.

Related Error Messages
______________________

+ :ref:`cannot-re-assign-$this`
+ :ref:`using-$this-when-not-in-object-context`
+ :ref:`cannot-use-auto-global-as-lexical-variable`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
