@extends('layouts.master')

@section('title')
    Tasks | List Task
@endsection

@section('title')

@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">
            Task Management - View Task
        </h3>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-12">
                <a href="{{ route('task.index') }}" class="btn btn-primary btn-sm">Back to List</a>
            </div>
        </div>
        <table class="table table-bordered" id="my_task">
            <thead>
                <th>
                    ID
                </th>
                <th>
                    Task Name
                </th>
                <th>
                    Priority
                </th>
            </thead>
            <tbody class="row_position">
                <tr>
                    <td>
                        {{ $task->id }}
                    </td>
                    <td>
                        {{ $task->name }}
                    </td>
                    <td>
                        {{ "#".$task->priority }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')

@endsection