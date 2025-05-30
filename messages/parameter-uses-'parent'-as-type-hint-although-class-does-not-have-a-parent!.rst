.. _parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!:

Parameter uses 'parent' as type hint although class does not have a parent!
---------------------------------------------------------------------------
 
.. meta::
	:description:
		Parameter uses 'parent' as type hint although class does not have a parent!: This error is a Reflection API error.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Parameter uses &#039;parent&#039; as type hint although class does not have a parent!
	:og:description: This error is a Reflection API error
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/parameter-uses-%27parent%27-as-type-hint-although-class-does-not-have-a-parent%21.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter uses 'parent' as type hint although class does not have a parent!
	:twitter:description: Parameter uses 'parent' as type hint although class does not have a parent!: This error is a Reflection API error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!.html","name":"Parameter uses 'parent' as type hint although class does not have a parent!","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error is a Reflection API error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/parameter-uses-'parent'-as-type-hint-although-class-does-not-have-a-parent!.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is a Reflection API error. It appears when the code tries to get information about the type of a parameter, that was defined as 'parent' while it is not a valid code.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo(parent $a) {}
   }
   
   ?>

Solutions
_________

+ Check the name of the type before trying to instantiate it.
