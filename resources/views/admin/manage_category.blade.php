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
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
          <div class="card-body">
            <h3 class="card-title">Manage Category</h3>
            <p class="card-description">Manage Category </code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Sl No. </th>
                    <th> Category Name </th>
                    <th> Category Slug </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->cat_name }}</td>
                        <td>{{ $cat->cat_slug }}</td>
                        <td>
                            <a href="{{url('admin.edit_category',['id' =>$cat->id])}}" class="btn btn-outline-success btn-sm">Edit</a>
                            <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            {!! $category->links('admin.paginate') !!}
        </div>
        </div>

      </div>
   </div>


@include('admin.includes.js')
