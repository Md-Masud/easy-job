@extends('frontend.owner.layouts.omaster')
@section('contain')
 <h4>Company Information</h4>
 <div class="container p-3 my-3 border bg-primary">
  <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif
  <form action="{{route('admin.nformation.store')}}" method="post">
      @csrf
        <div class="form-group">
         <label for="exampleInputEmail1">Name of company</label>
         <input type="text" class="form-control"name="name"  id=" name" placeholder="Name of company">
        </div>
        <div class="form-group">
          <label for="exampleInput Desciption ">Bussiness description </label>
          <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption ">Country </label>
         <select class="form-control form-control-lg"name="counrty_id"id="counrty_id">
           <option>Select Country</option>
           @foreach ($countrys as $country)
         <option value="{{ $country->id }}"> 
          {{ $country->name}} 
         </option>
          @endforeach   
         </select>
       </div>
       </div>
       <h4>Social Media</h4>
       <div class="container p-3 my-3 border bg-warning">
         <div class="form-group">
         <label for="exampleInputEmail1">Email</label>
         <input type="email" class="form-control"name="email"  id="eamil" placeholder="Email">
        </div>
         <div class="form-group">
         <label for="exampleInputEmail1">Web Address</label>
         <input type="text" class="form-control"name="web_address"  id="web" placeholder="web Address">
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption ">Facebook</label>
           <input type="text" class="form-control"name="facebook"  id="facebook" placeholder="facebook" required>
        </div>
       </div>
        <button type="submit"  class="btn btn-info" name="Save"value="Save">Submit</button>
      </form>
      </div>
      </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
@endsection
