@extends('layout.layout')

@section('content')
<div class="container-fluid pb-3">
    <div class="d-grid gap-3 " style="grid-template-columns: 1fr 2fr;">
        <div class="text-warning  rounded-3 w-100 " style="height: auto; background-color: rgba(255, 255, 255, 0.155) !important ;" >
            
            
            <div class="rasm w-100 " style="height: auto;" >
                <div class="userpic "><img src="images/userimg.jpg" class="pic" width="150" height="150"></div>
                
            </div>
            
            <div class="title ">
                <div class="name fw-bold">Bakhtyar Mohammed</div>
                <div class="bio">
                    <p><br>
                        
                        undergraduate student in SPU IT department.
                        I'm trying to be come a good fornt-end developer
                        <br>
                       <span style="float: left ;padding:5px;"><i class="fa fa-map-marker"></i>&nbsp;Darbandikhan,Sulaymaniyah, Iraq</span> 
                    </p>
                </div>

            </div>
        </div>
        <div class="bg-light  rounded-3 p-2 container-fluid w-100 text-warning" style="height: auto; background-color: rgba(255, 255, 255, 0.155) !important ;">
            <p>
                <span class="fw-bolder">Title:</span><br>
                &nbsp;&nbsp;&nbsp;Front End Developer<br><br>
                <span class="fw-bolder">Degree:</span><br>&nbsp;&nbsp;&nbsp;undergraduate <br><br>
                <span class="fw-bolder">Language:</span><br>&nbsp;&nbsp;&nbsp;English <br>&nbsp;&nbsp;&nbsp;Kurdish <br>
                <br><span class="fw-bolder">Language & Tools:</span><br>&nbsp;&nbsp;&nbsp;HTML <i class="fa fa-html5" style="font-size:20px"></i><br>&nbsp;&nbsp;&nbsp;CSS &nbsp;<i class="fa fa-css3" style="font-size:20px"></i>
               <br>&nbsp;&nbsp;&nbsp;JAVASCRIPT&nbsp; <i class="fab fa-js"></i>
               <br>&nbsp;&nbsp;&nbsp;BOOTSTRAP&nbsp; <i class="fab fa-bootstrap"></i>
               <br>&nbsp;&nbsp;&nbsp;LARAVEL&nbsp; <i class="fab fa-laravel"></i>
               <br>&nbsp;&nbsp;&nbsp;PHP&nbsp; <i class="fab fa-php"></i>
            </p>

            
        </div>
    </div>
</div>
@endsection