@extends('nilai/master')
@section('content')
	<div class="col-lg-12">
		<h1 class="text-center">Perhitungan Nilai</h1><br>
        <div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
            
                         {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

				<div class="card">
					<div class="card-body">
                        <form action="/nilai/hitung" method="post">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Nim</label>
                                    <input class="form-control" type="text" name="nim">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Mata Kuliah</label>
                                    <input class="form-control" type="text" name="matakuliah">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai Tugas</label>
                                            <input class="form-control" type="text" name="tugas">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai UTS</label>
                                            <input class="form-control" type="text" name="uts">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai UAS</label>
                                            <input class="form-control" type="text" name="uas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Hitung">
                                </div>
                        </form>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
		
	</div>
@endsection
