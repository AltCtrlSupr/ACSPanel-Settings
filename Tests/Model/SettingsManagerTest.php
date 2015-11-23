<?php

namespace ACS\ACSPanelSettingsBundle\Tests\Model;

use ACS\ACSPanelBundle\Tests\Controller\CommonTestCase;
use ACS\ACSPanelSettingsBundle\Doctrine\SettingManager;

class SettingsManagerTest extends CommonTestCase
{
    public function testGetSetting()
    {
        $settingManager = $this->getContainer()->get('acs.setting_manager');
        $setting = $settingManager->getSetting('last_used_uid', null);

        $this->assertNotNull($setting);
    }
}
