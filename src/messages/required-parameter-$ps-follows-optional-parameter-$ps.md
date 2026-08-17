# Required parameter $%s follows optional parameter $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-parameter-$ps-follows-optional-parameter-$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-parameter-$ps-follows-optional-parameter-$ps.html","name":"Required parameter $%s follows optional parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-15T22:48:05+02:00","dateModified":"2025-08-20T23:03:49+02:00","description":"An optional parameter has a default value, while a required parameter doesn't","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/required-parameter-$ps-follows-optional-parameter-$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An optional parameter has a default value, while a required parameter doesn't. In a method signature, PHP recommends to set the required parameters first, then the optional parameter. 

When this is not the case, PHP is unable to understand if an argument has to be assigned to a parameter, or if it can be skipped, and assigned to the next required. When this happens, any required parameter makes previously defined parameter also required.

## Example

```php
<?php
	
function foo($a = 1, $b) {}
	
?>
```

## Literal Examples
+ Required parameter $b follows optional parameter $b

## Alternatives
+ Remove the default value of the early optional parameter.
+ Add a default value of the late required parameter.

In more recent PHP versions, this error message is now :ref:`optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[OptionalParameterLast](OptionalParameterLast)