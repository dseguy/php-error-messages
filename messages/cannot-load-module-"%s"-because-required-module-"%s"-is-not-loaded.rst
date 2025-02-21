.. _cannot-load-module-"%s"-because-required-module-"%s"-is-not-loaded:

Cannot load module "%s" because required module "%s" is not loaded
------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot load module "%s" because required module "%s" is not loaded: This is an error in the structure of the compiled PHP parser.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot load module &quot;%s&quot; because required module &quot;%s&quot; is not loaded
	:og:description: This is an error in the structure of the compiled PHP parser
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-load-module-%22%25s%22-because-required-module-%22%25s%22-is-not-loaded.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot load module "%s" because required module "%s" is not loaded
	:twitter:description: Cannot load module "%s" because required module "%s" is not loaded: This is an error in the structure of the compiled PHP parser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-load-module-\"%s\"-because-required-module-\"%s\"-is-not-loaded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-load-module-\"%s\"-because-required-module-\"%s\"-is-not-loaded.html","name":"Cannot load module \"%s\" because required module \"%s\" is not loaded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This is an error in the structure of the compiled PHP parser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-load-module-\"%s\"-because-required-module-\"%s\"-is-not-loaded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
