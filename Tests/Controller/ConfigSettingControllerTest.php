<?php

namespace ACS\ACSPanelSettingsBundle\Tests\Controller;

use ACS\ACSPanelBundle\Tests\Controller\CommonTestCase;

class ConfigSettingControllerTest extends CommonTestCase
{
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = $this->createAuthorizedClient('superadmin','1234');

        // Create a new entry in the database
        $crawler = $client->request('GET', '/settings/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }
}
