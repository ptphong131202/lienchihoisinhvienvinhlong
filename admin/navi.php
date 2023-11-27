<div class="navigration open-navi navigration1">
<div class="navi-left">
<li class="home" title="Trang chủ"><a href="./index.php"><i class="fas fa-house"></i></a></li>
<li class="navi-left-item ">Quản lý danh mục

<ul class="navi-left-item-list">
<li class="navi-left-item-list-item">
<a class="navi-left-item-list-item-link" href="addCategory.php">Thêm Danh mục</a>
</li>
<li class="navi-left-item-list-item">
<a class="navi-left-item-list-item-link" href="listCategory.php">Quản lý Danh mục</a>
</li>
</ul>

</li>
<li class="navi-left-item">Quản lý bài viết
<ul class="navi-left-item-list">
<li class="navi-left-item-list-item"><a class="navi-left-item-list-item-link" href="">Thêm bài viết</a>
</li>
<li class="navi-left-item-list-item"><a class="navi-left-item-list-item-link" href="listEssay.php">Quản
lý bài
viết</a>
</li>
</ul>

</li>
<li class="navi-left-item">Quản lý bình luận
<ul class="navi-left-item-list">
</li>
<li class="navi-left-item-list-item"><a class="navi-left-item-list-item-link" href="">Quản lý bình luận</a>
</li>
</ul>
</li>
</div>
<div class="navi-right">
<div class="navi-right-left">
<div class="name">Liên chi hội sinh viên Vĩnh Long</div>
<?php
if(isset($_GET['action']) && $_GET['action'] == 'logout') { //Tồn tại và kiểm tra giá trị
    Session::destroy();
}
?>
<div class="logout">
<a class="text-decoration-none" href="?action=logout"><i>Đăng xuất</i></a>
</div>
</div>
<div class="navi-right-right">
<img src="../public/img/logo.png" width="50" alt="">
</div>
</div>

</div>


<div class="navigration navigration2 open-navi2">
<div class="navi-left">
<li class="home home-mobile" onclick="opennavi()"><i class="fas fa-house"></i></li>
<ul class="navigration2-list navigration2-list-home ">
<li class="naviclose"><span onclick="closenavi()">x</span></li>
<li class="navi-left-item ">Quản lý danh mục
<ul class="navigration2-list-item">
<li><a href="addCategory.php">Thêm danh mục</a></li>
<li><a href="listCategory.php">Quản lý danh mục</a></li>
</ul>
</li>
<li class="navi-left-item">Quản lý bài viết
<ul class="navigration2-list-item">
<li><a href="addEssay.php">Thêm bài viết</a></li>
<li><a href="listEssay.php">Quản lý bài viết</a></li>
</ul>
</li>
<li class="navi-left-item">Quản lý bình luận
<ul class="navigration2-list-item">
<li><a href="">Thêm Slider</a></li>
<li><a href="">Quản lý Slider</a></li>
</ul>
</li>
</ul>
</div>
<div class="navi-right">
<div class="navi-right-left">
<div class="name">Liên chi hội sinh viên Vĩnh Long</div>
<?php
if(isset($_GET['action']) && $_GET['action'] == 'logout') { //Tồn tại và kiểm tra giá trị
    Session::destroy();
}
?>
<div class="logout">
<a class="text-decoration-none" href="?action=logout"><i>Đăng xuất</i></a>
</div>
</div>
<div class="navi-right-right">
<img src="../public/img/logo.png" width="50" alt="">
</div>
</div>
<script>
function opennavi() {
    document.querySelector(".navigration2-list-home").classList.add("navigration2-list-home-open")
}

function closenavi() {
    document.querySelector(".navigration2-list-home").classList.remove("navigration2-list-home-open")
}
</script>

</div>



<div class="pading-navi"></div>