<?php 
include('header.php');
include('navi.php');
?>
<?php include '../classes/category.php';?>
<?php 
$cat = new category(); 
if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    $delcat = $cat->del_category($id);
}
?>

<head>
<title>Quản lý Danh mục</title>
</head>

<div class="container manage-essay">
<h2 class="text-center text-primary pt-5">DANH SÁCH DANH MỤC</h2>
<div class="essayinput">
<div class="form-input form-input-search">
<input type="text" placeholder="Nhập để tìm kiếm">
<i class="fas fa-search"></i>
</div>
</div>
<div class="listEssay">
<div class="listEssay-content">
<?php
if(isset($delcat)) {
    echo $delcat;
}
?>
<?php
$show_cate = $cat->show_category();
if($show_cate) {
    $i = 0;
    while($result = $show_cate->fetch_assoc()){
        $i++;	
        ?>
        <div class="listCategory">
        <div class="listCategory-left">
        <?php echo $result['catname'] ?>
        </div>
        <div class="listCategory-right">
        <a href=""><button class="btn btn-warning">Chỉnh Sửa</button></a>
        <a href="?delid=<?php echo $result['id'] ?> " onclick="return confirm('Are you sure!');"><button
        class="btn btn-danger">Xóa</button></a>
        </div>
        
        </div>
        
        <?php }}?>
        </div>
        </div>
        </div>
        
        
        <?php 
        include('footer.php')
        ?>