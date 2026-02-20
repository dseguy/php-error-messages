.. _object-not-initialized:

Object not initialized
----------------------
 
.. meta::
	:description:
		Object not initialized: This error is emitted with intl and spl extension.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object not initialized
	:og:description: This error is emitted with intl and spl extension
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-not-initialized.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object not initialized
	:twitter:description: Object not initialized: This error is emitted with intl and spl extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-not-initialized.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/object-not-initialized.html","name":"Object not initialized","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 01 Feb 2026 17:29:02 +0000","dateModified":"Sun, 01 Feb 2026 17:29:02 +0000","description":"This error is emitted with intl and spl extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/object-not-initialized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted with intl and spl extension. It happens when an object was not fully initialized with the extension: it was only extended and the parent constructor was omitted. This leaves the custom object valid, but not finalized from the parent point of view.

This error may also happen when the object keeps being used, after an ``unset()`` call, or ``__destructor`` call.

Example
_______

.. code-block:: php

   <?php
   
   class MyDirectoryIterator extends DirectoryIterator {
       public function __construct() {}
   }
   
   $it = new MyDirectoryIterator;
   try {
       $it->key();
   } catch (Error $e) {
       echo $e->getMessage(), \n;
   }
   
   ?>

Solutions
_________

+ Call ``parent::__construct`` in the custom constructor.
+ Remove any call to the object after destruction.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
