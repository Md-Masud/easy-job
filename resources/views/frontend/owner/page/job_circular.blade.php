
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
  <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
<div class="container p-3 my-3 border bg-warning">
   <h4>Job Circulation</h4>
  <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif
     <form action="{{route('store.jobcircular')}}" method="post">
      @csrf
        <div class="form-group">
         <label for="exampleInputEmail1">Name of company</label>
         <input type="text" class="form-control"name="name"  id=" name" placeholder="Name of company">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">No. of Vacancies</label>
         <input type="number" class="form-control"name="vacancies"  id=" name" placeholder="No. of Vacancies">
        </div>
        <div class="form-group">
        <label for="comment">Job description:</label>
        <textarea class="form-control" rows="5" id="comment" name="description"  ></textarea>
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption ">Job Category </label>
         <select class="form-control form-control-lg"name="category_id"id="category_id">
           <option>Select Category</option>
           @foreach ($categorys as $country)
         <option value="{{ $country->id }}">
          {{ $country->name}}
         </option>
          @endforeach
         </select>
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Educational Requirements</label>
         <textarea class="form-control"  id="comment" name="education"  ></textarea>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Experience Requirements</label>
         <input type="tex" class="form-control"name="experience"  id=" name" placeholder="Experience Requirements">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Additional Job Requirements</label>
         <textarea class="form-control"  id="comment" name="additional"  ></textarea>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Location</label>
         <input type="text" class="form-control"name="location"  id="location" placeholder="Location">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Salary Range</label>
         <input type="text" class="form-control"name="salary"  id=" name" placeholder="Salary Range">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dateline</label>
            <input type="datetime-local" class="form-control"name="dateline"  id=" name" placeholder="Dateline">
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
