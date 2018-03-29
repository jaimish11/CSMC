
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
        
       <td><a href="/projects/{{$project->id}}" class="waves-effect waves-light btn-large black">View</a></td>
        <td>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>