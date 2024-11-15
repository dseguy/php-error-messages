.. _unknown-hook-"%s"-for-property-%s::\$%s,-expected-"get"-or-"set":

Unknown hook "%s" for property %s::$%s, expected "get" or "set"
---------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Unknown hook "%s" for property %s::$%s, expected "get" or "set": Property hooks can only be named 'get' or 'set', as of PHP 8.

Description
___________
 
Property hooks can only be named 'get' or 'set', as of PHP 8.4. In the future, there may be new ones, but not in that version. Also, case is not important.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           got {
               $this->name = $value;
           }
       }
   }
   
   ?>

Solutions
_________

+ Use 'set' or 'get' as the name of the hook.
+ Wait for a future version of PHP.
