.. _cannot-use-'static'-as-method-modifier:

Cannot use 'static' as method modifier
--------------------------------------
 
.. meta::
	:description:
		Cannot use 'static' as method modifier: When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;static&#039; as method modifier
	:og:description: When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27static%27-as-method-modifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'static' as method modifier
	:twitter:description: Cannot use 'static' as method modifier: When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'static'-as-method-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'static'-as-method-modifier.html","name":"Cannot use 'static' as method modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 31 Jan 2025 09:28:42 +0000","dateModified":"Fri, 31 Jan 2025 09:28:42 +0000","description":"When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'static'-as-method-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When resolving name conflicts during trait imports, it is not possible to use ``static`` with the ``as`` keyword. The situation is actually confusing: ``static`` may be the name of the alias, or it could also be understood as the modifier.

The same situation arise with ``abstract``, ``final`` or ``readonly``. On the other hand, it is valid to use the visibility modifier to actually change the visibility on the alias.


Example
_______

.. code-block:: php

   <?php
   trait T1 {
   	function foo() {}
   }
   class C1 {
   	use T1 {
   		T1::foo as static;
   	}
   }
   ?>

Solutions
_________

+ Use another name than ``static`` for the alias.
+ Use another name than ``static`` for the original method.

Related Error Messages
______________________

+ :ref:`cannot-use-'final'-as-method-modifier`
+ :ref:`cannot-use-'abstract'-as-method-modifier`
+ :ref:`cannot-use-'readonly'-as-method-modifier`
