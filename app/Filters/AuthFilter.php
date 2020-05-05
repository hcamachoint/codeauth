<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
      $session = \Config\Services::session();
      if (!$session->get('logged_in'))
      {
          return redirect()->to(base_url().'/auth/login');
      }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        return $response;
    }
}
