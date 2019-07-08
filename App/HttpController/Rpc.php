<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

class Rpc extends Controller
{

    function view()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello rpc view');
    }

    function index()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello rpc');
    }
}