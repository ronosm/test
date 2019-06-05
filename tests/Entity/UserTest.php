<?php
/**
 * Created by PhpStorm.
 * User: -Ronosm
 * Date: 05/06/2019
 * Time: 14:01
 */
namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetUid()
    {
        $expected = 12;
        $user = new User();
        $reflection = new \ReflectionClass($user);
        $property = $reflection->getProperty('uid');
        $property->setAccessible(true);
        $property->setValue($user, $expected);

        $this->assertEquals($expected, $user->getUid());
    }

    public function testSetGetUsername()
    {
        $expected = "name";
        $user = new User();
        $user->setUsername($expected);

        $this->assertEquals($expected, $user->getUsername());
    }

    public function testSetGetRoles()
    {
        $expected = ["ROLE_USER"];
        $user = new User();
        $user->setRoles($expected);

        $this->assertEquals($expected, $user->getRoles());
    }

    public function testSetGetPassword()
    {
        $expected = "pass";
        $user = new User();
        $user->setPassword($expected);

        $this->assertEquals($expected, $user->getPassword());
    }
}