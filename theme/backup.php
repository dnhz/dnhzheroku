<!-- Page title -->
<div class="page-header">
<div class="row align-items-center">
    <div class="col-auto">
    <ol class="breadcrumb" aria-label="breadcrumbs">
                          <li class="breadcrumb-item"><a href="<?=PROOT?>/dashboard">Bảng điều khiển</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Sao lưu</a></li>
                        </ol>
    </div>
</div>
</div>
<!-- Content here -->


<div class="row">




<div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sao lưu cơ sở dữ liệu</h3>
            </div>
            <div class="card-body">

            <?=$this->displayAlerts()?>

            <div class="row align-items-center">
    <div class="col-auto">
    <p> <b>Sao lưu cuối cùng</b> : <br> <?=Helper::formatDT($this->config['last_backup'])?> </p>
    </div>


    <div class="col-auto ml-auto d-print-none">
                <!-- <span class="d-none d-sm-inline">
                  <a href="#" class="btn btn-secondary">
                    Xem mới
                  </a>
                </span> -->
                <a href="<?=PROOT?>/settings/backup?i=1" class="btn btn-primary ml-3 d-none d-sm-inline-block">
                 
                  Tìm sự trợ giúp
                </a>
               
              </div>
</div>

            </div>
        </div>
    </div>






</div>