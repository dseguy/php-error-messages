.. _cannot-use--"static-"-as-method-modifier-in-trait-alias:

Cannot use \"static\" as method modifier in trait alias
-------------------------------------------------------
 
.. meta::
	:description:
		Cannot use \"static\" as method modifier in trait alias: The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;static\&quot; as method modifier in trait alias
	:og:description: The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22static-%22-as-method-modifier-in-trait-alias.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"static\" as method modifier in trait alias
	:twitter:description: Cannot use \"static\" as method modifier in trait alias: The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html","name":"Cannot use \\\"static\\\" as method modifier in trait alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"static-\"-as-method-modifier-in-trait-alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``as`` adaptation syntax used with ``use`` (traits) can only change the visibility of an imported method, or give it a new alias. It cannot be used to add the ``static`` modifier to a method: a trait method's static-ness is fixed by how it is declared in the trait itself, and cannot be altered by the class that imports it.

Example
_______

.. code-block:: php

   <?php
   
   trait Greet
   {
       public function hello()
       {
           echo 'hi';
       }
   }
   
   class X
   {
       use Greet {
           hello as static greetStatically;
       }
   }
   
   ?>


Literal Examples
****************
+ Cannot use "static" as method modifier in trait alias

Solutions
_________

+ Remove the ``static`` modifier from the ``as`` adaptation, and only change the visibility or the alias name.
+ Declare the method as ``static`` directly in the trait, if that is the intended behavior.

Related Error Messages
______________________

+ :ref:`a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist`
+ :ref:`an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist`
+ :ref:`trait-method-%s::%s-has-not-been-applied-as-%s::%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
