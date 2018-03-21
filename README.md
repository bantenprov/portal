# portal

[![Join the chat at https://gitter.im/portal/Lobby](https://badges.gitter.im/portal/Lobby.svg)](https://gitter.im/portal/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/portal/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/portal/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/portal/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/portal/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/portal/v/stable)](https://packagist.org/packages/bantenprov/portal)
[![Total Downloads](https://poser.pugx.org/bantenprov/portal/downloads)](https://packagist.org/packages/bantenprov/portal)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/portal/v/unstable)](https://packagist.org/packages/bantenprov/portal)
[![License](https://poser.pugx.org/bantenprov/portal/license)](https://packagist.org/packages/bantenprov/portal)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/portal/d/monthly)](https://packagist.org/packages/bantenprov/portal)
[![Daily Downloads](https://poser.pugx.org/bantenprov/portal/d/daily)](https://packagist.org/packages/bantenprov/portal)

PSB

## Install
using composer

Install Tanara
~~~
$ composer create-project bantenprov/tanara:dev-dev
~~~

Install PSB
~~~
$ composer require bantenprov/portal:"dev-master"
~~~

## Download
git clone
~~~
$ git clone https://github.com/bantenprov/portal.git
~~~

## Edit config/App.php
~~~
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
//==
        Bantenprov\Portal\PortalServiceProvider::class,
~~~

## Publish vendor command :
~~~
$ php artisan vendor:publish --tag=portal-assets --force
$ php artisan vendor:publish --tag=portal-public-image --force
~~~
