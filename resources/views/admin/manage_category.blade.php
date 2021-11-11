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
            <h3 class="card-title">Manage Category</h3>
            <p class="card-description">Manage Category </code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Sl No. </th>
                    <th> Category Name </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td> Herman Beck </td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>

@include('admin.includes.footer')
@include('admin.includes.js')
