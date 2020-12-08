<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Sesiones implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('tipo') == 'adm' || !session('tipo') == 'gnrl' ) {
        	return redirect()->to(base_url('/'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}