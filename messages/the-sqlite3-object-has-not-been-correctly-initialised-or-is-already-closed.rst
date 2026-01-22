.. _the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed:

The SQLite3 object has not been correctly initialised or is already closed
--------------------------------------------------------------------------
 
.. meta::
	:description:
		The SQLite3 object has not been correctly initialised or is already closed: There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The SQLite3 object has not been correctly initialised or is already closed
	:og:description: There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The SQLite3 object has not been correctly initialised or is already closed
	:twitter:description: The SQLite3 object has not been correctly initialised or is already closed: There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html","name":"The SQLite3 object has not been correctly initialised or is already closed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 14:42:35 +0000","dateModified":"Wed, 21 Jan 2026 14:42:35 +0000","description":"There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There was an attempt to use the ``Sqlite3`` database, while it is not yet initialised, or already closed. 

When extending the ``Sqlite3`` class, make sure the constructor calls the parent constructor, so that ``Sqlite3`` is actually initiliazed.

Note that the ``Sqlite3`` object was not unset yet, so it still exists. It would have been another error then.

Example
_______

.. code-block:: php

   <?php
   
   // Not yet initialized object
   $sqlite3 = new class (':memory:') extends Sqlite3 {
       function __construct() {}
   };
   $sqlite3->query('SELECT 1'); // OK
   
   // already closed object
   $sqlite3 = new Sqlite3(':memory:');
   $sqlite3->query('SELECT 1'); // OK
   $sqlite3->close();
   $sqlite3->query('SELECT 1'); // Not OK
   
   ?>

Solutions
_________

+ 

Related Error Messages
______________________

+ :ref:`call-to-a-member-function-%s()-on-%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
