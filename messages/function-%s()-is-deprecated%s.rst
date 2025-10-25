.. _function-%s()-is-deprecated%s:

Function %s() is deprecated%S
-----------------------------
 
.. meta::
	:description:
		Function %s() is deprecated%S: PHP native functions get deprecated, before being removed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Function %s() is deprecated%S
	:og:description: PHP native functions get deprecated, before being removed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/function-%25s%28%29-is-deprecated%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function %s() is deprecated%S
	:twitter:description: Function %s() is deprecated%S: PHP native functions get deprecated, before being removed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-%s()-is-deprecated%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-%s()-is-deprecated%s.html","name":"Function %s() is deprecated%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Oct 2025 08:59:27 +0000","dateModified":"Sat, 25 Oct 2025 08:59:27 +0000","description":"PHP native functions get deprecated, before being removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/function-%s()-is-deprecated%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP native functions get deprecated, before being removed. This message is here to help with refactoring the code to more modern syntax, and get ready for upcoming versions.

Example
_______

.. code-block:: php

   <?php
   
   // One of the deprecated functions
   echo strftime(1);
   
   ?>


Literal Examples
****************
+ Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead

Solutions
_________

+ Use the suggestion from the error message.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
