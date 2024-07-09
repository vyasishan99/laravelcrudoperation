@extends('eyecart.admin.layout')
@section('title_name')
Manage reviews
@endsection 
@section('content')
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Manage reviews
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
                                <th>Customer Name</th>
                                <th>Product</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Lens </td>
                                <td>4.0</td>
                                <td>Good</td>
                                <td>
                                    <a href="#"><span class="fa fa-trash text-danger fs-1" style="font-size:25px"></span></a>
                                    <a href="#"><span class="fa fa-edit text-primary fs-1 ml-5" style="font-size:25px"></span></a>
                                </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection 