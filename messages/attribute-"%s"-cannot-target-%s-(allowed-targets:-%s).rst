.. _attribute-"%s"-cannot-target-%s-(allowed-targets:-%s):

Attribute "%s" cannot target %s (allowed targets: %s)
-----------------------------------------------------
 
.. meta::
	:description:
		Attribute "%s" cannot target %s (allowed targets: %s): Attributes are built with a specific target, and may not be applicable to any structure.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attribute &quot;%s&quot; cannot target %s (allowed targets: %s)
	:og:description: Attributes are built with a specific target, and may not be applicable to any structure
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attribute-%22%25s%22-cannot-target-%25s-%28allowed-targets%3A-%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attribute "%s" cannot target %s (allowed targets: %s)
	:twitter:description: Attribute "%s" cannot target %s (allowed targets: %s): Attributes are built with a specific target, and may not be applicable to any structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html","name":"Attribute \"%s\" cannot target %s (allowed targets: %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Feb 2025 15:53:51 +0000","dateModified":"Tue, 04 Feb 2025 15:53:51 +0000","description":"Attributes are built with a specific target, and may not be applicable to any structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Attributes are built with a specific target, and may not be applicable to any structure. For example, the native ``ReturnTypeWillChange`` targets only methods, and not properties.

With a custom structure, the error is shown when requesting an instance of the attribute. Otherwise, this error remains silent, and the structure may be used without error.

With a PHP native attribute, the engine decides when it makes use of it.

Example
_______

.. code-block:: php

   <?php
   
   // example with a native PHP attribute
   class Foo
   {
       #[ReturnTypeWillChange]
       public int $bar;
   }
   
   #[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
   class X { }
   
   // the object is created. It may be used without error.
   $ref = new ReflectionObject(new #[X] class() { });
   $attr = $ref->getAttributes()[0];
   
   try {
       $attr->newInstance();
   } catch (\Throwable $e) {
       print $e->getMessage();
   }
   
   ?>

Solutions
_________

+ Remove the attribute restrictions.
+ Update the attribute to target the requested feature.
+ Remove the attribute from the forbidden feature.
+ Create another the attribute for the feature.
