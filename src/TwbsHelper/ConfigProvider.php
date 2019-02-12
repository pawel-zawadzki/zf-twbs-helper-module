<?php
/**
 * Created by PhpStorm.
 * User: pawelz
 * Date: 2019-01-27
 * Time: 21:44
 */

namespace TwbsHelper;

class ConfigProvider
{
    public function __invoke() : array
    {
        $cfg = (array) require_once __DIR__ . '/../../config/module.config.php';
        $cfg['dependencies'] = (array) ($cfg['service_manager'] ?? []);

        return $cfg;
    }
}