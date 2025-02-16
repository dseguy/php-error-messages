.. _only-hooked-properties-may-be-declared-abstract:

Only hooked properties may be declared abstract
-----------------------------------------------
 
.. meta::
	:description:
		Only hooked properties may be declared abstract: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only hooked properties may be declared abstract
	:og:description: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-hooked-properties-may-be-declared-abstract.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only hooked properties may be declared abstract
	:twitter:description: Only hooked properties may be declared abstract: Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-hooked-properties-may-be-declared-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-hooked-properties-may-be-declared-abstract.html","name":"Only hooked properties may be declared abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-hooked-properties-may-be-declared-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block.

In previous version, PHP would never allow properties to be abstract.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
       public abstract string $x;
   }
   
   ?>

Solutions
_________

+ Add an identity hook to the class, such as ``get => $this->x`` or ``set => $this->x = $value;``.
+ Remove the abstract keyword.


In previous PHP versions, this error message used to be :ref:`cannot-use-the-abstract-modifier-on-a-property`.
