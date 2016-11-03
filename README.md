# Personal Utility Libraries

This project contains libraries that I find usefull during my personal project development. Therefore I make a full Collection of them in order everyone to use it.

>NOTE:

>In this documentation for each class I will provide namespace,class and the file path in order to look better on comments 
>in order to see futher documentation.

## Integration with composer

In ordrer to use this library with composer add the following on composer.json

```
"require":{
    ...
	"pcmagas/libs": "dev-master"
},
"extra" : {
    ...
	"map": [
		        	[
		            	"*",
		            	"CommonLibs\\Helpers",
		            	"CommonLibs\\Interfaces"
		        	]
	    	  ]
}
```
And run `composer update`.

If you cannot find on packagist and/or you are in a process of giving a hand then on composer.json add the following:

```
 "repositories": [{
      "type": "vcs",
      "url": "https://github.com/pc-magas/commonlibs.git"
    }],
```

Or (especially for development) 

```
 "repositories": [{
      "type": "vcs",
      "url": "^path_to_a_folder^"
    }],
```
Replacing the ^path_to_a_folder^ with the folder that you cloned the project
 
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
 
 