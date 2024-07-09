@extends('eyecart.admin.layout')
@section('title_name')
Manage contacts
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage contacts
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
							<tr>
								<th>ID</th>
								<th>Contact Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>John Doe</td>
								<td>joh123@gmail.com</td>
								<td>(+91)9998887776</td>
								
                    
            <td><a href=""><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span>
            <a href=""><span class="fa fa-edit text-primary fs-1 ml-5" style="font-size:25px"></span>
        
        </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection 