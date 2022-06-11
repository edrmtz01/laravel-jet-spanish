<?php

namespace Edrmtz01\LaravelJetSpanish\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallJetSpanishPackage extends Command
{
    protected $signature = 'laravel-jet-spanish:install';

    protected $description = 'Publicar archivos de idioma de laravel-jet-spanish';

    public function handle()
    {


        if (!$this->configExists('es.json')) {
            $this->publishTraductionSpanish();
            $this->info('Publicando traducciones...');
        } else {
            if ($this->shouldOverwriteTraductionSpanish()) {
                $this->info('Actualizando archivos de idioma...');
                $this->publishTraductionSpanish($force = true);
            } else {
                $this->info('No se actualizaron los archivos de idioma');
            }
        }
    }

    private function configExists($fileName)
    {
        return File::exists(lang_path($fileName));
    }

    private function shouldOverwriteTraductionSpanish()
    {
        return $this->confirm(
            'Los archivos de traducción ya existen. ¿Quieres sobreescribirlos?',
            false
        );
    }

    private function publishTraductionSpanish($forcePublish = false)
    {
        $params = [
            '--provider' => "Edrmtz01\LaravelJetSpanish\LaravelJetSpanishServiceProvider",
            '--tag' => "lang"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}
