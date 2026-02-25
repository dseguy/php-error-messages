.. _open_basedir-prohibits-opening-%s:

open_basedir prohibits opening %s
---------------------------------
 
.. meta::
	:description:
		open_basedir prohibits opening %s: ``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: open_basedir prohibits opening %s
	:og:description: ``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/open_basedir-prohibits-opening-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: open_basedir prohibits opening %s
	:twitter:description: open_basedir prohibits opening %s: ``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/open_basedir-prohibits-opening-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/open_basedir-prohibits-opening-%s.html","name":"open_basedir prohibits opening %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 21 Feb 2026 17:17:20 +0000","dateModified":"Sat, 21 Feb 2026 17:17:20 +0000","description":"``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/open_basedir-prohibits-opening-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``open_basedir`` is a PHP directive which limits access of the inclusion functions, such as ``include`` and ``require``, to include files which are outside the path specified with ``open_basedir``.

Example
_______

.. code-block:: php

   <?php
   
   include '/private/folder/secret.php';
   
   ?>

Solutions
_________

+ Update the ``open_basedir`` directive to allow access to the file.
+ Update the inclusion path to target a file that falls within the paths in the ``open_basedir`` directive.

Related Error Messages
______________________

+ :ref:`failed-opening-required-%s-(include_path=%s)`
+ :ref:`open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s)`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
