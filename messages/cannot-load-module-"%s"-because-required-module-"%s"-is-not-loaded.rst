.. _cannot-load-module-"%s"-because-required-module-"%s"-is-not-loaded:

Cannot load module "%s" because required module "%s" is not loaded
------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot load module "%s" because required module "%s" is not loaded: This is an error in the structure of the compiled PHP parser.

Description
___________
 
This is an error in the structure of the compiled PHP parser. PHP relies on extensions to provide features : xml, sql, http, etc. Sometimes, those extensions are build on top of other extensions: for example, the redis extension requires the json extension. 

The names of the modules are displayed in the error messsage: check the installation procedure, as there might be missing extensions or libraries. 

Here, modules is another name for a PHP extension.

Example
_______

.. code-block:: php

   <?php
   
   // well, the problem might also happen even before
   // trying to execute that code
   
   $redis = new Redis();
   
   ?>


Literal Examples
****************
+ Cannot load module "redis" because required module "redis" is not loaded

Solutions
_________

+ Check the module list of PHP, and finish the installation of the missing extension.
+ Remove the first module, which will remove the dependency on the second, and, its related features.
