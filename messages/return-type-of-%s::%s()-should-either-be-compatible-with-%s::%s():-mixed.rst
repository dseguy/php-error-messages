.. _return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed:

Return type of %s::%s() should either be compatible with %s::%s(): mixed
------------------------------------------------------------------------
 
.. meta::
	:description:
		Return type of %s::%s() should either be compatible with %s::%s(): mixed: Native PHP interfaces, which define a type, expect the derived methods to use the same time.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Return type of %s::%s() should either be compatible with %s::%s(): mixed
	:og:description: Native PHP interfaces, which define a type, expect the derived methods to use the same time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/return-type-of-%25s%3A%3A%25s%28%29-should-either-be-compatible-with-%25s%3A%3A%25s%28%29%3A-mixed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return type of %s::%s() should either be compatible with %s::%s(): mixed
	:twitter:description: Return type of %s::%s() should either be compatible with %s::%s(): mixed: Native PHP interfaces, which define a type, expect the derived methods to use the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html","name":"Return type of %s::%s() should either be compatible with %s::%s(): mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jan 2025 10:53:32 +0000","dateModified":"Tue, 07 Jan 2025 10:53:32 +0000","description":"Native PHP interfaces, which define a type, expect the derived methods to use the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Native PHP interfaces, which define a type, expect the derived methods to use the same time. In particular, a ``mixed``` return type was added to some interfaces and must be available with child classes. 

Since PHP 8.1, the mixed return type is now enforced, and a deprecated notice is displayed.

One alternative is to add the expected return type; a temporary solution is to the `#[ReturnTypeWillChange]` attribute. The attribute makes the warning disappear, but must be updated in the long run to keep in line with PHP recommendations.

This rule covers the following interfaces : 

+ ArrayAccess
+ Countable
+ Exception
+ FilterIterator
+ Iterator
+ JsonSerializable
+ php_user_filter
+ SessionHandlerInterface



Example
_______

.. code-block:: php

   <?php
   
       class MyJsonSerialize implements JsonSerialize { 
           function jsonserialize() : int {}
       }
   
   ?>


Literal Examples
****************
+ Return type of MyJsonSerialize::jsonserialize() should either be compatible with JsonSerialize::jsonserialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice

Solutions
_________

+ Use the correct return type for the methods from the interfaces.
+ Use the the ``#[ReturnTypeWillChange]`` to hide the error message.
+ Remove the interface from this class.
+ Remove the offending method.
