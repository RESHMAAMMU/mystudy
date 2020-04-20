@extends('master')
@section('content')
<div class="container">
    <div class="row main">
        <div class="panel-heading">
           <div class="panel-title text-center">
                   <h2 class="title">Registeration</h1>
                   <hr/>
               </div>
        </div> 
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="#">
                
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mobile" class="cols-sm-2 control-label required">Mobile</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Your Mobile"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nationality" class="cols-sm-2 control-label">Nationality</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></span>
                            <select class="form-control" name="nationality" id="nationality"  placeholder="Please select your Nationality">
                            <option>-select-</option>
                            <option>India</option>
                            <option>Singapore</option>
                            <option>Malaysia</option>
                            <option>USA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="cols-sm-2 control-label">Country of Residence</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span>
                            <select class="form-control" name="country" id="country"  placeholder="Please select your Country">
                            <option>-select-</option>
                            <option>India</option>
                            <option>Singapore</option>
                            <option>Malaysia</option>
                            <option>USA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="button" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('css')
<style>
body, html{
    height: 100%;
    background-repeat: no-repeat;
    background-color: #d3d3d3;
    font-family: 'Oxygen', sans-serif;
   font-size: 12px;
}

.main{
    margin-top: 70px;
}

h1.title { 
   font-size: 50px;
   font-family: 'Passion One', cursive; 
   font-weight: 400; 
}

hr{
   width: 10%;
   color: #fff;
}

.form-group{
   margin-bottom: 15px;
}

label{
   margin-bottom: 14px;
}

input,
input::-webkit-input-placeholder {
   font-size: 9px;
   padding-top: 3px;
}

.main-login{
    background-color: #fff;
   /* shadows and rounded borders */
   -moz-border-radius: 2px;
   -webkit-border-radius: 2px;
   border-radius: 2px;
   -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
    margin-top: 30px;
    margin: 0 auto;
    max-width: 330px;
    padding: 40px 40px;
    

}

.login-button{
   margin-top: 3px;
}

.login-register{
   font-size: 8px;
   text-align: center;
}
</style>
@endpush
