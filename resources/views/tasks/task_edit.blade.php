@extends('layouts.master')

@section('title')
    Tasks | Edit Task
@endsection

@section('title')

@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">
            Task Management - Update {{ $task->name }}
        </h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" action="{{ route('task.update', ['id' => $task->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <legend>
                            Update Task
                        </legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Task Name">
                                        Task Name
                                    </label>
                                    <input type="input" class="form-control" id="name" name="name" value="{{ $task->name }}" @if($errors->has('name')) style="border: 1px solid red;" @endif>
                                    @if($errors->has('name'))
                                        <label style="color: red;">
                                            {{ $errors->first('name') }}
                                        </label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Priority">
                                        Priority
                                    </label>
                                    <select id="priority" name="priority" class="form-control" @if($errors->has('priority')) style="border: 1px solid red;" @endif>
                                        <option value="">Select</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            @if($i == $task->priority)
                                                <option value="{{ $i }}" selected>{{ '#'.$i }}</option>
                                            @else
                                                <option value="{{ $i }}">{{ '#'.$i }}</option>
                                            @endif
                                        @endfor
                                    </select>
                                    @if($errors->has('priority'))
                                        <label style="color: red;">
                                            {{ $errors->first('priority') }}
                                        </label>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm btn-wide">
                                <span>
                                    Edit
                                </span>
                            </button>
                            <a class="btn btn-danger btn-sm btn-wide btn-o" href="{{ route('task.view', ['id' => $task->id]) }}">
                                <span>
                                    Cancel
                                </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection