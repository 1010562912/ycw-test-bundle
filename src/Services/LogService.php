<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/15
 * Time: 11:30
 */

namespace Ycw\TestBundle\Services;


/**
 * desc 日志服务 Service
 * Class LogService
 * @package Ycw\TestBundle\Services
 */

class LogService
{

    protected $log;
    protected $config;
    protected $file;
    protected $line;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->config['log_path'] = __DIR__ . '/'.$this->config['log_path'];
    }

    /**
     * Notes: 设置文件路径,文件名和文件的具体行数
     * User: ycw
     * Date: 2019/3/15
     * Time: 11:39
     * @param $file
     * @param $line
     * @return $this
     */
    public function execption_path(string $file,string $line) : LogService
    {
        $this->file = $file;
        $this->line = $line;
        return $this;
    }

    /**
     * Notes:写入日志
     * User: ycw
     * Date: 2019/3/15
     * Time: 11:46
     * @param $log
     * @return $this
     */
    public function writeLog(string $log) : LogService
    {
        if(false == file_exists($this->config['log_path']))
        {
            file_put_contents($this->config['log_path'],'');
        }
        $this->log = "[".date('Y-m-d H:i:s')."] - " .$this->file. ":line " .$this->line. " Exception : " .$log. "\r\n";
        file_put_contents($this->config['log_path'],$this->log,FILE_APPEND);
        return $this;
    }

    /**
     * Notes:读取日志
     * User: ycw
     * Date: 2019/3/15
     * Time: 11:51
     * @return array|bool|false|string
     */
    public function readLog() :?string
    {
        $log = file_get_contents($this->config['log_path']);
        if(!$log){
            return false;
        }
        $log = explode('\r\n',$log);
        $log = implode('<br/>',$log);
        return $log;
    }
}