<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 15:01
 */

namespace Ycw\TestBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Route;

class HelloController extends Controller
{

    public function index(){
        echo 'hello word!';
        return $this->json([]);
    }
    public function test()
    {
        echo 111;
        return $this->render('@YcwTest/hello/test.html.twig');
    }
    public function test2()
    {
        echo 222;
        return $this->render('@YcwTest/hello/test.html.twig');
    }
    /**
     * Notes:日志服务
     * User: ycw
     * Date: 2019/3/15
     * Time: 15:47
     */
    public function setLog(){
        $logService = $this->get('Ycw\TestBundle\Services\LogService')
            ->execption_path(__FILE__,__LINE__)
            ->writeLog('这里是测试写Log');
        return $this->json(['data'=>$logService]);
    }
}