# must be empty when class provided in argument #1 ($class) does not have a constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html","name":"must be empty when class provided in argument #1 ($class) does not have a constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The class referenced in the PDO::fetchObject method does not have a constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The class referenced in the PDO::fetchObject method does not have a constructor. No argument will be handed to it, so there is no need to pass that argument.

## Example

```php
<?php

class X
{
    public $id;
    protected $val;
    private $val2;
}

$stmt->execute(); // STMT is a PDO statement
try {
    var_dump($stmt->fetchObject(X::class, [0]));
} catch (\Throwable $e) {
    echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
}

?>
```

## Alternatives
+ Omit the second argument.
+ Use an empty array for the second argument.
+ Use a null value for the second argument.

## Related error messages
+ [must-be-empty-when-class-provided-in-argument-#2-($class)-does-not-have-a-constructor](must-be-empty-when-class-provided-in-argument-#2-\($class\)-does-not-have-a-constructor.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()