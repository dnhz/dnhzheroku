<!-- Page title -->
<div class="page-header">
   <div class="row align-items-center">
      <div class="col-auto">
         <ol class="breadcrumb" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a href="<?=PROOT?>/dashboard">Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="<?=PROOT?>/links/all">Liên kết</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Liên kết mới</a></li>
         </ol>
      </div>
   </div>
</div>
<!-- Content here -->
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data" >
   <div class="row">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Thêm liên kết mới</h3>
            </div>
            <div class="card-body">
               <?php $this->displayAlerts(); ?>
               <div class="form-group mb-3 ">
                  <label class="form-label">Tiêu Đề</label>
                  <div>
                     <input type="text" class="form-control"  name="title" placeholder="Nhập tên">
                  </div>
               </div>
               <div class="form-group mb-3 ">
                  <label class="form-label">Liên kết chính*</label>
                  <div>
                     <input type="text" class="form-control" name="main_link" placeholder="Nhập liên kết chính của bạn" required>
                     <small class="form-hint">Các nguồn được hỗ trợ: google drive, google photos, one drive, yadisk, direct </small>
                  </div>
               </div>
               <div class="form-group mb-3 ">
                  <label class="form-label">Liên kết thay thế</label>
                  <input type="text" class="form-control" name="alt_link" placeholder="Nhập liên kết thay thế của bạn">
                  <small class="form-hint">Các nguồn được hỗ trợ: google drive, google photos, one drive, yadisk, direct </small>
               </div>
               <div class="form-group mb-3 ">
                  <label class="form-label">Phụ đề</label>
                  <div class="" id="sub-list">
                     <div class="row row-sm mb-2" id="add-sub-dumy">
                        <div class="col-auto">
                           <select class="form-select" name="sub[1][label]" style="min-width: 175px;">
                              <?php    
                                 $subLables = json_decode($this->config['sublist'], true);
                                 foreach($subLables as $sublbl):
                                 ?>
                              <option value="<?=$sublbl?>"><?=ucwords($sublbl)?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <div class="col">
                           <input type="file" name="sub[1][file]"  placeholder="Tìm kiếm…">
                        </div>
                        <div class="col-auto align-self-center">
                           <a href="javascript:void(0)" class="link-secondary add-sub" title="" data-toggle="tooltip" data-original-title="thêm phụ đề mới" style="vertical-align: middle;">
                              <svg class="icon icon-md" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M10 5.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H6a.5.5 0 010-1h3.5V6a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                 <path fill-rule="evenodd" d="M9.5 10a.5.5 0 01.5-.5h4a.5.5 0 010 1h-3.5V14a.5.5 0 01-1 0v-4z" clip-rule="evenodd"></path>
                              </svg>
                           </a>
                           <a href="javascript:void(0)" class="link-secondary remove-sub d-none" title="" data-toggle="tooltip" data-original-title="tẩy">
                              <svg class="icon " width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"></path>
                                 <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"></path>
                              </svg>
                           </a>
                           <a href="javascript:void(0)" class="link-secondary ml-2 move" title="" data-toggle="tooltip" data-original-title="di chuyển">
                              <svg class="icon icon-sm" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M4 11.5a.5.5 0 01.5.5v3.5H8a.5.5 0 010 1H4a.5.5 0 01-.5-.5v-4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                 <path fill-rule="evenodd" d="M8.854 11.11a.5.5 0 010 .708l-4.5 4.5a.5.5 0 11-.708-.707l4.5-4.5a.5.5 0 01.708 0zm7.464-7.464a.5.5 0 010 .708l-4.5 4.5a.5.5 0 11-.707-.708l4.5-4.5a.5.5 0 01.707 0z" clip-rule="evenodd"></path>
                                 <path fill-rule="evenodd" d="M11.5 4a.5.5 0 01.5-.5h4a.5.5 0 01.5.5v4a.5.5 0 01-1 0V4.5H12a.5.5 0 01-.5-.5zm4.5 7.5a.5.5 0 00-.5.5v3.5H12a.5.5 0 000 1h4a.5.5 0 00.5-.5v-4a.5.5 0 00-.5-.5z" clip-rule="evenodd"></path>
                                 <path fill-rule="evenodd" d="M11.146 11.11a.5.5 0 000 .708l4.5 4.5a.5.5 0 00.708-.707l-4.5-4.5a.5.5 0 00-.708 0zM3.682 3.646a.5.5 0 000 .708l4.5 4.5a.5.5 0 10.707-.708l-4.5-4.5a.5.5 0 00-.707 0z" clip-rule="evenodd"></path>
                                 <path fill-rule="evenodd" d="M8.5 4a.5.5 0 00-.5-.5H4a.5.5 0 00-.5.5v4a.5.5 0 001 0V4.5H8a.5.5 0 00.5-.5z" clip-rule="evenodd"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <small class="form-hint">Các định dạng được hỗ trợ : .srt, .vtt, .dfxp, .ttml, .xml</small>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body">
               <div class="form-group mb-3 ">
                  <label class="form-label">Xem trước hình ảnh</label>
                  <div>
                     <input type="file" name="preview_image" >
                  </div>
               </div>
               <div class="form-group mb-3 ">
                  <label class="form-label">Slug tùy chỉnh</label>
                  <div>
                     <input type="text" class="form-control" name="slug"  placeholder="Nhập slug video tùy chỉnh" >
                  </div>
               </div>
               <div class="form-group mb-3 ">
                  <label class="form-label">Trạng thái liên kết</label>
                  <select class="form-select" name="status">
                     <option value="active">Hoạt động</option>
                     <option value="inactive">Bản nháp</option>
                  </select>
               </div>
               <div class="form-footer">
                  <button type="submit" class="btn btn-block btn-primary">Lưu liên kết</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>