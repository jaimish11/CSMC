<!DOCTYPE html>
<html>
<head>
  <title>Milestones</title>
</head>
<body>
  @include('script')
  @include('master.adminnav')
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
        
        
       <td><a class="waves-effect waves-light btn-small black">View image</a></td>
       <td><a href="{{action('AdminController@edit', $milestone['id'])}}" class="waves-effect waves-light btn-small blue">Edit</a></td>
       <td>
        <form action="{{action('AdminController@destroy', $milestone['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
       <td><a href="/dashboard/{{ $milestone->id }}" class="waves-effect waves-light btn-small green">Approve</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
