</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?php echo ASSETS; ?>vendor/global/global.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo ASSETS; ?>js/custom.min.js"></script>
<script src="<?php echo ASSETS; ?>js/deznav-init.js"></script>

<!-- Counter Up -->
<script src="<?php echo ASSETS; ?>vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Apex Chart -->
<script src="<?php echo ASSETS; ?>vendor/apexchart/apexchart.js"></script>

<!-- Chart piety plugin files -->
<script src="<?php echo ASSETS; ?>vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="<?php echo ASSETS; ?>js/dashboard/dashboard-1.js"></script>

<!-- Datatable -->
<script src="<?php echo ASSETS; ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
<script>
	(function($) {

		var table = $('#example5').DataTable({
			searching: true,
			paging: true,
			select: true,
			info: true,
			lengthChange: true

		});
		$('#example tbody').on('click', 'tr', function() {
			var data = table.row(this).data();

		});

	})(jQuery);
</script>

<script src="<?php echo ASSETS; ?>vendor/jqueryui/js/jquery-ui.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/moment/moment.min.js"></script>

<script src="<?php echo ASSETS; ?>vendor/fullcalendar/js/fullcalendar.min.js"></script>
<script src="<?php echo ASSETS; ?>js/plugins-init/fullcalendar-init.js"></script>

<script src="<?php echo ASSETS; ?>vendor/flot/jquery.flot.js"></script>
<script src="<?php echo ASSETS; ?>vendor/flot/jquery.flot.pie.js"></script>
<script src="<?php echo ASSETS; ?>vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo ASSETS; ?>vendor/flot-spline/jquery.flot.spline.min.js"></script>
<script src="<?php echo ASSETS; ?>js/plugins-init/flot-init.js"></script>


<!-- Chart Morris plugin files -->
<script src="<?php echo ASSETS; ?>vendor/raphael/raphael.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/morris/morris.min.js"></script>
<script src="<?php echo ASSETS; ?>js/plugins-init/morris-init.js"></script>


<!-- Chart ChartJS plugin files -->
<script src="<?php echo ASSETS; ?>vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo ASSETS; ?>js/plugins-init/chartjs-init.js"></script>

<!-- Chart Chartist plugin files -->
<script src="<?php echo ASSETS; ?>vendor/chartist/js/chartist.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo ASSETS; ?>js/plugins-init/chartist-init.js"></script>


<!-- Chart sparkline plugin files -->
<script src="<?php echo ASSETS; ?>vendor/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo ASSETS; ?>js/plugins-init/sparkline-init.js"></script>


<!-- Svganimation scripts -->
<script src="<?php echo ASSETS; ?>vendor/svganimation/vivus.min.js"></script>
<script src="<?php echo ASSETS; ?>vendor/svganimation/svg.animation.js"></script>

<!-- Chart piety plugin files -->
<script src="<?php echo ASSETS; ?>vendor/peity/jquery.peity.min.js"></script>


<script src="<?php echo ASSETS; ?>js/plugins-init/piety-init.js"></script>
