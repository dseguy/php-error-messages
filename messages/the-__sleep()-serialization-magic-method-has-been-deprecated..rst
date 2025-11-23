.. _the-__sleep()-serialization-magic-method-has-been-deprecated.:

The __sleep() serialization magic method has been deprecated.
-------------------------------------------------------------
 
.. meta::
	:description:
		The __sleep() serialization magic method has been deprecated.: Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The __sleep() serialization magic method has been deprecated.
	:og:description: Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-__sleep%28%29-serialization-magic-method-has-been-deprecated..html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The __sleep() serialization magic method has been deprecated.
	:twitter:description: The __sleep() serialization magic method has been deprecated.: Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-__sleep()-serialization-magic-method-has-been-deprecated..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-__sleep()-serialization-magic-method-has-been-deprecated..html","name":"The __sleep() serialization magic method has been deprecated.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 20:39:23 +0000","dateModified":"Sun, 16 Nov 2025 20:39:23 +0000","description":"Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-__sleep()-serialization-magic-method-has-been-deprecated..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland. Initially with the __sleep() and __wakeup() magic methods, then with the Serializable interface and finally with __serialize() and __unserialize(). 

In the end, the ``__serialize`` and ``__unserialize`` methods must be used, instead of ``__sleep`` and ``__wakeup``.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __sleep() {}
   }
   
   ?>

Solutions
_________

+ Rename the method to ``__serialize``.

Related Error Messages
______________________

+ :ref:`the-__wakeup()-serialization-magic-method-has-been-deprecated.`

See Also
________

+ `PHP RFC: Deprecations for PHP 8.5 <https://wiki.php.net/rfc/deprecations_php_8_5>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
