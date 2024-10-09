<?php
$helper = new Helper();
$fonts = $helper->fonts();
?>
<!-- The Modal -->
<div class="modal fade" id="chartCustomiseModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Graph Customisation</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-fluid mt-3" style="height: 500px;">
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
                                        <a class="nav-link" id="advance-tab" data-bs-toggle="tab" href="#advance" role="tab" aria-controls="exporting" aria-selected="false">Advance</a>
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
                                                                <input type="text" id="titles-subtitle" class="form-control" placeholder="Enter Title" />
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
                                                                <input type="text" id="general-chartwidth" class="form-control" placeholder="Enter Title" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Chart Height</th>
                                                            <td>
                                                                <input type="text" id="general-chartheight" class="form-control" placeholder="Enter Title" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel"
                                            aria-labelledby="v-tabs-messages-tab">
                                            <div class="card mt-3">
                                                <div class="card-header">Appearance Fonts</div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th rowspan="2" class="vcenter" >Font family</th>
                                                            <td>
                                                                <select name="" id="appearanceFontFamily" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="appearanceFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="appearanceFontBold" > Bold &nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" value="italic" id="appearanceFontItalic" > Italic &nbsp;&nbsp;&nbsp;
                                                                <input type="color" id="appearanceFontColor" >
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
                                                            <th rowspan="2" class="vcenter" >Main title style</th>
                                                            <td>
                                                                <select name="" id="appearanceTitleFont" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="appearanceTitleFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="appearanceTitleFontBold"> Bold &nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" value="italic" id="appearanceTitleFontItalic" > Italic &nbsp;&nbsp;&nbsp;
                                                                <input type="color" id="appearanceTitleFontColor" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2" class="vcenter" >Subtitle style</th>
                                                            <td>
                                                                <select name="" id="appearanceSubTitleFont" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="appearanceSubTitleFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="appearanceSubTitleFontBold"> Bold &nbsp;&nbsp;&nbsp;
                                                                <input type="checkbox" value="italic" id="appearanceSubTitleFontItalic" > Italic &nbsp;&nbsp;&nbsp;
                                                                <input type="color" id="appearanceSubTitleFontColor" >
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="card mt-3">
                                                <div class="card-header">Series Colors</div>
                                                <div class="card-body">
                                                    <table class="table" id="addSeriesColor" >
                                                        <tr>
                                                            <th class="vcenter scolorhead" rowspan="3" colspan="2" >Colors</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="color" class="form-control seriesColors" />
                                                            </td>
                                                            <td>
                                                                <i class="fa fa-trash-o rmseriesColor"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="color" class="form-control seriesColors" />
                                                            </td>
                                                            <td>
                                                                <i class="fa fa-trash-o rmseriesColor"></i>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <button class="btn btn-dark btn-sm float-end addMoreSeriesColor">+</button>

                                                </div>
                                            </div>

                                            <div class="card mt-3">
                                                <div class="card-header">Chart Area</div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th>Background color</th>
                                                            <td>
                                                                <input type="color" id="chartAreaBgColor" class="form-control"  />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border width</th>
                                                            <td>
                                                                <input type="number" id="chartAreaBorderWidth" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border corner radius</th>
                                                            <td>
                                                                <input type="number" id="chartAreaBorderRadius" class="form-control" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border color</th>
                                                            <td>
                                                                <input type="color" id="chartAreaBorderColor" class="form-control" />
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
                                                                <input type="color" id="plotAreaBgColor" class="form-control"  />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Background image URL</th>
                                                            <td>
                                                                <input type="text" id="plotAreaBgImage" placeholder="Image URL">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border width</th>
                                                            <td>
                                                                <input type="color" id="plotAreaBorderWidth" class="form-control" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border color</th>
                                                            <td>
                                                                <input type="color" id="plotAreaBorderColor" />
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
                                                                <input type="checkbox" id="AxesInverted" />
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
                                                            <th rowspan="2">Font family</th>
                                                            <td>
                                                                <select name="" id="xAxesFontFamily" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="xAxesFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="xAxesFontBold" > Bold
                                                                <input type="checkbox" value="italic" id="xAxesFontItalic" > Italic
                                                                <input type="color" id="xAxesFontColor" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Text</th>
                                                            <td>
                                                                <input type="text" class="form-control" id="xAxesText" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Type</th>
                                                            <td>
                                                                <select name="" id="xAxesType" class="form-control" >
                                                                    <option value="linear">linear</option>
                                                                    <option value="logarithmic">logarithmic</option>
                                                                    <option value="datetime">datetime</option>
                                                                    <option value="category">category</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Opposite side of chart</th>
                                                            <td>
                                                                <input type="checkbox" id="xAxesOpposite" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Reversed direction</th>
                                                            <td>
                                                                <input type="checkbox" id="xAxesDirection" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <th>Axis labels format</th>
                                                            <td>
                                                                <input type="text" id="xAxesFormat" value="{value}" placeholder="{value}">
                                                            </td>
                                                        </tr> -->
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="card mt-3">
                                                <div class="card-header">Y-Axis</div>
                                                <div class="card-body">
                                                <table class="table">
                                                        <tr>
                                                            <th rowspan="2">Font family</th>
                                                            <td>
                                                                <select name="" id="yAxesFontFamily" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="yAxesFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="yAxesFontBold" > Bold
                                                                <input type="checkbox" value="italic" id="yAxesFontItalic" > Italic
                                                                <input type="color" id="yAxesFontColor" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Text</th>
                                                            <td>
                                                                <input type="text" class="form-control" id="yAxesText" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Type</th>
                                                            <td>
                                                                <select name="" id="yAxesType" class="form-control" >
                                                                    <option value="linear">linear</option>
                                                                    <option value="logarithmic">logarithmic</option>
                                                                    <option value="datetime">datetime</option>
                                                                    <option value="category">category</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Opposite side of chart</th>
                                                            <td>
                                                                <input type="checkbox" id="yAxesOpposite" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Reversed direction</th>
                                                            <td>
                                                                <input type="checkbox" id="yAxesDirection" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <th>Axis labels format</th>
                                                            <td>
                                                                <input type="text" id="xAxesFormat" value="{value}" placeholder="{value}">
                                                            </td>
                                                        </tr> -->
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="value-labels" role="tabpanel"
                                            aria-labelledby="value-labels-tab">
                                            <!-- value-labels -->
                                            <div class="card mt-3">
                                                <div class="card-header">Value Labels</div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th colspan="2" >Enable data labels for all series</th>
                                                            <td>
                                                                <input type="checkbox" id="valuesEnableDataLabels" />
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th rowspan="5">Text style</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Color</th>
                                                            <td>
                                                                <input type="color" value="#fff" id="valuesTextColor" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Font Size</th>
                                                            <td>
                                                                <input type="number"  id="valuesFontSize"  >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Font Weight</th>
                                                            <td>
                                                                <select name="" id="valuesFontWeight">
                                                                    <option value="normal">Normal</option>
                                                                    <option value="bold">Bold</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Text Outline</th>
                                                            <td>
                                                                <input type="text" value="1px 1px contrast" id="valuesOutline" >
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="legend" role="tabpanel"
                                            aria-labelledby="legend-tab">
                                            <!-- legend -->
                                            <div class="card mt-3">
                                                <div class="card-header">General</div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th>Enable legends</th>
                                                            <td>
                                                                <input type="checkbox" id="legendEnabled" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Item layout</th>
                                                            <td>
                                                                <select name="" id="legendLayout">
                                                                    <option value="horizontal">horizontal</option>
                                                                    <option value="vertical">vertical</option>
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
                                                                <select name="" id="legendHrAlignment">
                                                                    <option value="left">left</option>
                                                                    <option value="center">center</option>
                                                                    <option value="right">right</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Horizontal offset</th>
                                                            <td>
                                                                <input type="number" id="legendHrOffset"  />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vertical alignment</th>
                                                            <td>
                                                                <select name="" id="legendVrAlignment">
                                                                    <option value="top">top</option>
                                                                    <option value="middle">middle</option>
                                                                    <option value="bottom">bottom</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vertical offset</th>
                                                            <td>
                                                                <input type="number" id="legendVrOffset" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Float on top of plot area</th>
                                                            <td>
                                                                <input type="checkbox" id="legendFloating">
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
                                                            <th rowspan="2">Text style</th>
                                                            <td>
                                                                <select name="" id="legendAppFont" class="form-control" >
                                                                    <?php 
                                                                        foreach($fonts as $font){
                                                                            echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="legendAppFontSize" class="form-control" >
                                                                    <?php 
                                                                        for($i=2; $i<=34; $i+=2){
                                                                            echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold" id="legendAppFontBold" > Bold
                                                                <input type="checkbox" value="italic" id="legendAppFontItalic" > Italic
                                                                <input type="color" id="legendAppFontColor" >
                                                            </td>
                                                        </tr>

                                                        <!-- <tr>
                                                            <th rowspan="2">Text style hidden</th>
                                                            <td>
                                                                <select name="" id="" class="form-control" >
                                                                    <?php 
                                                                        // foreach($fonts as $font){
                                                                        //     echo '<option value="'.$font.'" >'.$font.'</option>';
                                                                        // }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <select name="" id="legendHiddenFontSize">
                                                                    <?php 
                                                                        // for($i=2; $i<=34; $i+=2){
                                                                        //     echo '<option value="'.$i.'px">'.$i.'</option>';
                                                                        // }
                                                                    ?>
                                                                </select>
                                                                <input type="checkbox" value="bold"> Bold
                                                                <input type="checkbox" value="italic"> Italic
                                                                <input type="color">
                                                            </td>
                                                        </tr> -->

                                                        <tr>
                                                            <th>Background color</th>
                                                            <td>
                                                                <input type="color" value="#fff" id="legendBgColor" class="form-control" >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Border width</th>
                                                            <td>
                                                                <input type="number" value="0" id="legendBorderWidth" class="form-control" >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Border corner radius</th>
                                                            <td>
                                                                <input type="number" name="" value="0" id="legendBorderRadius">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Border color</th>
                                                            <td>
                                                                <input type="color" value="#999999" name="" id="legendBorderColor">
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="tooltip" role="tabpanel"
                                            aria-labelledby="tooltip-tab">
                                            <!-- tooltip -->
                                            <div class="card mt-3">
                                                <div class="card-header">General</div>
                                                <div class="card-body">
                                                    <table class="table">

                                                        <tr>
                                                            <th>Enable tooltip</th>
                                                            <td>
                                                                <input type="checkbox" id="tooltipEnabled">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Shared between series</th>
                                                            <td>
                                                                <input type="checkbox" id="tooltipShared" >
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
                                                                <input type="color" value="#303f9f" id="tooltipBgColor" >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Border width</th>
                                                            <td>
                                                                <input type="number" value="1" id="tooltipBorderWidth" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border corner radius</th>
                                                            <td>
                                                                <input type="number" value="3" id="tooltipBorderRadius">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Border color</th>
                                                            <td>
                                                                <input type="color" value="auto" id="tooltipBorderColor" >
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
                                                                <input type="checkbox" id="exportEnabled" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Exported width</th>
                                                            <td>
                                                                <input type="number" value="150" id="exportWidth" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Scaling factor</th>
                                                            <td>
                                                                <input type="number" value="3" id="exportScalingFactor" >
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="advance" role="tabpanel" aria-labelledby="advance-tab">
                                            <!-- ADVANCE -->
                                            <div class="card mt-3">
                                                <div class="card-header">Exporting</div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tr>
                                                            <th>Chart Type</th>
                                                            <td>
                                                                <select name="" id="advanceChartType" class="form-control">
                                                                    <option value="column">Column</option>
                                                                    <option value="line">Line</option>
                                                                    <option value="spline">Spline</option>
                                                                    <option value="bar">Bar</option>
                                                                    <option value="area">Area</option>

                                                                    <!-- <option value="pie">Pie</option> -->
                                                                </select>
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
                            <div id="customdemo"></div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->

            </div>
        </div>
    </div>