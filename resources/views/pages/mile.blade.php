<!DOCTYPE html>
<html>
<head>
  <title>Milestones</title>

</head>

<body>
  @include('script')
  @include('master.nav')
  <table class="highlight responsive-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
       
        <th>Start Date</th>
        <th>End Date</th>
        <th>Updated Date</th>
        <th>Project ID</th>
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
      
      @foreach($milestones as $milestone)
     
      <tr>
        <td>{{$milestone->title}}</td>
        <td>{{$milestone->description}}</td>
        <td>{{$milestone->start_date}}</td>
        <td>{{$milestone->end_date}}</td>
        <td>{{$milestone->updated_date}}</td>
        <td>{{$milestone->project_id}}</td>

        <td>
          <form action="{{action('ImageController@store', [$milestone->id, $milestone->image_id])}}"   method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <input type="file" name="file">
            <input type="submit" name="submit" value="Submit">
        </form>
        </td>

        <td>
          <img width="200" height="200" src="{{ asset('storage/uploads/1.png') }}">
        </td>
        
       <!--<td><a class="waves-effect waves-light btn modal-trigger" href="/projects/{project_id}/{milestone_id}/{image_id}">View Image</a></td> -->
       <!--<div id="uploadmodal" class="modal">
          <div class="modal-content">
            <div class="row">
                <form action="action('ImageController@upload')" method="POST" enctype="multipart/form-data">
                   {{csrf_field()}}
                  <input type="file" name="file">
                  <input type="submit" name="submit" value="Submit">
                </form>
           </div>
         </div>
        </div>
       <td><a class="waves-effect waves-light btn modal-trigger" href="#addImageModal">Add</a></td>
       <div id="addImageModal" class="modal">
         <div id="modal-content">
           <div class="row">
             <form action="action('ImageController@upload')" method="POST" enctype="multipart/form-data">
                   {{csrf_field()}}
                  <input type="file" name="file">
                  <input type="submit" name="submit" value="Submit">
                </form>
           </div>
         </div>
       </div>-->
       <!--<td>  <a href="/projects/{project_id}/{milestone_id}" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a>
      </td>-->

      </tr>
      @endforeach
      
    </tbody>
  </table>
</body>
</html>
