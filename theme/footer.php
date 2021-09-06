</div>
<footer class="footer footer-transparent">
   <div class="container">
      <div class="row text-center align-items-center flex-row-reverse">
         <div class="col-lg-auto ml-lg-auto">
            Phát triển bởi
            <a href="https://www.codester.com/codyseller" class="link-secondary">CodySeller</a>.
            &nbsp;|&nbsp;phiên bản 2.2 
         </div>
         <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            Bản quyền © 2021
            <a href="https://www.codester.com/items/25775/google-drive-proxy-player-php-script" class="link-secondary">gdplyr</a>.
            Đã Đăng Ký Bản Quyền.
         </div>
      </div>
   </div>
</footer>
</div>
</div>
<div class="modal modal-blur fade" id="del-confirm" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <div class="modal-title">Bạn có chắc không?</div>
            <div>Bạn có chắc chắn muốn xóa cái này không <span class="ctxt"></span> ?</div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Huỷ bỏ</button>
            <a href="javascript:void(0)" id="del-link" class="btn btn-danger dlo" >Có, xóa</a>
         </div>
      </div>
   </div>
</div>
<script>
   PROOT  = '<?=PROOT?>';
</script>
<!-- Libs JS -->
<script src="<?=getThemeURI()?>/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?=getThemeURI()?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=getThemeURI()?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<!-- Tabler Core -->
<script src="<?=getThemeURI()?>/assets/js/tabler.min.js"></script>
<script src="<?=getThemeURI()?>/assets/js/jquery-ui.min.js"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<script src="<?=getThemeURI()?>/assets/js/custom.js?v=2.2"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> -->
<?php if($this->action == 'dashboard'): ?>
<script>
   // @formatter:off
   document.addEventListener("DOMContentLoaded", function () {
   	window.ApexCharts && (new ApexCharts(document.getElementById('links-status'), {
   		chart: {
   			type: "donut",
   			fontFamily: 'inherit',
   			height: 240,
   			sparkline: {
   				enabled: true
   			},
   			animations: {
   				enabled: false
   			},
   		},
   		fill: {
   			opacity: 1,
   		},
   		series: [<?=implode(',',array_values($this->data['data']['rft']))?>],
   		labels: ["Hoạt động", "Tạm dừng", "Bị hỏng"],
   		grid: {
   			strokeDashArray: 4,
   		},
   		colors: ["#206bc4", "#79a6dc", "#cd201fad"],
   		legend: {
         show: true,
   			position: 'bottom',
   			height: 32,
   			offsetY: 8,
   			markers: {
   				width: 8,
   				height: 8,
   				radius: 100,
   			},
   			itemMargin: {
   				horizontal: 8,
   			},
         
   		},
   		tooltip: {
   			fillSeriesColor: false
   		},
   	})).render();
   });
   // @formatter:on
</script>
<script>
   // @formatter:off
   document.addEventListener("DOMContentLoaded", function () {
   	window.ApexCharts && (new ApexCharts(document.getElementById('servers-usage'), {
   		chart: {
   			type: "donut",
   			fontFamily: 'inherit',
   			height: 240,
   			sparkline: {
   				enabled: true
   			},
   			animations: {
   				enabled: false
   			},
   		},
   		fill: {
   			opacity: 1,
   		},
   		series: [<?=implode(',',array_values($this->data['data']['serL'][0]))?>],
   		labels: ["<?=implode('","',array_values($this->data['data']['serL'][1]))?>"],
   		grid: {
   			strokeDashArray: 4,
   		},
   		legend: {
         show: true,
   			position: 'bottom',
   			height: 32,
   			offsetY: 8,
   			markers: {
   				width: 8,
   				height: 8,
   				radius: 100,
   			},
   			itemMargin: {
   				horizontal: 8,
   			},
         
   		},
   		tooltip: {
   			fillSeriesColor: false
   		},
   	})).render();
   });
   // @formatter:on
</script>
<?php endif; ?>
<script>
   document.body.style.display = "block";
</script>
</body>
</html>