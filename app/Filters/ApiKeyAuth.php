<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class ApiKeyAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $key = $request->getHeaderLine('X-API-KEY');
        if ($key !== 'my_secure_api_key') {
            return Services::response()
                ->setStatusCode(401)
                ->setJSON(['message' => 'Invalid API Key']);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
