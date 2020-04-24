@extends('frontend.user.layouts.umaster')
@section('contain')
  <form action="#" method="post">
       
        <div class="form-group">
         <label for="exampleInputEmail1">Name of companay</label>
         <input type="text" class="form-control"name="name"  id=" name" placeholder="Name of companay">
        </div>
        
         <div class="form-group">
         <label for="exampleInputEmail1"></label>
         <input type="department" class="form-control"name="department"  id=" department" placeholder="Department">
        </div>
         <div class="form-group">
         <label for="exampleInputEmail1">phone</label>
         <input type="text" class="form-control"name="phone"  id=" phone" placeholder="Phone">
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption ">Desciption </label>
          <textarea class="form-control" name="description" id="description"></textarea>
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
