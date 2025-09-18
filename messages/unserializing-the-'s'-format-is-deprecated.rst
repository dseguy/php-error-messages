.. _unserializing-the-'s'-format-is-deprecated:

Unserializing the 'S' format is deprecated
------------------------------------------
 
.. meta::
	:description:
		Unserializing the 'S' format is deprecated: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unserializing the &#039;S&#039; format is deprecated
	:og:description: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unserializing-the-%27s%27-format-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unserializing the 'S' format is deprecated
	:twitter:description: Unserializing the 'S' format is deprecated: When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unserializing-the-'s'-format-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unserializing-the-'s'-format-is-deprecated.html","name":"Unserializing the 'S' format is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 17:14:59 +0000","dateModified":"Wed, 17 Sep 2025 17:14:59 +0000","description":"When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unserializing-the-'s'-format-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using the unserialize() function, the string should not use ``S`` (upper case S) to format a string. It should only use ``s`` (lower case S).

Other formats, such as ``i``, ``b`` or ``N`` are already case sensitive.

Example
_______

.. code-block:: php

   <?php
   
   $encoded = 'S:3:"abc";';
   
   unserialize($encoded);
   
   ?>

Solutions
_________

+ Turn the ``S`` into lower case ``s``. This might be tricky.
+ Reserialize all the stored strings with lower case.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `unserialize_S <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_S.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `unserialize_S <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_S.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
