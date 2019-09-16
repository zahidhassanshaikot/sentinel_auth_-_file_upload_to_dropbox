@extends('master')
@section('container')
<div class="container">
<div class="row">
    <div class="col-md-12">

        <form id="candidatedata" class="form-horizontal" method="POST" role="form" action="/forgot-password">
@csrf

            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel">
                            <h3 class="panel-title roboto">Reset Password</h3>
                        </div>
                        <div class="panel-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                            {{session('success')}}
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger">
                            {{session('error')}}
                            </div>
                            @endif
     
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Password <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="password" id="password" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Confirm Password <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="password_confirmation" id="password_confirmation" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
               
               

                      
                            <div class="form-group text-center">
                                <button type="submit" id="submit_btn" class="btn btn-orange-md roboto">Save Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </form> <!-- Fint form -->  
    </div>
</div>
<!-- Tab panes -->
</div>
</div>
@endsection