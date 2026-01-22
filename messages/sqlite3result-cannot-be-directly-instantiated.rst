.. _sqlite3result-cannot-be-directly-instantiated:

SQLite3Result cannot be directly instantiated
---------------------------------------------
 
.. meta::
	:description:
		SQLite3Result cannot be directly instantiated: ``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: SQLite3Result cannot be directly instantiated
	:og:description: ``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/sqlite3result-cannot-be-directly-instantiated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SQLite3Result cannot be directly instantiated
	:twitter:description: SQLite3Result cannot be directly instantiated: ``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/sqlite3result-cannot-be-directly-instantiated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/sqlite3result-cannot-be-directly-instantiated.html","name":"SQLite3Result cannot be directly instantiated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 14:46:20 +0000","dateModified":"Wed, 21 Jan 2026 14:46:20 +0000","description":"``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/sqlite3result-cannot-be-directly-instantiated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``.

Example
_______

.. code-block:: php

   <?php
   
   new Sqlite3Result();
   
   ?>

Solutions
_________

+ Call a valid query to obtain an object of that class.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
