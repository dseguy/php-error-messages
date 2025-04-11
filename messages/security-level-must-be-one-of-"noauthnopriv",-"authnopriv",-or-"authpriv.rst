.. _security-level-must-be-one-of-"noauthnopriv",-"authnopriv",-or-"authpriv:

Security level must be one of "noAuthNoPriv", "authNoPriv", or "authPriv"
-------------------------------------------------------------------------
 
.. meta::
	:description:
		Security level must be one of "noAuthNoPriv", "authNoPriv", or "authPriv": The third argument of snmp3_get() must be one of the following values, &quot;noAuthNoPriv&quot;, &quot;authNoPriv&quot;, or &quot;authPriv&quot;.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Security level must be one of &quot;noAuthNoPriv&quot;, &quot;authNoPriv&quot;, or &quot;authPriv&quot;
	:og:description: The third argument of snmp3_get() must be one of the following values, &quot;noAuthNoPriv&quot;, &quot;authNoPriv&quot;, or &quot;authPriv&quot;
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/security-level-must-be-one-of-%22noauthnopriv%22%2C-%22authnopriv%22%2C-or-%22authpriv.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security level must be one of "noAuthNoPriv", "authNoPriv", or "authPriv"
	:twitter:description: Security level must be one of "noAuthNoPriv", "authNoPriv", or "authPriv": The third argument of snmp3_get() must be one of the following values, "noAuthNoPriv", "authNoPriv", or "authPriv"
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html","name":"Security level must be one of \"noAuthNoPriv\", \"authNoPriv\", or \"authPriv\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The third argument of snmp3_get() must be one of the following values, \"noAuthNoPriv\", \"authNoPriv\", or \"authPriv\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The third argument of snmp3_get() must be one of the following values, "noAuthNoPriv", "authNoPriv", or "authPriv". Case is important. There are not constants to for these values.

Example
_______

.. code-block:: php

   <?php
   
   try {
       var_dump(snmp3_get($hostname, $community, '', '', '', '', '', '.1.3.6.1.2.1.1.1.0'));
   } catch (\ValueError $e) {
       echo $e->getMessage() . \PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Use one of the three possible values.
