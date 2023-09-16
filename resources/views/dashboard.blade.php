
@extends('layouts.master')

@section('main_content')
    
<div class="section-admin container-fluid" style="margin-top: 8%;margin-bottom:3%;">
    <div style="font-size: 22px;color:white;margin-bottom:2%">Dashboard</div>

    <div class="row admin text-center" >
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="background-color: #17A2B8 ;border-top-left-radius: 3px;border-top-right-radius: 3px;" >
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <h4 class="text-left text-uppercase"><b>22</b></h4>

                                <label class="label" style="margin-left: -5px;font-weight:400;font-size:11px">Orders</label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin"><i class="icon nalika-shopping-cart icon-wrap" style="font-size: 50px"></i></h2>
                            </div>
                        </div>

                    </div>
                    <div class="text-center" style="color: white;background-color: #1591A5;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;font-size:11px;">More info <i class="fas fa-arrow-alt-circle-right" style="font-size:10px"></i></div>
                </div>
              
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="background-color: #28A745 ;border-top-left-radius: 3px;border-top-right-radius: 3px;" >
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <h4 class="text-left text-uppercase"><b>1344342$</b></h4>

                                <label class="label" style="margin-left: -5px;font-weight:400;font-size:11px">Wallet Balance</label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin"><i class="fas fa-dollar-sign" style="font-size: 50px"></i></h2>
                            </div>
                        </div>

                    </div>
                    <div class="text-center" style="color: white;background-color: #24963E;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;font-size:11px">More info <i class="fas fa-arrow-alt-circle-right" style="font-size:10px"></i></div>
                </div>
              
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="background-color: #E5AD06 ;border-top-left-radius: 3px;border-top-right-radius: 3px;" >
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <h4 class="text-left text-uppercase"><b>1</b></h4>

                                <label class="label" style="margin-left: -5px;font-weight:400;font-size:11px">Expiring Licenses in 7 Days</label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin"><i class="	fas fa-clock" style="font-size: 50px"></i></h2>
                            </div>
                        </div>

                    </div>
                    <div class="text-center" style="color: white;background-color: #FFC107;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;font-size:11px">More info <i class="fas fa-arrow-alt-circle-right
                        " style="font-size:10px"></i></div>
                </div>
              
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="background-color: #DC3545 ;border-top-left-radius: 3px;border-top-right-radius: 3px;" >
                        <div class="row vertical-center-box vertical-center-box-tablet">
                            <div class="col-xs-3 mar-bot-15 text-left">
                                <h4 class="text-left text-uppercase"><b>27</b></h4>

                                <label class="label" style="margin-left: -5px;font-weight:400;font-size:11px">Expired Licenses</label>
                            </div>
                            <div class="col-xs-9 cus-gh-hd-pro">
                                <h2 class="text-right no-margin"><i class="fas fa-times-circle" style="font-size: 50px"></i></h2>
                            </div>
                        </div>

                    </div>
                    <div class="text-center" style="color: white;background-color: #C6303E;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;font-size:11px">More info <i class="fas fa-arrow-alt-circle-right" style="font-size:10px"></i></div>
                </div>
         
            </div>
            <div class="row text-left" style="margin-top: 3%">
                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
                    <div class="" style="color: white; background-color: #007BFF; border-top-left-radius: 3px; border-top-right-radius: 3px; font-size: 14px; height: 35px; display: flex; align-items: center; padding-left: 5px;">
                        License Purchase Graph 2023
                    </div>
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="height: 300px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
                        <canvas id="chartjs-bar" style="height: 100%;"></canvas>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
                    <div class="" style="color: white; background-color: #007BFF; border-top-left-radius: 3px; border-top-right-radius: 3px; font-size: 14px; height: 35px; display: flex; align-items: center; padding-left: 5px;">
                        Active Licenses by Softwares
                    </div>
                    <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="height: 300px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
                        <canvas id="chartjs-pie" style="height: 100%;"></canvas>
                    </div>
                </div>
                
            </div>
          
            

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script>
    // Define window.theme if not defined
    if (typeof window.theme === 'undefined') {
        window.theme = {};
    }

    // Define the primary color
    window.theme.primary = '#007BFF';

    // Your Chart.js code here
    new Chart(document.getElementById("chartjs-bar"), {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Purchase",
                backgroundColor: window.theme.primary,
                borderColor: window.theme.primary,
                hoverBackgroundColor: window.theme.primary,
                hoverBorderColor: window.theme.primary,
                data: [19, 7],
                barPercentage: .75,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 2, 
                    max: 20 
                },
                gridLines: {
                    display: false
                },
                stacked: false
            }],
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        color: "transparent"
                    }
                }]
            }
        }
    });
</script>
<script>
        window.theme.Cpanel = '#D65B77';
        window.theme.LiteSpeed = '#007BFF';
        window.theme.CloudLinux = '#D6B152';
        window.theme.Imunify360 = '#46A6A7';
        window.theme.Other = '#2F3439';

    new Chart(document.getElementById("chartjs-pie"), {
  type: "pie",
  data: {
    labels: ["Cpanel", "LiteSpeed", "CloudLinux", "Imunify360", "Other"],
    datasets: [{
      data: [234, 18, 10, 175, 147],
      backgroundColor: [
        window.theme.Cpanel,
        window.theme.LiteSpeed,
        window.theme.CloudLinux,
        window.theme.Imunify360,
        window.theme.Other,
      ],
      borderColor: "transparent"
    }]
  },
  options: {
    maintainAspectRatio: false,
    cutoutPercentage: 65,
  }
});
</script>

@endsection