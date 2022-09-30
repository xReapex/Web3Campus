<?php

namespace App\Tests\Security;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateUserTest extends WebTestCase
{
    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();

        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->find(1);

        $client->loginUser($testUser);

        $client->request('GET', '/en/profile');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'thomas');
    }
}