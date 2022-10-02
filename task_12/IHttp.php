<?php

interface IHttp
{

    public function get(string $url, array $options);

    public function post(string $url);
}
