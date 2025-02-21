.. _using-\$this-when-not-in-object-context:

Using $this when not in object context
--------------------------------------
 
.. meta::
	:description:
		Using $this when not in object context: A static method is also called a class method: it may be executed without a dedicated object.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using $this when not in object context
	:og:description: A static method is also called a class method: it may be executed without a dedicated object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-%24this-when-not-in-object-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using $this when not in object context
	:twitter:description: Using $this when not in object context: A static method is also called a class method: it may be executed without a dedicated object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-$this-when-not-in-object-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-$this-when-not-in-object-context.html","name":"Using $this when not in object context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A static method is also called a class method: it may be executed without a dedicated object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-$this-when-not-in-object-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A static method is also called a class method: it may be executed without a dedicated object. That object is usually made available in the method, via the pseudo variable $this. 

Hence, when a method is marked as static, the variable $this is not made available, and cannot be used. 

In the error message, the 'object context' refers to a class, enum or trait. $this must be localised inside such structures; even more, it is only used in the body of a method of such structure. 

Inside a class, trait or enum, static methods, static closures and static arrow functions shall not use $this. The two last ones are marked also with the static keyword.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       static function foo() { print $this; }
   }
   
   var_dump(x::foo());
   
   ?>

Solutions
_________

+ Make the method non-static, and use $this.
+ Keep the method static, and remove calls to $this.
+ Make the closure non-static.
+ Make the arrow function non-static.
