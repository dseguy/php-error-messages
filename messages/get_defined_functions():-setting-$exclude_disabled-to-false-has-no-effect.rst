.. _get_defined_functions():-setting-\$exclude_disabled-to-false-has-no-effect:

get_defined_functions(): Setting $exclude_disabled to false has no effect
-------------------------------------------------------------------------
 
.. meta::
	:description:
		get_defined_functions(): Setting $exclude_disabled to false has no effect: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: get_defined_functions(): Setting $exclude_disabled to false has no effect
	:og:description: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/get_defined_functions%28%29%3A-setting-%24exclude_disabled-to-false-has-no-effect.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_defined_functions(): Setting $exclude_disabled to false has no effect
	:twitter:description: get_defined_functions(): Setting $exclude_disabled to false has no effect: The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html","name":"get_defined_functions(): Setting $exclude_disabled to false has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Sep 2025 04:55:22 +0000","dateModified":"Thu, 18 Sep 2025 04:55:22 +0000","description":"The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get_defined_functions():-setting-$exclude_disabled-to-false-has-no-effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The first (and only) parameter of the PHP native function get_defined_functions() is deprecated since PHP 8.0 and will disappear in PHP 9.

Example
_______

.. code-block:: php

   <?php
   
   $list = get_defined_functions(false); 
   
   ?>

Solutions
_________

+ Remove all parameter usage when calling get_defined_functions(), and fetch the list of disabled functions another way.
+ Check that the parameter is never false before usage.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
