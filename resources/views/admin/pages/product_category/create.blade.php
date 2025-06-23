@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Product Category Create</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.product_category.store') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
            </div>
            <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option>---Please select---</option>
                <option value="1">Show</option>
                <option value="0">Hide</option>
            </select>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection