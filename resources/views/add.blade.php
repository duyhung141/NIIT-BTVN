@extends ('layout')
@section('content')
<div class="modal-content">
    <form>
        <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
        </div>
        <form action="" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="email" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Keyword</label>
                <textarea class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
                <label>Actions</label>
                <input type="text" class="form-control" required="">
            </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success" value="Add">
        </div>
        </form>
    </form>
</div>
@endsection('content')