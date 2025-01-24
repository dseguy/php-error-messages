.. _define():-argument-#3-(\$case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported:

define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
---------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported: The third argument of define() used to allow the creation of a case-insensitive global constant.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
	:og:description: The third argument of define() used to allow the creation of a case-insensitive global constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-argument-%233-%28%24case_insensitive%29-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
	:twitter:description: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported: The third argument of define() used to allow the creation of a case-insensitive global constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html","name":"define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Dec 2024 20:51:01 +0000","dateModified":"Tue, 03 Dec 2024 20:51:01 +0000","description":"The third argument of define() used to allow the creation of a case-insensitive global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The third argument of define() used to allow the creation of a case-insensitive global constant. The constant in the code would have been accessible with `A` or `a`, without distinction. This feature has been deprecated in PHP 7.3 and abandoned in PHP 8.0. For backward compatibility, the third argument is not reported as an error, but a warning. The constant is not case insensitive any way. Adding a fourth argument is a fatal error, and has no meaning.

Example
_______

.. code-block:: php

   <?php
   
   define('A', 'b', true);
   
   ?>

Solutions
_________

+ Remove the third argument in the define() call.


In more recent PHP versions, this error message is now :ref:`define():-declaration-of-case-insensitive-constants-is-deprecated`.
