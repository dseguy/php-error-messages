# Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html","name":"Function libxml_disable_entity_loader() is deprecated since 8.0, as external entity loading is disabled by default","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-24T18:28:14+01:00","dateModified":"2025-09-18T06:57:58+02:00","description":"This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-libxml_disable_entity_loader()-is-deprecated-since-8.0,-as-external-entity-loading-is-disabled-by-default.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This warning signals that PHP is not using this function anymore: the features of loading external entities has been disabled, for security purposes: loading entities from a remote server without checking them was a serious vulnerability. 

The deprecation warning warns the user that this feature is already inactive.

## Example

```php
<?php

libxml_disable_entity_loader(true);

?>
```

## Alternatives
+ Remove the call to libxml_disable_entity_loader().
