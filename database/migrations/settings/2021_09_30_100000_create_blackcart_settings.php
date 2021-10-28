<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateBlackcartSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('blackcart.enabled', false);
        $this->migrator->add('blackcart.url', '');
    }

    public function down()
    {
        $this->migrator->delete('blackcart.enabled');
        $this->migrator->delete('blackcart.url');
    }
}
