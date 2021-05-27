<style type="text/css">
         body {background-color: #FFE4E1;}
         h1   {color:	DarkSlateGray ;}
         h2  {color: gray;}
        p    {color: pink;}
        
        table {
          border-collapse: collapse; 
          width: 100%;
          }
        thead{
            background-color: Gainsboro;
            color:#606060;
          }
        th{
            border: 1px solid black;
          height: 50px;
          }
        table, td  {
            background-color:#F0F0F0;
            color:gray;
          border: 1px solid black;
          height: 50px;
          }
</style>
<h1 align="center">Employee Table</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">ID Number</th>
      <th scope="col">Phone Number</th>
      <th scope="col">City</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->employee_name}}</td>
      <td>{{$employee->employee_id}}</td>
      <td>{{$employee->phone_number}}</td>
      <td>{{$employee->city}}</td>
      <td>{{$employee->gender}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

