.. _function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default:

Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default
------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default: This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default
	:og:description: This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/function-libxml_disable_entity_loader%28%29-is-deprecated-since-8.0%2C-as-external-entity-loading-is-disabled-by-default.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default
	:twitter:description: Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default: This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html","name":"Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Mar 2025 20:21:38 +0000","dateModified":"Tue, 18 Mar 2025 20:21:38 +0000","description":"This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability. 

The deprecation warning warns the user that this feature is already inactive.

Example
_______

.. code-block:: php

   <?php
   
   libxml_disable_entity_loader(true);
   
   ?>

Solutions
_________

+ Remove the call to libxml_disable_entity_loader().
