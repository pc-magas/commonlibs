# Personal Utility Libraries

This project contains libraries that I find usefull during my personal project development. Therefore I make a full Collection of them in order everyone to use it.

>NOTE:

>In this documentation for each class I will provide namespace,class and the file path in order to look better on comments 
>in order to see futher documentation.

## Integration with composer

In ordrer to use this library with composer add the following on composer.json



> "require":{
>    ...
>	"pcmagas/libs": "dev-master"
> },
> "extra" : {
>    ...
>	"map": [
>		        	[
>		            	"*",
>		            	"CommonLibs\\Helpers",
>		            	"CommonLibs\\Interfaces"
>		        	]
>	    	  ]
> }


And run `composer update`.

If you cannot find on packagist and/or you are in a process of giving a hand then on composer.json add the following:


> "repositories": [{
>      "type": "vcs",
>      "url": "https://github.com/pc-magas/commonlibs.git"
>    }],


Or (especially for development) 


> "repositories": [{
>      "type": "vcs",
>      "url": "^path_to_a_folder^"
>    }],

Replacing the ^path_to_a_folder^ with the folder that you cloned the project

##How to use
Follow these steps:

1. If you are not using a framework or you are using a framework that does not support namespaces add on the top of your code:

```php
require_once (^path_to_vendor_autoload^);

```

Where ^path^ is the correct value that directs to the composer's *autoload.php*.

2. Using php's `use` use a namespace  mentioned below.

3. Use the class's methods or extend the interface to your own class depending the case.

 
## Utility Class Information
### Helpers
The helpers are static function containing static methods. All Helpers are inside the following namespace:
`CommonLibs\Helpers`

#### String Helper
Helper that contains Utilities for basic and miscellanous string manipulation. 

 Namespace:  `CommonLibs\Helpers\StringHelper` 
 Class: `StringHelper`
 File Path: `src\Helpers\StringHelper.php`
 
#### Html Helper

Helper that contains Utilities for Html string manipulation. 

 Namespace:  `CommonLibs\Helpers\StringHelper`
  
 Class: `StringHelper`
 
 File Path: `src\Helpers\StringHelper.php`

### Interfaces
Usefull Interfaced that can be used to extend your classes.
The namespace that is used is `CommonLibs\Interfaces`.

#### ArrayableInterface
Interface that contains method references that can be used in order to convert the object that Implements it into a string.

 Namespace:  `CommonLibs\Interfaces\ArrayAbleInterface` 
 
 Interface: `ArrayAbleInterface`
 
 File Path: `src\Helpers\ArrayAbleInterface.php`
 
 #### CrudManagerInterface
 
I have created the following Interface in order to map and group all classes that are related into CRUD Operations to the database with common methods.

 Namespace:  `CommonLibs\Interfaces\CrudManagerInterface` 
 
 Interface: `CrudManagerInterface`
 
 File Path: `src\Helpers\CrudManagerInterface.php`

 
 