@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Weekly Hour</div>
                <div class="panel-body">
                        {{ csrf_field() }}
                        <table style="width:100%">
                            <tr>
                                <th>Client Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Hours</th>
                                <th>Missing Hours</th>
                                <th>Hourly Rate</th>
                                <th>Total</th>
                            </tr>
                            @foreach ( $weeks as $week)
                            <tr>
                                <td>{{ $week->client->name }}</td>
                                <td>{{ $week->start_date }}</td>
                                <td>{{ $week->end_date }}</td>
                                <td>{{ $week->hours }}</td>
                                <td>{{ $week->missing_hour }}</td>
                                <td>{{ $week->hourly_rate }}</td>
                                <td>{{ $week->total }}</td>
                                <td><a class="btn btn-success" href="weekly-hours/edit/{{ $week->client->client_id }}"><i class="icon-pencil icon-white"></i>Edit</button></td>
                                <td><a class="btn btn-success" href=""><i class="icon-pencil icon-white"></i>Delete</button></td>
                            </tr>  
                            @endforeach  
                        </table>
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