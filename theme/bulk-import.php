<!-- Page title -->
<div class="page-header">
<div class="row align-items-center">
    <div class="col-auto">
    <ol class="breadcrumb" aria-label="breadcrumbs">
                          <li class="breadcrumb-item"><a href="<?=PROOT?>/dashboard">Bảng điều khiển</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Nhập với số lượng lớn</a></li>
                        </ol>
    </div>
</div>
</div>
<!-- Content here -->





        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nhập với số lượng lớn</h3>
            </div>
            <div class="card-body">

            <?=$this->displayAlerts()?>

                    <form >
                    <input type="text" id="server-id" class="form-control" name="id" hidden placeholder="">
                        <div class="form-group mb-3">
                            <textarea class="form-control" id="link-list"  placeholder="https://drive.google.com/file/d/1o6p1s6Gl971k1enen3XnyDV2G6vYwhHc/view" rows="15"></textarea>                       
                             </div>

                      
<small>*Nhập liên kết từng dòng</small>   <br>
<small>*Không có giới hạn ở đây</small>
                        <div class="form-footer text-right">
                        <button type="reset" class="btn btn-secondary  ">Cài lại</button>

          <button type="button" class="btn btn-primary ml-2" id="import-link">Nhập</button>
        </div>
                    
                    
                    </form>


            </div>
        </div>




<div class="row df d-none ">


<div class="col-md-9">
        <div class="card">
           
            <div class="card-body">

            <div class="mb-3 text-right">
                 <a href="javascript:void(0)" class="text-danger " id="clear-logs">Xóa các bản ghi</a>                   
            </div>

                                
            <ul id="mi-response" class="list-group-flush" style="    list-style-type: decimal-leading-zero;">



            
            
            </li>

                     </ul> 

            </div>
        </div>
    </div>





<div class="col-md-3">
        <div class="card">
           
            <div class="card-body">

            <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <b>Tổng số liên kết : <span class="float-right t-links">0</span></b> </li>
                        <li class="list-group-item text-warning"> <b>Đang chờ xử lý : <span class="float-right p-links">0</span> </b> </li>
                        <li class="list-group-item text-success"> <b>Thành công : <span class="float-right s-links">0</span></b> </li>
                        <li class="list-group-item text-danger"> <b>Thất bại : <span class="float-right f-links">0</span></b> </li>
                     </ul>


            </div>
        </div>
    </div>









</div>
