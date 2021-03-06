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
            <form class="form-horizontal" method="post" action=" {{ route('user-create') }}">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name"/>
                            <br>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Your Email"/>
                            <br> <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="name" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="password" id="password"  placeholder="Your Password"/>
                            <br> <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="name" class="cols-sm-2 control-label">ConformPassword</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="confirm_password" id="password"  placeholder="Conform password"/>
                            <br> <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="cols-sm-2 control-label required">Address</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="address" id="address"  placeholder="Your Address"/>
                        </div>
                    </div>
                </div>

            
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
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
