<?php
namespace rohsyl\OmegaPlugin\[PluginName]\Http\Controllers\Overt;

use rohsyl\OmegaCore\Utils\Common\Plugin\Controllers\OvertPluginController as Controller;

class PluginController extends Controller
{
    public function display($param, $data) {

        return view('omega-plugin-[PluginName]::overt.display');
    }
}