@extends('admin.master')

@section('title')
	All properties
@endsection

@section('extra-css')
<style>
	#propertyTable_filter{
		float:right;
	}
</style>
@endsection

@section('content')

    <div class="d-flex justify-content-center py-4">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10">
            <h4 class="page-title">All Property</h4>
        </div>
    </div>
    <div class="container">
            

          <table class="table text-nowrap bg-light" id="propertyTable">
            <div class="d-flex justify-content-center">
            
                <thead>
                    <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Image</th>
                        <th class="border-top-0">Property For</th>
                        <th class="border-top-0">City</th>
                        <th class="border-top-0">Price</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Action</th>
                    </tr>
                </thead>
                <tbody>
            
                         @foreach($data as $key=>$row)
                            <tr>
                            <td>{{ $key+1 }}</td>
                            <td>
                                @foreach(json_decode($row->image) as $res)
                                <img class="rounded-circle " width="150px" height="100px" src="{{ asset('property/'. $res) }}"/>
                                @endforeach
                            </td>
                            <!-- <td>{{ $row->image }}</td> -->
                            <td>{{ $row->propertyFor }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->status }}</td>
                            <td> 
                                <form method="POST" action="{{ route('admin.deleteProperty', $row->id) }}">
                                    @csrf
                                    <a href="" class="show_confirm"><i class="fa fa-trash-alt"></i></a>&nbsp;&nbsp;
                                    <a href="/updateProperty/{{ $row->id }}"><i class="fas fa-edit"></i></a>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                </tbody>
            </div>
          </table>

    </div>

@endsection

@section('extra-script')
<script>
	 $('#propertyTable').DataTable();
</script>

@endsection