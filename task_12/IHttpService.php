<?php

interface IHttpService
{

    public function request(string $url, string $method, array $options = []);
}
