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

<style>
    .tab-content{
        max-height: 450px;
        overflow: auto;
    }
    #demo{
        border: 1px solid lightblue;
        border-radius: 5px;
    }
    .card-header{
        background-color: #212529;
        color: white;
        font-weight: bold;
    }
    .nav-tabs .nav-link.active {
        background-color: #212529;
        color: white;
        font-weight: bold;
    }
</style>


<div class="container-fluid mt-3">
  <h3>Create Charts</h3>
  <p>This example adds a dropdown menu in the navbar.</p>

  <div class="row">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-tabs " id="v-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-tabs-home-tab" data-bs-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true">Titles</a>
            <a class="nav-link" id="v-tabs-profile-tab" data-bs-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false">Generals</a>
            <a class="nav-link" id="v-tabs-messages-tab" data-bs-toggle="tab" href="#v-tabs-messages" role="tab" aria-controls="v-tabs-messages" aria-selected="false">Appearance</a>
            <a class="nav-link" id="axes-tab" data-bs-toggle="tab" href="#axes" role="tab" aria-controls="axes" aria-selected="false">Axes</a>
            <a class="nav-link" id="value-labels-tab" data-bs-toggle="tab" href="#value-labels" role="tab" aria-controls="value-labels" aria-selected="false">Value Labels</a>
            <a class="nav-link" id="legend-tab" data-bs-toggle="tab" href="#legend" role="tab" aria-controls="legend" aria-selected="false">Legend</a>
            <a class="nav-link" id="tooltip-tab" data-bs-toggle="tab" href="#tooltip" role="tab" aria-controls="tooltip" aria-selected="false">Tooltip</a>
            <a class="nav-link" id="exporting-tab" data-bs-toggle="tab" href="#exporting" role="tab" aria-controls="exporting" aria-selected="false">Exporting</a>
          </div>
        </div>

        <div class="col-9">
          <div class="tab-content" id="v-tabs-tabContent">
            <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
                
                <div class="card">
                    <div class="card-header">Main Title</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <td>
                                    <input type="text" class="form-control" id="titles-maintitle" placeholder="Enter Title" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Sub-Title</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Sub Title</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                <div class="card mt-3">
                    <div class="card-header">Generals</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Chart Width</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <th>Chart Height</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
                <div class="card mt-3">
                    <div class="card-header">Appearance Fonts</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2" >Font family</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Title Style</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2" >Main title style</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2" >Subtitle style</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Series Colors</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Chart Area</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Background color</th>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <th>Border width</th>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <th>Border corner radius</th>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <th>Border color</th>
                                <td>
                                    <input type="color" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Plot Area</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Background color</th>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <th>Border width</th>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                            <tr>
                                <th>Border color</th>
                                <td>
                                    <input type="color" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="axes" role="tabpanel" aria-labelledby="axes-tab">
            <!-- axes -->
                <div class="card mt-3">
                    <div class="card-header">Axes Setup</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Inverted axes</th>
                                <td>
                                    <input type="color" class="form-control" placeholder="Enter Title" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">X-Axis</div>
                    <div class="card-body">
                    <table class="table">
                            <tr>
                                <th rowspan="2" >Font family</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                    <input type="color">
                                </td>
                            </tr>
                            <tr>
                                <th>Text</th>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">linear</option>
                                        <option value="">logarithmic</option>
                                        <option value="">datetime</option>
                                        <option value="">category</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Opposite side of chart</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>
                            <tr>
                                <th>Reversed direction</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>
                            <tr>
                                <th>Axis labels format</th>
                                <td>
                                    <input type="text" value="{value}" placeholder="{value}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Y-Axis</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2" >Font family</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                    <input type="color">
                                </td>
                            </tr>
                            <tr>
                                <th>Text</th>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">linear</option>
                                        <option value="">logarithmic</option>
                                        <option value="">datetime</option>
                                        <option value="">category</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Opposite side of chart</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>
                            <tr>
                                <th>Reversed direction</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>
                            <tr>
                                <th>Axis labels format</th>
                                <td>
                                    <input type="text" value="{value}" placeholder="{value}">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="value-labels" role="tabpanel" aria-labelledby="value-labels-tab">
            <!-- value-labels -->
                <div class="card mt-3">
                    <div class="card-header">Value Labels</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Enable data labels for all series</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>

                            <tr>
                                <th rowspan="5">Text style</th>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>
                                    <input type="text" value="contrast">
                                </td>
                            </tr>
                            <tr>
                                <th>Font Size</th>
                                <td>
                                    <input type="text" value="11px">
                                </td>
                            </tr>
                            <tr>
                                <th>Font Weight</th>
                                <td>
                                    <input type="text" value="bold">
                                </td>
                            </tr>
                            <tr>
                                <th>Text Outline</th>
                                <td>
                                    <input type="text" value="1px 1px contrast">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="legend" role="tabpanel" aria-labelledby="legend-tab">
            <!-- legend -->
                <div class="card mt-3">
                    <div class="card-header">General</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Enable legends</th>
                                <td>
                                    <input type="checkbox" />
                                </td>
                            </tr>
                            <tr>
                                <th>Item layout</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">horizontal</option>
                                        <option value="">vertical</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Placement</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Horizontal alignment</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">left</option>
                                        <option value="">center</option>
                                        <option value="">right</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Horizontal offset</th>
                                <td>
                                    <input type="number" />
                                </td>
                            </tr>
                            <tr>
                                <th>Vertical alignment</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">top</option>
                                        <option value="">middle</option>
                                        <option value="">bottom</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Vertical offset</th>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <th>Float on top of plot area</th>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Appearance</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2" >Text style</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                    <input type="color">
                                </td>
                            </tr>

                            <tr>
                                <th rowspan="2" >Text style hidden</th>
                                <td>
                                    <select name="" id="">
                                        <option value="">Courier</option>
                                        <option value="">Arial</option>
                                        <option value="">Verdana</option>
                                        <option value="">Georgia</option>
                                        <option value="">Palatino Linotype</option>
                                        <option value="">Times New Roman</option>
                                        <option value="">Comic Sans MS</option>
                                        <option value="">Impact</option>
                                        <option value="">Lucida Sans Unicode</option>
                                        <option value="">Tahoma</option>
                                        <option value="">Lucida Console</option>
                                        <option value="">Courier New</option>
                                        <option value="">Monaco</option>
                                        <option value="">Monospace</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="" id="">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">6</option>
                                    </select>
                                    <input type="checkbox" value="bold"> Bold
                                    <input type="checkbox" value="italic"> Italic
                                    <input type="color">
                                </td>
                            </tr>

                            <tr>
                                <th>Background color</th>
                                <td>
                                    <input type="text" value="auto">
                                </td>
                            </tr>

                            <tr>
                                <th>Border width</th>
                                <td>
                                    <input type="number" value="0">
                                </td>
                            </tr>

                            <tr>
                                <th>Border corner radius</th>
                                <td>
                                    <input type="number" name="" value="0" id="">
                                </td>
                            </tr>

                            <tr>
                                <th>Border color</th>
                                <td>
                                    <input type="text" value="#999999" name="" id="">
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>


            </div>

            <div class="tab-pane fade" id="tooltip" role="tabpanel" aria-labelledby="tooltip-tab">
            <!-- tooltip -->
                <div class="card mt-3">
                    <div class="card-header">General</div>
                    <div class="card-body">
                        <table class="table">
                            
                            <tr>
                                <th>Enable tooltip</th>
                                <td>
                                    <input type="checkbox" >
                                </td>
                            </tr>

                            <tr>
                                <th>Shared between series</th>
                                <td>
                                    <input type="checkbox" >
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="card mt-3">
                    <div class="card-header">Color and Border</div>
                    <div class="card-body">
                        <table class="table">
                            
                            <tr>
                                <th>Background color</th>
                                <td>
                                    <input type="color" value="#303f9f" >
                                </td>
                            </tr>

                            <tr>
                                <th>Border width</th>
                                <td>
                                    <input type="number" value="1" >
                                </td>
                            </tr>
                            <tr>
                                <th>Border corner radius</th>
                                <td>
                                    <input type="number" value="3" >
                                </td>
                            </tr>
                            <tr>
                                <th>Border color</th>
                                <td>
                                    <input type="text" value="auto">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="exporting" role="tabpanel" aria-labelledby="exporting-tab">
            <!-- exporting -->
                <div class="card mt-3">
                    <div class="card-header">Exporting</div>
                    <div class="card-body">
                        <table class="table">
                            
                            <tr>
                                <th>Enable exporting</th>
                                <td>
                                    <input type="checkbox" >
                                </td>
                            </tr>

                            <tr>
                                <th>Exported width</th>
                                <td>
                                    <input type="number" value="150" >
                                </td>
                            </tr>
                            <tr>
                                <th>Scaling factor</th>
                                <td>
                                    <input type="number" value="3" >
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div id="demo"></div>
    </div>
  </div>

</div>

<?php include('includes/footer.php'); ?>

<script src="<?= base_url() ?>assets/sscharts-v3.js"></script>
<script>
// $(document).ready(function () {
//     let chartOptions = {};
//     let ss = {
//             "title": {
//                 "text": "My Chart"
//             },
//             "subtitle": {
//                 "text": "My Untitled Chart"
//             },
//             "exporting": {},
//             "yAxis": {
//                 "title": {}
//             },
//             "series": []
//     };
    

//     chartOptions['title'] = 'titles';
//     console.log(chartOptions);


    
//     createCharts('demo', ss);

// });
</script>