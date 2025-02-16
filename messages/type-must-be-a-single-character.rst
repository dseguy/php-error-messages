.. _type-must-be-a-single-character:

Type must be a single character
-------------------------------
 
.. meta::
	:description:
		Type must be a single character: The ``type`` argument of the snmp2_set() function is a list of types: one or more.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type must be a single character
	:og:description: The ``type`` argument of the snmp2_set() function is a list of types: one or more
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-must-be-a-single-character.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type must be a single character
	:twitter:description: Type must be a single character: The ``type`` argument of the snmp2_set() function is a list of types: one or more
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-must-be-a-single-character.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-must-be-a-single-character.html","name":"Type must be a single character","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The ``type`` argument of the snmp2_set() function is a list of types: one or more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-must-be-a-single-character.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
