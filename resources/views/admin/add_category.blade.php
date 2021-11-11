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
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Add Category</h3>
            <form class="forms-sample">
              <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" placeholder="Category Name">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form>
          </div>
        </div>
      </div>
   </div>

@include('admin.includes.footer')
@include('admin.includes.js')
