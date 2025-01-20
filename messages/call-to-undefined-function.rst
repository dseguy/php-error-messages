.. _call-to-undefined-function:

Call to undefined function
--------------------------
 
.. meta::
	:description:
		Call to undefined function: This error appears when calling a function that is not defined.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to undefined function
	:og:description: This error appears when calling a function that is not defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to undefined function
	:twitter:description: Call to undefined function: This error appears when calling a function that is not defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error appears when calling a function that is not defined. 

There should be a function definition in the code, and that definition must be included in the code before it is called. The presence of a function may be tested with the ``function_exists()`` function. 

The function may be defined in a PHP extension, or its core: then, the function has no explicit definition. Its existence may be checked with a call to ``get_defined_function()``, which lists all the functions, at the execution point.  

A function may be disabled in the PHP.ini, using the ``disabled_functions`` directive. Then, the function is totally unknown by PHP, and it may even be redefined. 

Language constructs, such as ``exit`` and ``die``, are not functions, and some features, such as calling them from a string, is not possible until PHP 8.4. 

The function might be defined in a different namespace, or its import might be missing.


Example
_______

.. code-block:: php

   <?php
   
   // calling a function before it is defined
   foo();
   
   function foo() {}
   
   try {
   	//Uncaught Error: Call to undefined function \exit()
       $s = 'exit';
       $s();
   } catch(Error) {
       print "No such function as $s";
   }
   
   ?>

Solutions
_________

+ Check the spelling of the function name.
+ Check the version of PHP, or its extensions: some functions are defined in specific versions, or later.
+ Check the namespace of the called function: it might not be available in the current namespace, or in the global namespace.
+ Check the use expression at the beginning of the file: the import expression might be missing.
+ Use the function_exists() function before calling a function whose name is stored in a variable.
+ Use a try/catch around the function call, and catch Error (not exceptions).

Related Error Messages
______________________

+ :ref:`call-to-undefined-function-each()`
+ :ref:`call-to-undefined-function-exit()`
