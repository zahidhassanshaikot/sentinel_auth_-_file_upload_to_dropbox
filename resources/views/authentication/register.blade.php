<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- beauty font ROBOTO -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<style>


/* Font ROBOTO */
.roboto{
    font-family: 'Roboto', sans-serif !important; 
}

/* custom background for panel  */
.container{ 
    padding-top: 50px !important;
    background-color: #f5f5f5 !important;  
}

/* custom background header panel */
.custom-header-panel{
    background-color: #004b8e !important;
    border-color: #004b8e !important;
    color: white;
}

.no-margin-form-group {
    margin: 0 !important;
}
.requerido {
    color: red;
}
.btn-orange-md {
    background: #FF791F !important;
    border-bottom: 3px solid #ae4d13 !important;
    color: white;
}

.btn-orange-md:hover {
    background: #d86016 !important;
    color: white !important;
}

</style>

<div class="container">
<div class="row">
    <div class="col-md-12">

        <form id="candidatedata" class="form-horizontal" method="POST" role="form" action="/register">
@csrf

            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel">
                            <h3 class="panel-title roboto">Profile info</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">First Name <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="first_name" id="name" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Last Name <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="last_name" id="name" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Email <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="email" value="" oninvalid="this.setCustomValidity('First Name requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Location <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="location" id="location" value="" oninvalid="this.setCustomValidity('Location requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="password">Password <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="password" value="" oninvalid="this.setCustomValidity('Password requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="password_confirmation">Confirm Password <span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" oninvalid="this.setCustomValidity('Password requerido')" oninput="setCustomValidity('')" required="" maxlength="70">
                                </div>
                            </div>
                        

                            <!--Fin datos personales-->
                            <div class="form-group text-center">
                                <button type="submit" id="submit_btn" class="btn btn-orange-md roboto">Save Info</button>
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