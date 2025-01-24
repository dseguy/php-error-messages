.. _unknown-hook-"%s"-for-property-%s::\$%s,-expected-"get"-or-"set":

Unknown hook "%s" for property %s::$%s, expected "get" or "set"
---------------------------------------------------------------
 
.. meta::
	:description:
		Unknown hook "%s" for property %s::$%s, expected "get" or "set": Property hooks can only be named &#039;get&#039; or &#039;set&#039;, as of PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown hook &quot;%s&quot; for property %s::$%s, expected &quot;get&quot; or &quot;set&quot;
	:og:description: Property hooks can only be named &#039;get&#039; or &#039;set&#039;, as of PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-hook-%22%25s%22-for-property-%25s%3A%3A%24%25s%2C-expected-%22get%22-or-%22set%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown hook "%s" for property %s::$%s, expected "get" or "set"
	:twitter:description: Unknown hook "%s" for property %s::$%s, expected "get" or "set": Property hooks can only be named 'get' or 'set', as of PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-hook-\"%s\"-for-property-%s::$%s,-expected-\"get\"-or-\"set\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-hook-\"%s\"-for-property-%s::$%s,-expected-\"get\"-or-\"set\".html","name":"Unknown hook \"%s\" for property %s::$%s, expected \"get\" or \"set\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 19 Nov 2024 17:24:39 +0000","dateModified":"Tue, 19 Nov 2024 17:24:39 +0000","description":"Property hooks can only be named 'get' or 'set', as of PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-hook-\"%s\"-for-property-%s::$%s,-expected-\"get\"-or-\"set\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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


Literal Examples
****************
+ Unknown hook "got" for property X::$property, expected "get" or "set"

Solutions
_________

+ Use 'set' or 'get' as the name of the hook.
+ Wait for a future version of PHP.
