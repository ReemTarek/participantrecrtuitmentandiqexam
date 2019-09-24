@extends ('layouts.app')
@section ('content')

  <br/>
  <div class="container">
   <h3 align="center">Export ALL Data to Excel</h3><br />
   <div align="center">
    <a href="{{action('ExportExcelController@export')}}" class="btn btn-success">Export to Excel</a>
    <br>
    <form method="post" action="{{ route('adminlogout')}}" class="mt-5">
       @csrf
       <button type="submit" class=" btn btn-primary">logout</button>
     </form>
     @foreach($users as $user)
     <h3>numbers of applicants = {{$user->count()}}</h3>
     @break
     @endforeach
   </div>
   <br>
   <div class="container">
   
   </div>
   <div class="table-responsive">
    
   <form method="POST" action="{{ route('showcertaindata') }}" class="p-5 text-light">
     @csrf
     <select class="form-control" name="select" id="select" autofocus> 
                                <option value="none">select certain Work shop</option>
                                          <option value="PS">Photoshop </option>
                                          <option value="AI">Illustrator</option>
                                          <option value="HR">Human Resources</option>
                                          <option value="PR">Marketing</option>
                                          <option value="ER">Entrepreneurship</option>
                                          <option value="WEB">Web Design</option>
                                          <option value="AR">Arduino</option>
                                          <option value="VR">Video Production</option>
                                          <option value="PSp">Public Speaking</option>
                                          
                                        </select>
                                        <button type="submit" class="btn btn-primary">
                                    {{ __('choose') }}
                                </button>
     </form>
    <table class="table table-striped table-bordered">
     <tr>
      <td>Name</td>
      <td>email</td>
      <td>phone</td>
      <td>university</td>
      <td>college</td>
      <td>year</td>
      <td>first preference</td>
      <td>second preference</td>
      <td>Exam score</td>
      <td>created at</td>
      <td>updated at</td>
     </tr>
     @foreach($users as $user)
     <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->university }}</td>
      <td>{{ $user->college }}</td>
      <td>{{ $user->year }}</td>
      <td>{{ $user->firstp }}</td>
      <td>{{ $user->secondp }}</td>
      <td>{{ $user->score }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
     </tr>
     @endforeach
    </table>
   </div>
   
  </div>

@endsection