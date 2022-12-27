@extends ('layout')
@section('content')
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
    </div>
    <form action="{{route('DoAdd')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input name="content" type="text" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Keyword</label>
                <input name="keyword" class="form-control" required=""></input>
            </div>
        </div>
        <div class="modal-footer">
            <button href="" type="button" class="btn btn-default">Hủy</button>
            <button type="submit" class="btn btn-success">Thêm</button>
        </div>
    </form>
</div>
@endsection('content')