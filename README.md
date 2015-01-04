debug_phpspec
=============

This is an example which shows how to debug phpspec tests using PhpStorm.

To try debug using PhpSpec and PhpStorm run these commands:

1. To install virtual machine run: `vagrant up`
1. To login into it: `vagrant ssh`
1. Go to working project directory: `cd /var/www/`
1. To install composer dependencies: `composer install`
1. Now go to file `src/MantasVaitkunas/DummyClass.php` and add breakpoint with PhpStorm.
1. Export IDE key: `export XDEBUG_CONFIG="idekey=PHPSTORM"`
1. Run test: `php bin/phpspec run`

IDE should catch an event and you should see debug information in PhpStorm. Tutorial is located in web page: [http://phpforus.com/how-to-debug-phpspec-via-phpstorm/](http://phpforus.com/how-to-debug-phpspec-via-phpstorm/)