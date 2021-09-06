<!-- Page title -->
<div class="page-header">
   <div class="row align-items-center">
      <div class="col-auto">
         <ol class="breadcrumb" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a href="<?=PROOT?>/dashboard">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Hồ sơ</a></li>
         </ol>
      </div>
   </div>
</div>
<!-- Content here -->
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Hồ sơ</h3>
         </div>
         <div class="card-body">
            <?=$this->displayAlerts()?>
            <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data" >
               <input type="text" id="server-id" class="form-control" name="id" hidden placeholder="">
               <div class="form-group mb-3">
                  <label class="form-label">Tên tài khoản</label>
                  <input type="text"  class="form-control"  name="username" value="<?=$user['username']?>" placeholder="Điền tên đăng nhập">
               </div>
               <div class="form-group mb-3">
                  <label class="form-label">Mật khẩu mới</label>
                  <input type="password"  class="form-control" name="password" placeholder="Nhập mật khẩu mới">
               </div>
               <div class="form-group mb-3">
                  <label class="form-label">Xác nhận mật khẩu</label>
                  <input type="password"  class="form-control" name="confirm_passsword" placeholder="Xác nhận mật khẩu mới">
               </div>
               <div class="form-group mb-3">
                  <label class="form-label">Ảnh hồ sơ cá nhân</label>
                  <input type="file"  class="form-control" name="image">
                  <input type="text" name="image" value="<?=$user['img']?>" hidden >
                  <?php if(!empty($user['img'])): ?>
                  <img src="<?=PROOT?>/uploads/<?=$user['img']?>" height="50" alt="profile-image">
                  <?php endif; ?>
               </div>
               <div class="form-footer">
                  <button type="submit" class="btn btn-primary btn-block">Lưu</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>