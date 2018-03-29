

  <table class="highlight responsive-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Proposal Date</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Budget</th>
          <th>Location</th>
          <th>Contractor ID</th>          
        </tr>
      </thead>
      <tbody>
        
        @foreach($projects as $project)
        
          <tr>
            <td>{{$project['name']}}</td>
            <td>{{$project['description']}}</td>
            <td>{{$project['proposal_date']}}</td>
            <td>{{$project['start_date']}}</td>
            <td>{{$project['end_date']}}</td>
            <td>{{$project['budget']}}</td>
            <td>{{$project['location']}}</td>
            <td>{{$project['contractor_id']}}</td>
            
           <td><a href="dashboard/{{$project->id}}" class="waves-effect waves-light btn-small">View</a></td>
           
           
          </tr>
        @endforeach
      </tbody>
    </table>

      <div class="row">
  <div class="col s12 m6 l6">
    <div class="card blue-grey lighten-3">
      <div class="card-content">
        <form action="/dashboard/import"  method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <input type="file" name="file" style="padding-bottom:1em; ">
            <p style="color:red;" >{{$errors->first('file')}}</p>
            <input type="submit" name="submit" value="Import" class="btn btn-small">
        </form>
      </div>
    </div>
  </div>
</div>



