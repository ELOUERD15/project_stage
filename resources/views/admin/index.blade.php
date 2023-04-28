{{-- @extends('admin.layout')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Gestion Courriers</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/courrier/create') }}" class="btn btn-success btn-sm" title="Add New User">
                        Add New
                    </a>
                 <br><br>
                  <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                 <th>id</th>
                                 <th>subject</th>
                                 <th>sender</th>
                                 <th>recipient</th>
                                 <th>date_received</th>
                                 <th>status</th>
                             </tr>
                            </thead>
                            <tbody>
                                @foreach($courriers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->sender }}</td>
                                    <td>{{ $item->recipient }}</td>
                                    <td>{{ $item->date_received }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ url('/courrier/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/courrier/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                       <form action="{{ url('/courrier' . '/' . $item->id) }}"  method="POST" accept-charset="UTF-8" style="display: inline"> 
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                          <a href="" title="Delete User"><button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"  aria-hidden="true"></i> Delete</button></a>
                                      </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
    
@endsection --}}