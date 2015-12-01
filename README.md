MhujerFioApiBundle
====================
This bundle wraps [mhujer/fio-api-php](https://github.com/mhujer/fio-api-php) for Symfony 2.

Installation
============

Step 1: Download the Bundle
---------------------------
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require mhujer/fio-api-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------
Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Mhujer\FioApiBundle\MhujerFioApiBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Configure the Bundle
---------------------------
Configure the bundle by adding this into config.yml (you can get the `SECRET_TOKEN` from the ebanking on fio.cz):

```yaml
mhujer_fio_api:
    token: SECRET_TOKEN
```


Changelog
===========

## 1.0.0 (??)
- initial release
