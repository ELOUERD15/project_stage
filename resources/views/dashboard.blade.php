
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Gestion Bureau D'ordre</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- @extends('admin.layout')
    @section('content') --}}
    <div class="container"><br/><br/>
    <div class="row">
    <p><h3>Hello :  {{ Auth::user()->name }} </h3> </p>

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
                                 <th>objet</th>
                                 <th>expediteur</th>
                                 <th>distinataire</th>
                                 <th>date_envoi</th>
                                
                             </tr>
                            </thead>
                            <tbody>
                                @foreach ($courriers as $item)
                                    
                              
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->objet }}</td>
                                    <td>{{ $item->expediteur }}</td>
                                    <td>{{ $item->distinataire }}</td>
                                    <td>{{ $item->date_envoi }}</td>
                                    {{-- <td>1</td>
                                    <td>jkjk</td>
                                    <td>uhu</td>
                                    <td>url</td>
                                    <td>mk/21/22</td> --}}
                                
                                   
                                    <td>
                                        
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

    </div>
    </div>
    @yield('content')
</body>
</html>