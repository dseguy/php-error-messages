.. _required-trait-%s-wasn\'t-added-to-%s:

Required Trait %s wasn't added to %s
------------------------------------
 
.. meta::
	:description:
		Required Trait %s wasn't added to %s: This error happens during name conflict resolution for traits.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Required Trait %s wasn&#039;t added to %s
	:og:description: This error happens during name conflict resolution for traits
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/required-trait-%25s-wasn%27t-added-to-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Required Trait %s wasn't added to %s
	:twitter:description: Required Trait %s wasn't added to %s: This error happens during name conflict resolution for traits
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/required-trait-%s-wasn\\'t-added-to-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/required-trait-%s-wasn\\'t-added-to-%s.html","name":"Required Trait %s wasn't added to %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 09:09:45 +0000","dateModified":"Fri, 17 Jan 2025 09:09:45 +0000","description":"This error happens during name conflict resolution for traits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/required-trait-%s-wasn\\'t-added-to-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error happens during name conflict resolution for traits. It means that one of the mentionned trait is not ``use`` in the code, and cannot be replaced or replacing another method. In the example below, the trait T2 is mentionned, but is not in the ``use`` command.

Example
_______

.. code-block:: php

   <?php
   trait T1 {
       function foo() {echo "T1\n";}
   }
   trait T2 {
           function foo() {echo "T2\n";}
   }
   class C {
       use T1 {
           T2::foo insteadof T1;
       }
   }
   ?>


Literal Examples
****************
+ Required Trait T2 wasn't added to C

Solutions
_________

+ Add the missing trait to the class.
+ Remove the extra name resolution from the class.
