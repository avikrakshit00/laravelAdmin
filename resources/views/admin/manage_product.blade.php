@include('admin.includes.head')
<body>
   <div class="container-scroller">

   @include('admin.includes.sidebar')

   <div class="container-fluid page-body-wrapper">

   @include('admin.includes.header')

   <div class="main-panel">
   <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Manage Product</h3>
            <p class="card-description">Manage Product </code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th> Product Description</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Id</td>
                        <td>Product Name</td>
                        <td>Product Short Desc.</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Image</td>

                        <td>
                            <a href="" class="btn btn-outline-success btn-sm">Edit</a>
                            <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                      </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
   </div>
@include('admin.includes.js')
