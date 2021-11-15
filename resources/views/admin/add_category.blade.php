@include('admin.includes.head')
<body>
   <div class="container-scroller">

   @include('admin.includes.sidebar')

   <div class="container-fluid page-body-wrapper">
   <!-- partial:partials/_navbar.html -->
   @include('admin.includes.header')

   <div class="main-panel">
   <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        {!!Toastr::message() !!}
        <div class="card">
        <div class="card-body">
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif --}}
            <h3 class="card-title">Add Category</h3>
            <form class="forms-sample" action="{{url ('admin/category/add')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="cat_name" placeholder="Category Name">
                <span style="color: red">@error('cat_name'){{ $message}}@enderror</span>
              </div>
              <div class="form-group">
                <label for="categoryName">Category Slug</label>
                <input type="text" class="form-control" id="categorySlug" name="cat_slug" placeholder="Category Slug">
                <span style="color: red">@error('cat_slug'){{ $message}}@enderror</span>
              </div>
              <button type="submit" class="btn btn-outline-success mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
   </div>
@include('admin.includes.js')
