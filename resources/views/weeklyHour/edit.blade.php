@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Weekly Hour</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="clientid" class="col-md-4 control-label">Client Name</label>
                            <div class="col-md-6">
                                <input class="date form-control" style="width: 300px;" type="text" name="sdate" required>
                            </div>
                        </div>
   
                        <div class="form-group">
                            <label class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                                <input class="date form-control" style="width: 300px;" type="text" name="sdate" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">End Date</label>
                            <div class="col-md-6">
                                <input class="date form-control" style="width: 300px;" type="text" name="edate" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hours</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="hour" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Missing Hour</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="mhour" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hourly Rate</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="hrate" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Total</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="total" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <script type="text/javascript">  
        $('.date').datepicker({  
           format: 'yyyy-mm-dd'  
         });  
 </script> 
@endsection
