<?php include('includes/header.php'); ?>
<?php function base_url()
{
  return "http://localhost/v10-customcharts/";
} ?>
<!-- <script src="<?= base_url() ?>assets/highcharts/highmaps.js"></script> -->
<script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
<script src="<?= base_url() ?>assets/highcharts/exporting.js"></script>
<script src="<?= base_url() ?>assets/highcharts/offline-exporting.js"></script>
<script src="<?= base_url() ?>assets/highcharts/accessibility.js"></script>

<div class="container-fluid mt-3">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>

  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-tabs-home-tab" data-bs-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true">Titles</a>
            <a class="nav-link" id="v-tabs-profile-tab" data-bs-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-tabs-messages-tab" data-bs-toggle="tab" href="#v-tabs-messages" role="tab" aria-controls="v-tabs-messages" aria-selected="false">Messages</a>
          </div>
        </div>

        <div class="col-9">
          <div class="tab-content" id="v-tabs-tabContent">
            <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
              <ul class="list-group">
                <li class="list-group-item active">Main Titles <button type="button" onclick="createCharts()" >Show Changes</button> </li>
                <li class="list-group-item">
                  <span>Chart Title</span>
                  <input type="text" class="float-end" id="title" placeholder="Title" />
                </li>
                <li class="list-group-item">
                  <span>Sub Title</span>
                  <input type="text" class="float-end" id="sub_title" placeholder="Sub Title" />
                </li>
                <li class="list-group-item">
                  <span>X-Axis Title</span>
                  <input type="text" class="float-end" id="x_axis" placeholder="X-Axis" />
                </li>
                <li class="list-group-item">
                  <span>X-Axis -Color </span>
                  <input type="color" class="float-end" id="x_axis_color" value="#ff0000" />
                </li>
                <li class="list-group-item">
                  <span>X-Axis -Font Size </span>
                  <input type="number" class="float-end" id="x_axis_fontSize" placeholder="X-Axis" />
                </li>
                <li class="list-group-item">
                  <span>X-Axis -Font Weight </span>
                  <select class="float-end" id="x_axis_fontWeight">
                    <option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                  </select>
                </li>
                <li class="list-group-item">
                  <span>Y-Axis</span>
                  <input type="text" class="float-end" id="y_axis" placeholder="Y-Axis" />
                </li>
                <li class="list-group-item">
                  <span>Background Color</span>
                  <input type="color" class="float-end" id="backgroundcolor" placeholder="Background Color" />
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloremque minima
              mollitia sapiente illo ut harum fugit explicabo error perspiciatis at cumque nisi eaque
              commodi culpa est sed ad amet.
            </div>
            <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloremque minima
              mollitia sapiente illo ut harum fugit explicabo error perspiciatis at cumque nisi eaque
              commodi culpa est sed ad amet.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div id="demo"></div>
    </div>
  </div>

</div>

<?php include('includes/footer.php'); ?>

<script src="<?= base_url() ?>assets/sscharts.js"></script>

<script type="text/javascript">
  function createCharts()
  {
    let title = $("#title").val(); 
    let sub_title = $("#sub_title").val(); 
    let x_axis = $("#x_axis").val(); 
    let y_axis = $("#y_axis").val(); 
    let backgroundcolor = $("#backgroundcolor").val(); 
    let x_axis_color = $("#x_axis_color").val();
    let x_axis_fontSize = $("#x_axis_fontSize").val();
    let x_axis_fontWeight = $("#x_axis_fontWeight").val();
    if(x_axis_color==""){ x_axis_color = '#fff'; }
    if(x_axis_fontSize==""){ x_axis_fontSize='13'; }
    if(x_axis_fontWeight==""){ x_axis_fontWeight='normal'; }

    var options = {
      chartId:'demo',
      chartType:'column', // column, line, spline, bar, area, pie
      colors:['#507eab'],
      bgColor:backgroundcolor,
      title:title,
      subtitle:sub_title,
      xAxisTitle:x_axis,
      yAxisTitle:y_axis,
      tooltipMsg:'Total',
      dataLabelsEnabled:true,
      legend:false,

      xAxisColor: x_axis_color,
			xAxisFontSize:x_axis_fontSize,
			xAxisFontWeight:x_axis_fontWeight,


      seriesData: [
        { 'name': 'Zone-1 (UP)', 'y': 5, 'color': 'red' },
        { 'name': 'Zone-2 (UP)', 'y': 9 },
        { 'name': 'Zone-3 (UP)', 'y': 7 },
        { 'name': 'Zone-4 (UP)', 'y': 8 },
        { 'name': 'Zone-5 (UP)', 'y': 6 },
        { 'name': 'Zone-6 (UP)', 'y': 5 },
        { 'name': 'Zone-7 (Bihar)', 'y': 3 },
        { 'name': 'Zone-8 (Bihar)', 'y': 9 },
        { 'name': 'Zone-9 (Bihar)', 'y': 1 },
      ],
    };
    console.log(options);
    $(document).sschart(options);
  }

  $(document).ready(function () {
    createCharts();
    //$(document).sschart();
  });
</script>