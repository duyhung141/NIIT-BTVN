@extends ('layout')
@section('content')
<div class="modal-content">
    <form>
        <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
        </div>
        <form action="{{route('DoAdd')}}" method="post">
            @csrf
            @method('POST')
            <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Keyword</label>
                    <textarea class="form-control" required=""></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
                <button type="submit" class="btn btn-success" >Xác nhận</button>
            </div>
        </form>
    </form>
</div>
@endsection('content')