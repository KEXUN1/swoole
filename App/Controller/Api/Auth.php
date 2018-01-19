<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/9/5
 * Time: 下午12:57
 */

namespace App\Controller\Api;


use Core\AbstractInterface\AbstractController;
use Core\Http\Message\Status;
use Core\Http\Request;

class Auth extends AbstractController
{

    function index()
    {
        // TODO: Implement index() method.
        $data = [
            'k1'=>11,
            'k2'=>22,
        ];
//        $this->response()->write($data);
        $statusCode = 200;
//        $this->response()->writeJson($statusCode,$data,'成功');
        $data = $this->request()->getUploadedFiles();
        $data = json_encode($data);
//        $this->response()->write($data);
        $this->response()->writeJson($statusCode,$data,'成功');
        $this->actionNotFound();
    }

    function onRequest($actionName)
    {
        // TODO: Implement onRequest() method.
    }

    function actionNotFound($actionName = null, $arguments = null)
    {
        // TODO: Implement actionNotFound() method.
        $this->response()->withStatus(Status::CODE_NOT_FOUND);
    }

    function afterAction()
    {
        // TODO: Implement afterAction() method.
    }
    function login(){
        /*
         * url is /api/auth/login/index.html
         */
        $this->response()->writeJson(Status::CODE_OK,null,'this is auth login ');
    }
}