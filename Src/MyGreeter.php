<?php  
namespace Src;

class MyGreeter {  
      
    /**  
     * 根据当前时间返回不同的问候语  
     *  
     * @return string  
     */  
    public function greeting() { 
        // 获取当前小时（24小时制） 
        $currentHour = date('H');
        if ($currentHour >= 6 && $currentHour < 12) {  
            return "Good morning";  
        } elseif ($currentHour >= 12 && $currentHour < 18) {  
            return "Good afternoon";  
        } else {  
            return "Good evening";  
        }  
    }  
      
    // 示例用法  
    public static function demoUsage() {  
        $greeter = new MyGreeter();  
        echo $greeter->greeting();  
    }  
}  
  
//示例使用  
MyGreeter::demoUsage();  
  
?>