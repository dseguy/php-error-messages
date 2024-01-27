Cannot use empty list
---------------------
 
Description
___________
 
list() must contain at least one non-empty element. Otherwise, it would attempt to load data into no variables, and that makes no sense.

Example
_______

.. code-block:: php

   <?php
   
   [,,,] = [1,2,3];
   list(,,,) = [1,2,3];
   
   ?>

Solutions
_________

+ Add at least one variable in the list() call.
+ Remove the call to list().
