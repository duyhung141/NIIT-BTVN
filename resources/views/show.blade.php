@extends('layout')
@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2><b>CRUD</b></h2>
            </div>
            <div class="col-sm-6">
                <a href="{{route('Add')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Employee</span></a>
                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                    </span>
                </th>
                <th>Title</th>
                <th>Content</th>
                <th>Keyword</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                    </span>
                </td>
                <td>{{$data->title}}</td>
                <td>{{$data->content}}</td>
                <td>{{$data->keyword}}</td>
                <td>
                    <a href="/edit/{{$data->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit">Sửa</i></a>
                    <a href="{{route('Delete',['id'=>$data->id])}}" class="delete"><i class="material-icons" >Xóa</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection('content')