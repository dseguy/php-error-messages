.. _%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned:

%s(): Return value of the authorizer callback must be of type int, %s returned
------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s(): Return value of the authorizer callback must be of type int, %s returned: ``Pdo\Sqlite::setAuthorizer()`` installs a userland callback that SQLite consults before executing most operations, such as creating a table, reading a column, or attaching a database.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): Return value of the authorizer callback must be of type int, %s returned
	:og:description: ``Pdo\Sqlite::setAuthorizer()`` installs a userland callback that SQLite consults before executing most operations, such as creating a table, reading a column, or attaching a database
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-return-value-of-the-authorizer-callback-must-be-of-type-int%2C-%25s-returned.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): Return value of the authorizer callback must be of type int, %s returned
	:twitter:description: %s(): Return value of the authorizer callback must be of type int, %s returned: ``Pdo\Sqlite::setAuthorizer()`` installs a userland callback that SQLite consults before executing most operations, such as creating a table, reading a column, or attaching a database
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned.html","name":"%s(): Return value of the authorizer callback must be of type int, %s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:32:21 +0000","dateModified":"Sat, 25 Jul 2026 12:32:21 +0000","description":"``Pdo\\Sqlite::setAuthorizer()`` installs a userland callback that SQLite consults before executing most operations, such as creating a table, reading a column, or attaching a database","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``Pdo\Sqlite::setAuthorizer()`` installs a userland callback that SQLite consults before executing most operations, such as creating a table, reading a column, or attaching a database. The callback receives the action being authorized plus up to four contextual strings, and it must return one of the integer constants ``Pdo\Sqlite::OK``, ``Pdo\Sqlite::DENY`` or ``Pdo\Sqlite::IGNORE``.

As of PHP 8.5, PDO strictly checks the type of the returned value. If the callback returns anything that is not an ``int`` -- a string, a boolean, ``null``, or simply nothing because a ``return`` statement was forgotten on some branch -- a ``TypeError`` is thrown instead of the value being silently coerced.

The equivalent method on the standalone ``SQLite3`` extension, ``SQLite3::setAuthorizer()``, enforces the same strict check.

Example
_______

.. code-block:: php

   <?php
   
   $pdo = new Pdo\Sqlite('sqlite::memory:');
   
   $pdo->setAuthorizer(function (int $action, ?string $arg1, ?string $arg2, ?string $arg3, ?string $arg4) {
       // Forgot to return an int constant -- this should return Pdo\Sqlite::OK, ::DENY or ::IGNORE
       return $action === Pdo\Sqlite::CREATE_TABLE ? 'allow' : 'deny';
   });
   
   $pdo->exec('CREATE TABLE test (id INTEGER)');
   
   ?>


Literal Examples
****************
+ Pdo\Sqlite::setAuthorizer(): Return value of the authorizer callback must be of type int, string returned

Solutions
_________

+ Always return one of the constants ``Pdo\Sqlite::OK``, ``Pdo\Sqlite::DENY`` or ``Pdo\Sqlite::IGNORE`` from the callback.
+ Add an explicit ``return`` statement on every branch of the callback, including the default one.
+ Declare an ``int`` return type on the callback so mismatches are caught as soon as they are written.

Related Error Messages
______________________

+ :ref:`%s():-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned`
+ :ref:`the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed`

See Also
________

+ `Pdo\Sqlite <https://www.php.net/manual/en/class.pdo-sqlite.php>`_
+ `SQLite3::setAuthorizer <https://www.php.net/manual/en/sqlite3.setauthorizer.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
