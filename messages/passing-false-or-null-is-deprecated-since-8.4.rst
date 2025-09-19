.. _passing-false-or-null-is-deprecated-since-8.4:

Passing false or null is deprecated since 8.4
---------------------------------------------
 
.. meta::
	:description:
		Passing false or null is deprecated since 8.4: Passsing false or null to dba_key_split() is deprecated since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing false or null is deprecated since 8.4
	:og:description: Passsing false or null to dba_key_split() is deprecated since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-false-or-null-is-deprecated-since-8.4.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing false or null is deprecated since 8.4
	:twitter:description: Passing false or null is deprecated since 8.4: Passsing false or null to dba_key_split() is deprecated since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-false-or-null-is-deprecated-since-8.4.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-false-or-null-is-deprecated-since-8.4.html","name":"Passing false or null is deprecated since 8.4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Sep 2025 19:31:47 +0000","dateModified":"Fri, 19 Sep 2025 19:31:47 +0000","description":"Passsing false or null to dba_key_split() is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-false-or-null-is-deprecated-since-8.4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Passsing false or null to dba_key_split() is deprecated since PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(dba_key_split(null));
   var_dump(dba_key_split(false));
   
   ?>

Solutions
_________

+ Use an empty string.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
