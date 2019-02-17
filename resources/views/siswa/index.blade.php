@extends('layout.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row" style="margin-top:5px">
        
            <div class="col-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-6">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">
                        Tambah data
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <form action="/siswa/create" method="post">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="Firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname">
                                </div>
                                <div class="form-group">
                                    <label for="Firstname">Lastname</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname">
                                </div>
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                                </div>
                                
                            
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa -> firstname }}</td>
                    <td>{{ $siswa -> lastname }}</td>
                    <td>{{$siswa->gender}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini ingin dihapus ?')">Delete</a>
                    </td>
                </tr>
            @endforeach  
            </tbody>
        </table>
        </div> 

        
</body>
</html>

@endsection