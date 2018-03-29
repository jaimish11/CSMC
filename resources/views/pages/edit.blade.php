<!DOCTYPE html>
<html>
<head>
  <title>Edit milestones</title>
</head>
<body>
  @include('script')
  @include('master.adminnav')
  <div class="container">
        <h3 style="text-align:center;">Edit A Milestone</h3><br/>
          <div class="card">
            <div class="card-content">
              <form method="post" action="{{action('AdminController@update', $id)}}">
              @csrf
              <input name="_method" type="hidden" value="put">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="desc">Description:</label>
                  <input type="text" class="form-control" name="desc" placeholder="Enter description">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="s_date">Start date:</label>
                  <input type="date" class="form-control" name="s_date">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="e_date">End date:</label>
                  <input type="date" class="form-control" name="e_date">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                  <button type="submit" class="btn btn-success " style="margin-left:38px;text-align: :center;">Update</button>
                </div>
              </div>
          </form>
            </div>
          </div>
            
  </div>  

</body>
</html>
