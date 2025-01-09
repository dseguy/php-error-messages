.. _syntax-error,-unexpected-token-"__namespace__",-expecting-"(":

syntax error, unexpected token "__NAMESPACE__", expecting "("
-------------------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token "__NAMESPACE__", expecting "(": It is not possible to use ``__NAMESPACE__`` or any other magic constant as a function or method name.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;__NAMESPACE__&quot;, expecting &quot;(&quot;
		:og:description: It is not possible to use ``__NAMESPACE__`` or any other magic constant as a function or method name
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22__namespace__%22%2C-expecting-%22%28%22.html

Description
___________
 
It is not possible to use ``__NAMESPACE__`` or any other magic constant as a function or method name. This error is case insensitive.

Example
_______

.. code-block:: php

   <?php
   
   function __NAMESPACE__() {}
   


Literal Examples
****************
+ syntax-error

Solutions
_________

+ Use another name than ``__NAMESPACE__``.
