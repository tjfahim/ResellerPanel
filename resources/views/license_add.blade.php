
@extends('layouts.master')

@section('main_content')
    
<div class="section-admin container-fluid" style="margin-top: 8%;margin-bottom:5%;">
    <div style="font-size: 22px;color:white;margin-bottom:2%">Order License</div>


        <div class="row admin text-center" >
            <div class="col-md-12">
           
                <div class="row text-left" style="">
                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
                        <div class="" style="color: white; background-color: #3F6791; border-top-left-radius: 3px; border-top-right-radius: 3px; font-size: 14px; height: 35px; display: flex; align-items: center; padding-left: 15px;">
                            Order New License
                        </div>
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="height: 300px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
                            <div>
                                <label for="" style="color: white;font-size:13px;margin-top:5px;">Select Software: </label>
                                <select name="" id="" class="form-control" style="color: white; border-radius: 3px; height: 34px;">
                                    <option value="">Cpanel Vps</option>
                                    <option value="">Cpanel</option>
                                    <option value="">Lite Speed</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" style="color: white;font-size:13px;margin-top:5px;">Buy for: </label>
                                <select name="" id="" class="form-control" style="color: white; border-radius: 3px; height: 34px;">
                                    <option value="">1 month -2$</option>
                                    <option value="">2 month -4$</option>
                                    <option value="">3 month -5$</option>
                                </select>
                                
                            </div>
                            <div>
                                <label for="" style="color: white;font-size:13px;margin-top:5px; ">IPv4 </label>
                           
                                <input type="text"  class="form-control" style=" border-radius: 3px; height: 34px;" placeholder="Enter Your Server IPv4 Here">
                            </div>

                            <button style="background-color: #3F6791;color:white;font-size:13px;margin-top:12px; "  class="pd-setting-ed">Order</button>

                            
                
                        </div>
                    </div>
                   
                </div>
    </div>
   
</div>
@endsection