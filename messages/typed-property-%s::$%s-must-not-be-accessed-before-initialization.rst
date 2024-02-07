Typed property %s::$%s must not be accessed before initialization
-----------------------------------------------------------------
 
Description
___________
 
Typed properties are undefined until they are assigned for the first time. Such happens with a default value, or at the first assignation. 

The difference with untyped values, is that PHP emits that error when the property is not typed. On the other hand, an undefined property gets a NULL value instead. 

The coalesce ??, isset() and empty() operators may be used to check if the property exists, even when it is not defined. Be careful to avoid confusing an undefined property and its empty equivalent.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public int $p;
   }
   
   $x = new x;
   echo $x->p;
   
   ?>

Solutions
_________

+ Give a default value to the property.
+ Set the value of the property in the constructor.
+ Use isset(), empty() or ?? to check the status of the property before usage.
