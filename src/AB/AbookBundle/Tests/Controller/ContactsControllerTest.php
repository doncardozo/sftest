<?php

namespace AB\AbookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactsControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/add');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/edit');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts/list');
    }

}
