<?php
namespace rohsyl\OmegaPlugin\[PluginName];

use rohsyl\OmegaCore\Utils\Common\Plugin\Form\PluginFormFactory;
use rohsyl\OmegaCore\Utils\Common\Plugin\Plugin as OmegaPlugin;
use rohsyl\OmegaCore\Utils\Common\Plugin\Type\TextSimple\TextSimple;
use rohsyl\OmegaPlugin\[PluginName]\Http\Controllers\Overt\PluginController

class Plugin extends OmegaPlugin
{
    const NAME = '[PluginName]';

    /**
     * Here name your plugin
     * @return string
     */
    public function name() : string {
        return self::NAME;
    }

    public function install() : bool {

        $this->createForm();

        return true;
    }

    private function createForm() {

        $this->makeForm(function(PluginFormFactory $builder) {
            $builder->form('[title]', true, true);
			// ...
        });

    }
	
	
    function overtController(): string
    {
		return PluginController::class;
	}
}