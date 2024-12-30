.. _syntax-error,-unexpected-fully-qualified-name-"\xxx",-expecting-"{":

syntax error, unexpected fully qualified name "\XXX", expecting "{"
-------------------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected fully qualified name "\XXX", expecting "{": Until PHP 8.

		:og:type: article
		:og:title: syntax error, unexpected fully qualified name &quot;\XXX&quot;, expecting &quot;{&quot;
		:og:description: Until PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%5C%22%5C%5Cxxx%5C%22%2C-expecting-%5C%22%7B%5C%22.html

Description
___________
 
Until PHP 8.0, it was possible to include spaces or new lines in a namespace. They would be ignored later, but parsed and handled that way. 

In PHP 8.0, this is not possible anymore.

Example
_______

.. code-block:: php

   <?php
   
   namespace Vendor
   \XXX;
   
   echo 1;
   
   ?>


Literal Examples
****************
+ syntax error, unexpected fully qualified name "\XXX", expecting "{"

Solutions
_________

+ Make namespaces one string, without new lines or any spaces.
