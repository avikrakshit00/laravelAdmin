@include('admin.includes.head')
<body>
   <div class="container-scroller">
   @include('admin.includes.sidebar')
   <div class="container-fluid page-body-wrapper">
   @include('admin.includes.header')
   <div class="main-panel">
   <div class="content-wrapper">
   <div class="col-12 grid-margin stretch-card">
    {!!Toastr::message() !!}
      <div class="card">
         <div class="card-body">
            <h3 class="card-title">Add Product</h3>
            <p class="card-description"></p>
            <form class="forms-sample" action="{{url ('admin/product/add')}}" method="POST">
                @csrf
               <div class="form-group">
                  <label for="productName">Product Name</label>
                  <input type="text" class="form-control" id="productName" name="pro_name" placeholder="Product Name">
                  <span style="color: red">@error('pro_name'){{ $message}}@enderror</span>
               </div>

               {{-- <div class="form-group">
                <label>Image upload</label>
                <input type="file"  class="file-upload-default" name="img[]">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div> --}}

             <div class="form-group">
                <label for="textarea">Add Description</label>
                <textarea class="form-control" id="textarea" name="pro_desc" rows="13" placeholder="Product Description"></textarea>
                <span style="color: red">@error('pro_desc'){{ $message}}@enderror</span>
             </div>

             <div class="form-group">
                <label for="catName">Category Name</label>
                <select class="form-control" name="cat_id" id="catName">
                    @foreach ($product as $pro)
                    <option value="{{$pro->cat_id}}">{{$pro->cat_name}}</option>
                    @endforeach
                </select>
                <span style="color: red">@error('cat_id'){{ $message}}@enderror</span>
             </div>

             <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="pro_price" placeholder="Price">
                  <span style="color: red">@error('pro_price'){{ $message}}@enderror</span>
             </div>

               <button type="submit"  class="btn btn-outline-success mr-2">Submit</button>

            </form>
         </div>
      </div>
   </div>
   @include('admin.includes.js')
