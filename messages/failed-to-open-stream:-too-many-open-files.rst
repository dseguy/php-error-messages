.. _failed-to-open-stream:-too-many-open-files:

Failed to open stream: Too many open files
------------------------------------------
 
.. meta::
	:description:
		Failed to open stream: Too many open files: This error has two aspects: first, PHP tried to read a file and failed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Failed to open stream: Too many open files
	:og:description: This error has two aspects: first, PHP tried to read a file and failed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/failed-to-open-stream%3A-too-many-open-files.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Failed to open stream: Too many open files
	:twitter:description: Failed to open stream: Too many open files: This error has two aspects: first, PHP tried to read a file and failed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/failed-to-open-stream:-too-many-open-files.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/failed-to-open-stream:-too-many-open-files.html","name":"Failed to open stream: Too many open files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:17:04 +0000","dateModified":"Thu, 19 Feb 2026 22:17:04 +0000","description":"This error has two aspects: first, PHP tried to read a file and failed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/failed-to-open-stream:-too-many-open-files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error has two aspects: first, PHP tried to read a file and failed. This is the first part, where files are mentionned as streams. Streams are a more generic version of files: they may be local files, on the file system, or they may be remote, via any kind of protocol, or even, created on the fly by other processes.

The second aspect is a detailed version of the previous: the file failed to be read because the current process has reached the maximum number of possible files to read. This is a system limit, which prevents processes to open an unlimited number of files. Usually, reaching such limit means that the code is opening files carelessly. 

To check this limit, run the system command ``ulimit -n`` on Linux systems.

Example
_______

.. code-block:: php

   <?php
   
   parse_ini_file('/path/to/file.ini');
   
   ?>

Solutions
_________

+ Review the code to limit the number of opened files and sockets.
+ Raise the limit of opened files for the process, by using ``ulimit -n 10000`` (or more, if necessary).

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
