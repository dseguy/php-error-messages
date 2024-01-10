Undefined offset
----------------
 
Description
___________
 
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the elemenent at this offset is not created yet, so PHP creates it on the fly, as NULL, then uses it. 

Example
_______

.. code-block:: php

   <?php
   
   echo [1,2,3][4];
   
   ?>
