.. _cannot-use-"abstract"-as-method-modifier-in-trait-alias:

Cannot use "abstract" as method modifier in trait alias
-------------------------------------------------------
 
.. meta::
	:description:
		Cannot use "abstract" as method modifier in trait alias: When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &quot;abstract&quot; as method modifier in trait alias
	:og:description: When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22abstract%22-as-method-modifier-in-trait-alias.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use "abstract" as method modifier in trait alias
	:twitter:description: Cannot use "abstract" as method modifier in trait alias: When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html","name":"Cannot use \"abstract\" as method modifier in trait alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:12:54 +0000","dateModified":"Sun, 20 Apr 2025 08:12:54 +0000","description":"When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-\"abstract\"-as-method-modifier-in-trait-alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When resolving name conflicts during trait imports, it is not possible to use ``abstract`` with the ``as`` keyword. The situation is actually confusing: ``abstract`` may be the name of the alias, or it could also be understood as the modifier.

The same situation arise with ``abstract``, ``final`` or ``readonly``. On the other hand, it is valid to use the visibility modifier to actually change the visibility on the alias.

This message was completed with 'in trait alias', in PHP 8.2.

Example
_______

.. code-block:: php

   <?php
   trait T1 {
   	function foo() {}
   }
   class C1 {
   	use T1 {
   		T1::foo as abstract;
   	}
   }
   ?>

Solutions
_________

+ Use another name than ``abstract`` for the alias.
+ Use another name than ``abstract`` for the original method.

Related Error Messages
______________________

+ :ref:`cannot-use-'final'-as-method-modifier`
+ :ref:`cannot-use-'static'-as-method-modifier`
+ :ref:`cannot-use-'readonly'-as-method-modifier`


In previous PHP versions, this error message used to be :ref:`cannot-use-'abstract'-as-method-modifier`.
