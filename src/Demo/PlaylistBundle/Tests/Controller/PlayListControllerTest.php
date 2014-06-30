<?php

namespace Demo\PlaylistBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayListControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/playlist');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/playlist/edit/{id}');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/playlist/add');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/playlist/delete/{id}');
    }

}
