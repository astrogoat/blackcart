<?php

namespace Astrogoat\Blackcart;

use Astrogoat\Blackcart\Settings\BlackcartSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlackcartServiceProvider extends PackageServiceProvider
{
    public function registerApp(LegoManager $lego)
    {
        $lego->registerApp(function (App $app) {
            return $app
                ->name('blackcart')
                ->settings(BlackcartSettings::class);
        })
            ->addMigrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $this->registerApp($lego);
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('blackcart')
            ->hasViews();
    }
}
