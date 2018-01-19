<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/3/15
 * Time: 下午8:21
 */

namespace App\Controller\Api;


use Core\AbstractInterface\AbstractController;
use Core\Http\Message\Status;
use Core\Http\Message\UploadFile;
use Illuminate\Database\Capsule\Manager as Capsule;

class Index extends AbstractController
{

    function index()
    {
        // TODO: Implement index() method.
//        $version = Capsule::select('select version();');
//        $this->response()->write($version);
        $users = Capsule::table('user')->where('id', '=', 1)->get();
        $this->response()->write($users);
//        $this->response()->write("this is api index");/*  url:domain/api/index.html  domain/api/  */
    }

    function afterAction()
    {
        // TODO: Implement afterAction() method.
    }

    function onRequest($actionName)
    {
        // TODO: Implement onRequest() method.
    }

    function actionNotFound($actionName = null, $arguments = null)
    {
        // TODO: Implement actionNotFount() method.
        $this->response()->withStatus(Status::CODE_NOT_FOUND);
    }

    function afterResponse()
    {
        // TODO: Implement afterResponse() method.
    }
    function test(){
        $file = $this->request()->getUploadedFile("a");
        if($file instanceof UploadFile){
            $file->moveTo(ROOT."/Temp/a.json");
        }
    }
}