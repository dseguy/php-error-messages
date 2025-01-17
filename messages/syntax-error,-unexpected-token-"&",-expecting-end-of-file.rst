.. _syntax-error,-unexpected-token-"&",-expecting-end-of-file:

syntax error, unexpected token "&", expecting end of file
---------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "&", expecting end of file: ``&amp;`` is the reference operator.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;&amp;&quot;, expecting end of file
		:og:description: ``&amp;`` is the reference operator
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%26%22%2C-expecting-end-of-file.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected token "&", expecting end of file
		:twitter:description: syntax error, unexpected token "&", expecting end of file: ``&`` is the reference operator
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
``&`` is the reference operator. It returns a reference to a value, and cannot be used standalone, or on the left part of an assignation.

Example
_______

.. code-block:: php

   <?php
   
   &$x;
   
   &E_ALL;
   
   $c = &'33';
   
   ?>

Solutions
_________

+ Remove the whole expression.
+ Put this expression in another variable, with an assignation.
+ Put this expression in another variable, and make the reference on that variable.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"&"`
