@extends('layout.master')

@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
        
            <div class="col-6">
                <h1>Edit Data Siswa</h1>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                            <form action="/siswa/{{$siswa->id}}/update" method="post">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="Firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" value="{{$siswa->firstname}}">
                                </div>
                                <div class="form-group">
                                    <label for="Firstname">Lastname</label>
                                    <input type="text" class="form-control" name="lastname" value="{{$siswa->lastname}}">
                                </div>
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="Pria" @if ($siswa->gender == 'Pria')selected @endif>Pria</option>
                                        <option value="Wanita" @if ($siswa->gender == 'Wanita')selected @endif>Wanita</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3">{{$siswa->alamat}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </form>
                            </div>
            </div>  

        
</body>
</html>

@endsection