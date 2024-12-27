.. _type-must-be-a-single-character:

Type must be a single character
-------------------------------
 
	.. meta::
		:description:
			Type must be a single character: The ``type`` argument of the snmp2_set() function is a list of types: one or more.

		:og:type: article
		:og:title: Type must be a single character
		:og:description: The ``type`` argument of the snmp2_set() function is a list of types: one or more
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-must-be-a-single-character.html

Description
___________
 
The ``type`` argument of the snmp2_set() function is a list of types: one or more. Each type must a string of a single character, no more, no less.

The allowed values are : '=', 'i', 'u', 's', 'x', 'd', 'n', 'o', 't', 'a', 'b', 'U', 'I', 'F', 'D'.


Example
_______

.. code-block:: php

   <?php
   
       $z = snmp2_set(hostname: $hostname, 
                      community: $communityWrite, 
                      object_id: array($oid1, $oid2), 
                      type: array('s','sb'), 
                      value: array($newvalue1, $newvalue2), 
                      );
   
   ?>

Solutions
_________

+ Remove any invalid type.
+ Remove types that are more than one character.
+ Remove types that are less than one character.
