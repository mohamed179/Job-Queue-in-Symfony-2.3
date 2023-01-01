# Example using jms/job-queue-bundle package

- [Example using jms/job-queue-bundle package](#example-using-jmsjob-queue-bundle-package)
  - [Installing and configuring the package](#installing-and-configuring-the-package)
    - [Installing](#installing)
    - [Configuring](#configuring)
  - [Running the schema to add all the needed tables to the database](#running-the-schema-to-add-all-the-needed-tables-to-the-database)
  - [Using the package](#using-the-package)

## Installing and configuring the package

### Installing

You should install the jms/job-queue-bundle with version "1.1.0"

>>> NOTE: use the composer version 1

```bash
composer require jms/job-queue-bundle ^1.1.0
```

### Configuring

Next you need to update your `AppKernel.php` file, and register the
new bundle:

```php
    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new JMS\JobQueueBundle\JMSJobQueueBundle(),
        // ...
    );
```

Finally, have your `app/console` use JMSJobQueueBundle's `Application`:

```php
    // use Symfony\Bundle\FrameworkBundle\Console\Application;
    use JMS\JobQueueBundle\Console\Application;
```

You can find more info in the package docs

>>> NOTE: Please, use the version 1.1.0 docs (download it from [here](https://github.com/schmittjoh/JMSJobQueueBundle/releases/tag/1.1.0))

## Running the schema to add all the needed tables to the database

To run the schema to add all the needed tables to the database, run the following command:

```bash
php app/console doctrine:schema:update --force
```

## Using the package

You can find the example by investigating the code:

Please visit the route `/tryJMSJobQueue` to check my code

>>> NOTE: run the command `php app/console jms-job-queue:run` to run the worker that runs the jobs added to the database
