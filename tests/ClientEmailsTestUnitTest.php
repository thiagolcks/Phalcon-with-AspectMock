<?php
namespace Test;

use AspectMock\Test as test;

class ClientEmailsTestUnitTest extends \UnitTestCase
{

    public function setUp(\Phalcon\DiInterface $di = NULL, \Phalcon\Config $config = NULL)
    {
        parent::setUp($di, $config);
    }

    public function tearDown()
    {
        test::clean();
        parent::tearDown();
    }

    public function test_sendFirstNotifications()
    {
        $client = new \stdClass();
        $client->email = 'joe@doe.com';
        $client->active = 1;

        $mailer = test::double('Mailer', ['send' => null]);
        $clientEmails = new \ClientEmails();
        $clientEmails->sendFirstNotifications($client);

        $mailer->verifyInvoked('send');
    }

}
