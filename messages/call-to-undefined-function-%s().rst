.. _call-to-undefined-function-%s():

Call to undefined function %s()
-------------------------------
 
.. meta::
	:description:
		Call to undefined function %s(): This error is displayed when the called function is not defined.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Call to undefined function %s()
		:og:description: This error is displayed when the called function is not defined
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-%25s%28%29.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Call to undefined function %s()
		:twitter:description: Call to undefined function %s(): This error is displayed when the called function is not defined
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is displayed when the called function is not defined. There are many places in the code where a function may be defined: in the PHP core engine, in PHP extensions, in dependencies, in the current file, in an included file. Also, since PHP 8.0, a function, disabled with the ``disable_functions`` directive, is shown as undefined, rather than forbidden.

Example
_______

.. code-block:: php

   <?php
   
   undefined_function();
   
   ?>


Literal Examples
****************
+ Call to undefined function undefined_function()
+ Call to undefined function shell_exec()
+ Call to undefined function mb_substr()

Solutions
_________

+ The function has not been written in the code.
+ The function has not been included in the code before being called.
+ The function name has a typo.
+ The function is not defined in the current PHP version.
+ The function is not defined in any PHP extension version.
+ The function is not defined the current namespace, or the global namespace.
+ The ``use`` expression, used to import that function from another namespace, misses the ``function`` keyword: ``use foo as A`` instead of ``use function foo as A``.
+ The function is actually a closure: a ``$`` is missing: ``$variable()``, instead of ``variable()``.
+ This is actually a constant, and extra ``()`` were added.
+ The function was disabled with ``disable_functions``.


In previous PHP versions, this error message used to be :ref:`%s()-has-been-disabled-for-security-reasons`.
