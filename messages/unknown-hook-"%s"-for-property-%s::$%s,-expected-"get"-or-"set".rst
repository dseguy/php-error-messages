.. _unknown-hook-"%s"-for-property-%s::\$%s,-expected-"get"-or-"set":

Unknown hook "%s" for property %s::$%s, expected "get" or "set"
---------------------------------------------------------------
 
	.. meta::
		:description:
			Unknown hook "%s" for property %s::$%s, expected "get" or "set": Property hooks can only be named &#039;get&#039; or &#039;set&#039;, as of PHP 8.

		:og:type: article
		:og:title: Unknown hook &quot;%s&quot; for property %s::$%s, expected &quot;get&quot; or &quot;set&quot;
		:og:description: Property hooks can only be named &#039;get&#039; or &#039;set&#039;, as of PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-hook-%22%25s%22-for-property-%25s%3A%3A%24%25s%2C-expected-%22get%22-or-%22set%22.html

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
