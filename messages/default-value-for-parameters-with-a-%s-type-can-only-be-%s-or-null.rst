.. _default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null:

Default value for parameters with a %s type can only be %s or NULL
------------------------------------------------------------------
 
.. meta::
	:description:
		Default value for parameters with a %s type can only be %s or NULL: The default value of the parameter is not compatible with the type of the same parameter.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Default value for parameters with a %s type can only be %s or NULL
	:og:description: The default value of the parameter is not compatible with the type of the same parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/default-value-for-parameters-with-a-%25s-type-can-only-be-%25s-or-null.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default value for parameters with a %s type can only be %s or NULL
	:twitter:description: Default value for parameters with a %s type can only be %s or NULL: The default value of the parameter is not compatible with the type of the same parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null.html","name":"Default value for parameters with a %s type can only be %s or NULL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The default value of the parameter is not compatible with the type of the same parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The default value of the parameter is not compatible with the type of the same parameter. In the example here, the paramter ``$s`` is supposed to be an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

Example
_______

.. code-block:: php

   <?php
   <?php
   
   function foo(int $s = 's') { }
   
   function bar(int $s = '1') { }
   
   ?>

Solutions
_________

+ Change the type of the parameter.
+ Change the default value.
+ Change the default value to NULL.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the paramter.

Related Error Messages
______________________

+ :ref:`cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s`
+ :ref:`cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s`
