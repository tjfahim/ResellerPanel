
@extends('layouts.master')

@section('main_content')
    
<div class="section-admin container-fluid" style="margin-top: 8%;margin-bottom:3%;">
    <div class="nightmoodtextcolor" style="font-size: 22px;margin-bottom:2%">Licenses</div>

    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <div class="" style="text-align: right; margin-bottom:15px">
                            <a href="#" style="display: inline-block; vertical-align: middle;">Search: </a>
                            <input type="text" style="display: inline-block; vertical-align: middle;">
                        </div>
                        
                        
                        <table>
                            <tr>
                                <th>    <input type="checkbox" id="selectAll">
                                </th>
                                <th>ID</th>
                                <th>IP</th>
                                <th>Software</th>
                                <th>Status</th>
                                <th>Expiry</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>    <input type="checkbox" id="selectAll">
                                </td>
                                <td>1</td>
                                <td>
                                    182.23.23.24
                                </td>
                                <td>CPanel</td>
                                <td>Active</td>
                                <td>22 March 2024</td>
                                <td>
                                    <button data-toggle="tooltip"  class="pd-setting-ed">View</button>
                                </td>
                            </tr>
                           
                              
                            <tr>
                                <td>    <input type="checkbox" id="selectAll">
                                </td>
                                <td>2</td>
                                <td>
                                    182.23.13.24
                                </td>
                                <td>CPanel VPS</td>
                                <td>PAUSED</td>
                                <td>28 March 2024</td>
                                <td>
                                    <button data-toggle="tooltip"  class="pd-setting-ed">View</button>
                                </td>
                            </tr>
                           
                              
                            <tr>
                                <td>    <input type="checkbox" id="selectAll">
                                </td>
                                <td>3</td>
                                <td>
                                    182.23.23.74
                                </td>
                                <td>Lite Speed</td>
                                <td>Active</td>
                                <td>05 March 2024</td>
                                <td>
                                    <button data-toggle="tooltip"  class="pd-setting-ed">View</button>
                                </td>
                            </tr>
                           
                              
                            <tr>
                                <td>    <input type="checkbox" id="selectAll">
                                </td>
                                <td>4</td>
                                <td>
                                    182.23.23.04
                                </td>
                                <td>CPanel</td>
                                <td>Active</td>
                                <td>22 March 2024</td>
                                <td>
                                    <button data-toggle="tooltip"  class="pd-setting-ed">View</button>
                                </td>
                            </tr>
                           
                           
                           
                              
                      
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection