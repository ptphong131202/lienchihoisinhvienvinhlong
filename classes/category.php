<?php
$filepath = realpath(dirname(__FILE__));
include($filepath.'/../lib/database.php');
include($filepath.'/../helpers/format.php'); 
?>

<?php
class category 
{
    private $db;
    private $fm;
    
    // function constructor
    public function  __construct(){
        $this->db = new Database();
        $this->fm = new Format();
    }
    
    
    //Thêm danh mục
    public function insert_category($catName, $catDesc)
    {
        $catName = $this->fm->validation($catName);
        $catDesc = $this->fm->validation($catDesc);
        $catName = mysqli_real_escape_string($this->db->link,$catName);
        $catDesc = mysqli_real_escape_string($this->db->link,$catDesc);
        
        
        if(empty($catName) ) {
            $alert = "<span class='error'>Tên danh mục không được rổng!</span>";
            return $alert;
        }
        else {
            $query = "INSERT INTO category(catname, catdesc) VALUES('$catName', '$catDesc')";
            $result = $this->db->insert($query);
            if($result) {
                $alert = "<span class='success'>Thêm danh mục thành công!</span>";
                return $alert;
            }
            else{
                $alert = "<span class='error'>Thêm danh mục không thành công!</span>";
                return $alert;
            }
        }
    }
    
    // Hiển thị danh mục
    public function show_category(){
        $query = "SELECT * FROM category ";
        $result = $this->db->select($query);
        return $result;
    }
    
    // Xóa loại sản phẩm
    public function del_category($id) {
        $query = " DELETE FROM category where id = '$id'";
        $result = $this->db->delete($query);
        if($result) {
            $alert = "<span class='success'>Xóa danh mục thành công!</span>";
            return $alert;
        }
        else{
            $alert = "<span class='error'>Xóa danh mục không thành công!</span>";
            return $alert;
        }
    }
}
?>