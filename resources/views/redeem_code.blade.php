
@extends('layouts.master')

@section('main_content')
    
<div class="section-admin container-fluid" style="margin-top: 8%;color:white;margin-bottom:10%;margin-bottom:15%;">
    <div class="nightmoodtextcolor" style="font-size: 22px;margin-bottom:2%">  Redeem Code</div>


    <div class="row admin text-center" >
        <div class="col-md-12">
       
            <div class="row text-left" style="margin-bottom:%;">
                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
              
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="height: 60px; border-radius: 3px; margin-bottom: 20px; display: flex;">
                        <div style="height: 45px; width: 45px; border-radius: 3px; background-color: #28A745; display: flex; justify-content: center; align-items: center; margin-top: -12px; margin-left: -10px;">
                            <i class="fas fa-dollar-sign" style="font-size: 30px; color: white;"></i>
                        </div>
                        <div style="margin-left: 10px;;
                        color: white;">
                            <div style=" margin-top: -14%">Current Balance</div>
                            <div style=" margin-top: 10%"><b> $13045</b></div>
                        </div>
                    </div>
                    
                </div>
               
            </div>

        <div class="row admin text-center" >
            <div class="col-md-12">
           
                <div class="row text-left" style="">
                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
                        <div class="" style="color: white; background-color: #3F6791; border-top-left-radius: 3px; border-top-right-radius: 3px; font-size: 14px; height: 35px; display: flex; align-items: center; padding-left: 15px;">
                            Redeem Code
                        </div>
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="height: 160px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
                            <div>
                                <label for="" style="color: white;font-size:13px;margin-top:5px;">Redeem Code </label>
                                <input type="text"  class="form-control" style=" border-radius: 3px; height: 34px;" placeholder="Enter Redeem Code Here">

                            </div>
                            
                     

                            <button style="background-color: #3F6791;font-size:13px;margin-top:12px; color: white;"  class="pd-setting-ed">Redeem</button>

                            
                
                        </div>
                    </div>
                   
                </div>
    </div>
   
</div>
@endsection