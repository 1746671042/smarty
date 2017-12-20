<?php
//require './mysqlDB.class.php';
class common{
//    @param int $code 错误码
//    @param string $message 提示信息
//    @param string $返回json处理结果
//    @param array $data 返回数据   
    protected  $link;
    protected  $template;
    public function __construct() {
       $this->link = mysqlDB::getIntance("wzry");
       $this->template = new template();
   }
    public function  json($code,$message,$data){
        $code = (int)$code;
        $message = (string)$message;
        $data =(array)$data;
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "data"=>$data
        );
        return json_encode($result);
    }
    /**
     * @param string $name:接收数据
     * @param string $value 默认值
     * @return 返回值
     */
    //封装获取值get
    public function  get($name,$value=""){
        return isset($_GET[$name])?$_GET[$name]:$value;
    }
    /**post
     * @param string $name:接收数据
     * @param string $value 默认值
     * @return 返回值
     */
    public function  post($name,$value=""){
        return isset($_POST[$name])?$_POST[$name]:$value;
    }
}
