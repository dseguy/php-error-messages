.. _creation-of-dynamic-property-%s::\$%s-is-deprecated:

Creation of dynamic property %s::$%s is deprecated
--------------------------------------------------
 
.. meta::
	:description:
		Creation of dynamic property %s::$%s is deprecated: When PHP uses an undefined property for a writing access, it used to create that property on the fly.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Creation of dynamic property %s::$%s is deprecated
	:og:description: When PHP uses an undefined property for a writing access, it used to create that property on the fly
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/creation-of-dynamic-property-%25s%3A%3A%24%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Creation of dynamic property %s::$%s is deprecated
	:twitter:description: Creation of dynamic property %s::$%s is deprecated: When PHP uses an undefined property for a writing access, it used to create that property on the fly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/creation-of-dynamic-property-%s::$%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/creation-of-dynamic-property-%s::$%s-is-deprecated.html","name":"Creation of dynamic property %s::$%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:12:16 +0000","description":"When PHP uses an undefined property for a writing access, it used to create that property on the fly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/creation-of-dynamic-property-%s::$%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When PHP uses an undefined property for a writing access, it used to create that property on the fly. The property is created with public visibility, not type nor default value. 

Since PHP 8.2, this is a deprecated feature. In a later version, by default, dynamic properties will be forbidden, and activated case by case, using sdtClass or the ``#[AllowDynamicProperties]`` attribute.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $property = 1;
   }
   
   $x = new X;
   $x->property = 2;
   // This is a dynamic property
   $x->other = 3;
   
   ?>

Solutions
_________

+ Declare the property in the class definition.
+ Create an array and store the properties there.
+ Create a stdClass object and store the properties there.
+ Add the ``#[AllowDynamicProperties]``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dynamicProperties <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicProperties.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `dynamicProperties <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicProperties.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/UndefinedProperty <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/UndefinedProperty.html>`_.
