.. _passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided:

Passing null is deprecated, instead the last opened directory stream should be provided
---------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Passing null is deprecated, instead the last opened directory stream should be provided: When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing null is deprecated, instead the last opened directory stream should be provided
	:og:description: When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-null-is-deprecated%2C-instead-the-last-opened-directory-stream-should-be-provided.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing null is deprecated, instead the last opened directory stream should be provided
	:twitter:description: Passing null is deprecated, instead the last opened directory stream should be provided: When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html","name":"Passing null is deprecated, instead the last opened directory stream should be provided","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Nov 2025 19:02:15 +0000","dateModified":"Wed, 19 Nov 2025 19:02:15 +0000","description":"When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-null-is-deprecated,-instead-the-last-opened-directory-stream-should-be-provided.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When calling ``dir()`` twice, it was possible to use ``null`` the second time to open the same directory. Since PHP 8.1, it is not possible anymore, and the actual name of the directory must be provided.

Example
_______

.. code-block:: php

   <?php
   
   dir('/tmp'); // opens /tmp
   
   dir(null); // opens /tmp
   
   ?>

Solutions
_________

+ Always use the name of the directory when calling ``dir()``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
