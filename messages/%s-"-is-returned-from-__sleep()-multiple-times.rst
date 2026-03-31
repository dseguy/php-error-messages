.. _%s-"-is-returned-from-__sleep()-multiple-times:

%s\" is returned from __sleep() multiple times
----------------------------------------------
 
.. meta::
	:description:
		%s\" is returned from __sleep() multiple times: This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s\&quot; is returned from __sleep() multiple times
	:og:description: This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%22-is-returned-from-__sleep%28%29-multiple-times.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s\" is returned from __sleep() multiple times
	:twitter:description: %s\" is returned from __sleep() multiple times: This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-\"-is-returned-from-__sleep()-multiple-times.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-\"-is-returned-from-__sleep()-multiple-times.html","name":"%s\\\" is returned from __sleep() multiple times","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-\"-is-returned-from-__sleep()-multiple-times.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when one of the properties that has to be put to sleep is repeated in the returned array of ``__sleep()``. All the duplicated properties are reported in one pass, although each of them only once. The warning is only triggered when the code is run.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private $data;
   
       public function __sleep() {
           return ['data', 'data', 'data'];
       }
   }
   
   // Create an instance and serialize it
   $example = new Example('test');
   $serialized = serialize($example);
   
   ?>


Literal Examples
****************
+ data" is returned from __sleep() multiple time

Solutions
_________

+ Make sure the properties names are all unique in the returned array.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
