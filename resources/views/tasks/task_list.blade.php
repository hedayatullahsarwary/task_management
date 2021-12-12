@extends('layouts.master')

@section('title')
    Tasks | List Task
@endsection

@section('title')

@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">
            Task Management - Task List
        </h3>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-12">
                <a href="{{ route('task.create') }}" class="btn btn-primary btn-sm">Add New Task</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
                <h3 class="text-center mb-4">Drag and Drop Datatables Using jQuery UI in Laravel </h3>
                <table id="table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="30px">#</th>
                        <th>Name</th>
                        <th>Priority</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody id="tablecontents">
                    <!-- get all data from Table by Controller -->
                    @foreach($tasks as $task)
                        <tr class="row1" data-id="{{ $task->id }}">
                            <td class="pl-3"><i class="fa fa-sort"></i></td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->priority }}</td>
                            <td>{{ date('d-m-Y h:m:s',strtotime($task->created_at)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <h5>Drag and Drop the table rows and <button class="btn btn-success btn-sm" onclick="window.location.reload()">REFRESH</button> </h5>
            </div>
        </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#table").DataTable();
            //---This is need to Move Order according user wish Arrangement
            $( "#tablecontents" ).sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    sendOrderToServer();
                }
            });
            function sendOrderToServer() {
                var priority = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                //---By this function User can Update hisOrders or Move to top or under
                $('tr.row1').each(function(index,element) {
                    priority.push({
                        id: $(this).attr('data-id'),
                        position: index+1
                    });
                });
                //--The Ajax Post update
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ url('/tasks/updatePriority') }}",
                    data: {
                        priority: priority,
                        _token: token
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            alert(response)
                            console.log(response);
                        } else {
                            alert(response)
                            console.log(response);
                        }
                    }
                });
            }
        });
    </script>
@endsection