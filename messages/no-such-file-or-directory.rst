.. _no-such-file-or-directory:

No such file or directory
-------------------------
 
	.. meta::
		:description:
			No such file or directory: PHP reports, as warning, a failure to remove a file that doesn&#039;t exists.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: No such file or directory
		:og:description: PHP reports, as warning, a failure to remove a file that doesn&#039;t exists
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/no-such-file-or-directory.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: No such file or directory
	:twitter:description: No such file or directory: PHP reports, as warning, a failure to remove a file that doesn't exists
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
PHP reports, as warning, a failure to remove a file that doesn't exists. This is both an error, as the file could not be removed, but also a success, as the file is removed in the end.

Example
_______

.. code-block:: php

   <?php
   
   unlink(non-existing-file.txt);
   
   ?>


Literal Examples
****************
+ unlink(oops): No such file or directory

Solutions
_________

+ Check that the file exists before trying to remove it.

Related Error Messages
______________________

+ :ref:`unlink-of-\"%s\"-failed,-file-does-not-exist`
+ :ref:`entry-%s-does-not-exist-and-cannot-be-deleted`
