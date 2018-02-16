## portal
Tanara's dashboard for statistic application

## Install :

First, Install tanara

```bash
$ composer create-project bantenprov/tanara:dev-master
```
then install this packages

```bash
$ composer require bantenprov/portal:dev-master
```

## Edit `config/app.php`

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        //==

        Bantenprov\Portal\PortalServiceProvider::class,
```

## Publish vendor command :

```bash
$ php artisan vendor:publish --tag=dtstatistik-assets --force
```
