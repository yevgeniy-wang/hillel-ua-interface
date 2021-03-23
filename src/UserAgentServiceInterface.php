<?php


namespace Hillel\UserAgentInterface;


interface UserAgentServiceInterface
{
    public function parse($ua);
    public function browser();
    public function os();
}
