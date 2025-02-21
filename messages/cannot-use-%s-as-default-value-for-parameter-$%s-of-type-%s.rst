.. _cannot-use-%s-as-default-value-for-parameter-\$%s-of-type-%s:

Cannot use %s as default value for parameter $%s of type %s
-----------------------------------------------------------
 
.. meta::
	:description:
		Cannot use %s as default value for parameter $%s of type %s: The default value of the parameter is not compatible with the type of the parameter.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use %s as default value for parameter $%s of type %s
	:og:description: The default value of the parameter is not compatible with the type of the parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-default-value-for-parameter-%24%25s-of-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as default value for parameter $%s of type %s
	:twitter:description: Cannot use %s as default value for parameter $%s of type %s: The default value of the parameter is not compatible with the type of the parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html","name":"Cannot use %s as default value for parameter $%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The default value of the parameter is not compatible with the type of the parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The default value of the parameter is not compatible with the type of the parameter. In the example here, the parameter ``$s`` is an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

It used to be recommended to make the default value ``NULL`` as it would be implicitely accepted by the type. Yet, in PHP 8.4, this is now a deprecated behavior, and it is not recommended anymore.

Example
_______

.. code-block:: php

   <?php
   
   function foo(int $s = 's') { }
   
   function bar(int $s = '1') { }
   
   ?>


Literal Examples
****************
+ Cannot use 3 as default value for parameter $a of type array

Solutions
_________

+ Change the type of the parameter.
+ Change the default value.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the paramter.

Related Error Messages
______________________

+ :ref:`default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null`
+ :ref:`cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s`
