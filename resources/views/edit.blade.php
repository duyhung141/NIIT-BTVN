@extends ('layout')
@section('content')
<div class="modal-content">
    <form>
        <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
        </div>
        <form action="{{route('DoEdit')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" value="{{$post->title}}" type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input name="content" value="{{$post->content}}" type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Keyword</label>
                    <input name="keyword" value="{{$post->keyword}}" class="form-control" required=""></input>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-success">Sửa</button>
            </div>
        </form>
    </form>
</div>
@endsection('content')