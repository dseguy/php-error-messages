.. _cannot-directly-construct-directory,-use-dir()-instead:

Cannot directly construct Directory, use dir() instead
------------------------------------------------------
 
.. meta::
	:description:
		Cannot directly construct Directory, use dir() instead: ``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot directly construct Directory, use dir() instead
	:og:description: ``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-directly-construct-directory%2C-use-dir%28%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot directly construct Directory, use dir() instead
	:twitter:description: Cannot directly construct Directory, use dir() instead: ``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-directly-construct-directory,-use-dir()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-directly-construct-directory,-use-dir()-instead.html","name":"Cannot directly construct Directory, use dir() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-directly-construct-directory,-use-dir()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``Directory`` is the object returned by the ``dir()`` function, giving access to ``path``, ``handle``, ``read()``, ``rewind()`` and ``close()``. It predates the rest of PHP's object model and is a thin, internal wrapper around a directory stream: it has no public constructor of its own.

Calling ``new Directory(...)`` directly is rejected, because the object needs to be initialized with an already-opened directory handle, something only ``dir()`` can set up correctly.

Example
_______

.. code-block:: php

   <?php
   
   $d = new Directory('.');
   
   ?>

Solutions
_________

+ Use ``dir($path)`` to obtain a ``Directory`` object.
+ Use ``opendir()``, ``readdir()``, ``closedir()`` for a purely procedural approach instead of the ``Directory`` object.
+ Use ``DirectoryIterator`` or ``RecursiveDirectoryIterator`` for an object-oriented, iterable interface.

Related Error Messages
______________________

+ :ref:`sqlite3result-cannot-be-directly-instantiated`
+ :ref:`the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed`

See Also
________

+ `dir <https://www.php.net/manual/en/function.dir.php>`_
+ `Directory <https://www.php.net/manual/en/class.directory.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
