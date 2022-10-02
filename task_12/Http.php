<?php
class Http implements IHttp
{

    private IHttpService $service;

    public function __construct(IHttpService $xmlHttpService)
    {
        $this->service = $xmlHttpService;
    }

    public function get(string $url, array $options)
    {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url)
    {
        $this->service->request($url, 'GET');
    }

}
