@extends('layouts.app')

@section('title')
	Capital Provider
@endsection

@section('extra-css')
<style>
	#interestedTable_filter{
		float:right;
	}
    #potentialTable_filter{
		float:right;
	}
</style>
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-10 col-md-10 col-sm-12 card p-4 ms-2">
                            <h3 class="pb-3">Potential Customers</h3>
                            <table class="table text-nowrap" id="potentialTable">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Plan</th>
                                        <th class="border-top-0">Investor Name</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($datap as $key=>$row)
                                            <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>${{ $row->amount }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                <a href="/investorDetail/{{ $row->notify_id }}" class="btn btn-info">Details</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                </tbody>											
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>

@endsection

@section('extra-script')
<script>
	 $('#interestedTable').DataTable();
	 $('#potentialTable').DataTable();
</script>
@endsection