@extends('admin.master')

@section('title')
	All Owners 
@endsection

@section('extra-css')
<style>
	#ownerTable_filter{
		float:right;
	}
</style>
@endsection

@section('content')

    <div class="d-flex justify-content-center py-4">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-10">
            <h4 class="page-title">All Property Owners</h4>
        </div>
    </div>

    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.exportOwner') }}" class="btn btn-success btn-sm"> Export Excel</a>
        </div>
            

          <table class="table text-nowrap bg-light" id="ownerTable">
            <div class="d-flex justify-content-center">
            
                <thead>
                    <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Phone</th>
                        <th class="border-top-0">Country</th>
                        <th class="border-top-0">Action</th>
                    </tr>
                </thead>
                <tbody>
            
                         @foreach($data as $key=>$row)
                            <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>{{ $row->country }}</td>
                            <td> 
                                <form method="POST" action="{{ route('admin.deleteOwner', $row->id) }}">
                                    @csrf
                                    <a href="" class="show_confirm"><i class="fa fa-trash-alt"></i></a>&nbsp;&nbsp;
                                    <a href="/updateOwner/{{ $row->id }}"><i class="fas fa-edit"></i></a>

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
	 $('#ownerTable').DataTable();
</script>

@endsection