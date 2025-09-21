.. _using-"_"-as-%s-is-deprecated-since-8.4:

Using "_" as %s is deprecated since 8.4
---------------------------------------
 
.. meta::
	:description:
		Using "_" as %s is deprecated since 8.4: ``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using &quot;_&quot; as %s is deprecated since 8.4
	:og:description: ``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-%22_%22-as-%25s-is-deprecated-since-8.4.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using "_" as %s is deprecated since 8.4
	:twitter:description: Using "_" as %s is deprecated since 8.4: ``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-\"_\"-as-%s-is-deprecated-since-8.4.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-\"_\"-as-%s-is-deprecated-since-8.4.html","name":"Using \"_\" as %s is deprecated since 8.4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Sep 2025 16:17:10 +0000","dateModified":"Sun, 21 Sep 2025 16:17:10 +0000","description":"``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-\"_\"-as-%s-is-deprecated-since-8.4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8.4. In the future, it may be used for pattern matching, and by anticipation, it is not allowed for other usage that may ultimately conflict with it.

This applies to classes, traits, interfaces and enumerations. There is already an extension function called ``_``, which is an alias of ``gettext``, from the eponymous extension.

This applies in every name spaces.

Example
_______

.. code-block:: php

   <?php
   
   class _ {}
   
   ?>

Solutions
_________

+ Use another name.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `ClassUnderscore <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassUnderscore.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `ClassUnderscore <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassUnderscore.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/NoClassUnderscore <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NoClassUnderscore.html>`_.
