.. _the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead:

The backtick (`) operator is deprecated, use shell_exec() instead
-----------------------------------------------------------------
 
.. meta::
	:description:
		The backtick (`) operator is deprecated, use shell_exec() instead: The back tick operator `` \` `` is the equivalent to the function ``shell_exec()``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The backtick (`) operator is deprecated, use shell_exec() instead
	:og:description: The back tick operator `` \` `` is the equivalent to the function ``shell_exec()``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-backtick-%28%60%29-operator-is-deprecated%2C-use-shell_exec%28%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The backtick (`) operator is deprecated, use shell_exec() instead
	:twitter:description: The backtick (`) operator is deprecated, use shell_exec() instead: The back tick operator `` \` `` is the equivalent to the function ``shell_exec()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html","name":"The backtick (`) operator is deprecated, use shell_exec() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Nov 2025 18:01:31 +0000","dateModified":"Wed, 19 Nov 2025 18:01:31 +0000","description":"The back tick operator `` \\` `` is the equivalent to the function ``shell_exec()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-backtick-(`)-operator-is-deprecated,-use-shell_exec()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The back tick operator `` \` `` is the equivalent to the function ``shell_exec()``. It is being deprecated since PHP 8.5.

Example
_______

.. code-block:: php

   <?php
   
   echo `ls`;
   
   ?>

Solutions
_________

+ Use shell_exec() instead.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `backtick <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/backtick.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/DeprecatedBackTicks <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/DeprecatedBackTicks.html>`_.
