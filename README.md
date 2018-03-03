## portal

[![Join the chat at https://gitter.im/portal/Lobby](https://badges.gitter.im/portal/Lobby.svg)](https://gitter.im/portal/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/portal/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/portal/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/portal/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/portal/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/portal/v/stable)](https://packagist.org/packages/bantenprov/portal)
[![Total Downloads](https://poser.pugx.org/bantenprov/portal/downloads)](https://packagist.org/packages/bantenprov/portal)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/portal/v/unstable)](https://packagist.org/packages/bantenprov/portal)
[![License](https://poser.pugx.org/bantenprov/portal/license)](https://packagist.org/packages/bantenprov/portal)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/portal/d/monthly)](https://packagist.org/packages/bantenprov/portal)
[![Daily Downloads](https://poser.pugx.org/bantenprov/portal/d/daily)](https://packagist.org/packages/bantenprov/portal)


Portal Pemerintah Provinsi Banten

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
