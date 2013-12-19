Magento extension for styling command line output.

  Check [tests/test.php](https://github.com/buric/Buric_Cli/blob/master/tests/test.php) for usage examples.
  
```php
Mage::helper('cli')->putError("Test error message");
Mage::helper('cli')->putWarning("Test warning message");
Mage::helper('cli')->putSuccess("Test success message");
Mage::helper('cli')->putNotice("Test notification message");
Mage::helper('cli')->puts("Custom styled message", array('underline', 'bg_light_magenta', 'bold'));
```

Example output:
	
![Magento custom indexer](https://raw.github.com/buric/Buric_Cli/master/tests/Buric_Cli.png)
