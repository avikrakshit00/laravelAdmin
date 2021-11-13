@include('admin.includes.head')
<body>
   <div class="container-scroller">

   @include('admin.includes.sidebar')

   <div class="container-fluid page-body-wrapper">

   @include('admin.includes.header')

   <div class="main-panel">
   <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">Update Category</h3>
            <form class="forms-sample" action="{{url('admin/updatecategory/')}}/{{$categories->id}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="cat_name" value="{{$categories->cat_name}}"  placeholder="Category Name">
              </div>
              <div class="form-group">
                <label for="categoryName">Category Slug</label>
                <input type="text" class="form-control" id="categorySlug" name="cat_slug" value="{{$categories->cat_slug}}" placeholder="Category Slug">
              </div>
              <button type="submit" class="btn btn-outline-success mr-2">Update</button>
            </form>
          </div>
        </div>
      </div>
   </div>
@include('admin.includes.js')
