@include('admin.includes.head')
<body>
   <div class="container-scroller">

   @include('admin.includes.sidebar')

   <div class="container-fluid page-body-wrapper">
   <!-- partial:partials/_navbar.html -->
   @include('admin.includes.header')

   <div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-sm-4 grid-margin">
            <div class="card">
               <div class="card-body">
                  <h5>Revenue</h5>
                  <div class="row">
                     <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                           <h2 class="mb-0">$32123</h2>
                           <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                     </div>
                     <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-4 grid-margin">
            <div class="card">
               <div class="card-body">
                  <h5>Sales</h5>
                  <div class="row">
                     <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                           <h2 class="mb-0">$45850</h2>
                           <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                     </div>
                     <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-4 grid-margin">
            <div class="card">
               <div class="card-body">
                  <h5>Purchase</h5>
                  <div class="row">
                     <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                           <h2 class="mb-0">$2039</h2>
                           <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
                        </div>
                        <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                     </div>
                     <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row ">
         <div class="col-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Order Status</h4>
                  <div class="table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>Sl No.</th>
                              <th> Client Name </th>
                              <th> Order No </th>
                              <th> Product Cost </th>
                              <th> Project </th>
                              <th> Payment Mode </th>
                              <th> Start Date </th>
                              <th> Payment Status </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Henry Klein</td>
                              <td> 02312 </td>
                              <td> $14,500 </td>
                              <td> Dashboard </td>
                              <td> Credit card </td>
                              <td> 04 Dec 2019 </td>
                              <td>
                                 <a href=""><div class="badge badge-outline-success">Approved</div></a>
                              </td>
                           </tr>

                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@include('admin.includes.footer')
@include('admin.includes.js')
