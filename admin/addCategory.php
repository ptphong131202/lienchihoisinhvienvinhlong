<?php 
include('header.php');
include('navi.php');
?>
<?php include '../classes/category.php';?>

<?php 
$cat = new category();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName']; 
    $catDesc = $_POST['catDesc']; 
    $insert_cat = $cat->insert_category($catName, $catDesc); 
}
?>

<head>
<title>Thêm danh mục</title>

</head>
<h2 class="text-center text-primary pt-5">THÊM DANH MỤC</h2>
<div class="container addcategory">

<form action="" method="POST">
<p class="text-danger">
<i>
<?php
if(isset($insert_cat )){
    echo $insert_cat;
}
?>
</i>
</p>
<div class="form-group mt-3">
<label for="name">Tên danh mục:</label>
<input type="text" placeholder="Nhập tên danh mục ... " name="catName">
</div>

<div class="form-group mt-3">
<label for="description">Thông tin danh mục:</label>
<textarea name="catDesc" id="editor" cols="30" rows="10"></textarea>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
.create(document.querySelector('#editor'))
.catch(error => {
    console.error(error);
});
</script>
</div>

<p class="text-center mt-3">
<button type="submit" name="submit" class="btn btn-primary">Thêm </button>
</p>


</form>
</div>
<script>
console.log(document.querySelector(".ck.ck-content"))
</script>

<?php 
include('footer.php')
?>

<!-- 
Đối với tiêu chí này là khó nhất cần phải đạt được các điểm sau đây:
- Tham gia  khóa "Tập huấn cán bộ đoàn - hội chủ chốt".
- Tham gia các cuộc thi ngoại ngữ và các cuộc thi tuyên truyền về ngoại ngữ.
- Tham gia các câu lạc bộ, đội, nhóm về ngoại ngữ trong và ngoài nhà trường.
- Tham gia các cuộc thi Olympic tin học, Olympic tiếng anh.
- Tham gia Hội nghị/Hội thảo, chương trình giao lưu, hợp tác thanh niên, sinh viên trong nước và quốc tế. -->