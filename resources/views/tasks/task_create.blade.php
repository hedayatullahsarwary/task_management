@extends('layouts.master')

@section('title')
    Tasks | Add Task
@endsection

@section('title')

@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">
            Task Management - Add Task
        </h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" action="{{ route('task.store') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>
                            Add New Task
                        </legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Task Name">
                                        Task Name
                                    </label>
                                    <input type="input" class="form-control" id="name" name="name" @if($errors->has('name')) style="border: 1px solid red;" @endif placeholder="Task Name in here ...">
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
                                            <option value="{{ $i }}">{{ '#'.$i }}</option>
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
                                    Add New
                                </span>
                            </button>
                            <a class="btn btn-danger btn-sm btn-wide btn-o" href="{{ route('task.index') }}">
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