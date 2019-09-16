@extends('master')
@section('container')
<div class="container">
<div class="row">
    <div class="col-md-12">

        <form id="candidatedata" class="form-horizontal" method="POST" role="form" action="/login">
@csrf

            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel">
                            <h3 class="panel-title roboto">Login</h3>
                        </div>
                        <div class="panel-body">

     
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Email <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
               
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="password">Password <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="password" value="" oninvalid="this.setCustomValidity('Password requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
               

                            <!--Fin datos personales-->
                            <div class="form-group text-center">
                                <button type="submit" id="submit_btn" class="btn btn-orange-md roboto">Login</button>
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