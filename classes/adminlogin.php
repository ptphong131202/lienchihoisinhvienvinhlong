<?php
$filepath = realpath(dirname(__FILE__));
include($filepath.'/../lib/session.php');
Session::checkLogin();
include($filepath.'/../lib/database.php');
include($filepath.'/../helpers/format.php'); 
?>

<?php 
class adminlogin{
    private $db, $fm;
    
    // function constructor
    public function  __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }
    
    // function login admin
    public function login_admin($adminUser, $adminPass){
        //Kiem tra hop le
        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);
        //Ket noi co so du lieu
        $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);
        
        if(empty($adminUser) || empty($adminPass)) {
            $alert = "Tài khoản hoặc mật khẩu không thể rổng!";
            return $alert;
        }
        else {
            $query = "SELECT * FROM admin WHERE email = '$adminUser' AND pass = '$adminPass'";
            $result = $this->db->select($query);
            
            if($result != false) {
                $value = $result->fetch_assoc();
                
                Session::set('adminlogin',true);
                Session::set('adminId',$value['id']);
                Session::set('adminName',$value['adminName']);
                Session::set('email',$value['email']);
                header('Location:index.php');
            }
            else{
                $alert = "Tài khoản hoặc mật khẩu không đúng!";
                return $alert;
            }
        }
    }
}


?>