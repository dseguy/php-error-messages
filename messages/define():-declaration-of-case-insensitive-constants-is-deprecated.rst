.. _define():-declaration-of-case-insensitive-constants-is-deprecated:

define(): Declaration of case-insensitive constants is deprecated
-----------------------------------------------------------------
 
.. meta::
	:description:
		define(): Declaration of case-insensitive constants is deprecated: The third argument of define() used to allow the creation of a case-insensitive global constant.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: define(): Declaration of case-insensitive constants is deprecated
	:og:description: The third argument of define() used to allow the creation of a case-insensitive global constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-declaration-of-case-insensitive-constants-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: define(): Declaration of case-insensitive constants is deprecated
	:twitter:description: define(): Declaration of case-insensitive constants is deprecated: The third argument of define() used to allow the creation of a case-insensitive global constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/define():-declaration-of-case-insensitive-constants-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/define():-declaration-of-case-insensitive-constants-is-deprecated.html","name":"define(): Declaration of case-insensitive constants is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 10:29:17 +0000","dateModified":"Sun, 19 Oct 2025 10:29:17 +0000","description":"The third argument of define() used to allow the creation of a case-insensitive global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/define():-declaration-of-case-insensitive-constants-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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


In more recent PHP versions, this error message is now :ref:`define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `caseInsensitiveDefine <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/caseInsensitiveDefine.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Constants/CaseInsensitiveConstants <https://exakat.readthedocs.io/en/latest/Reference/Rules/Constants/CaseInsensitiveConstants.html>`_.
