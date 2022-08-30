@extends('nilai/master')
@section('content')
	<div class="col-lg-12">
		<h1 class="text-center">Hasil Perhitungan</h1><br>
        <div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
                                <h5>Nama: {{ $nama }}</h5>
                                <h5>Nim: {{ $nim }}</h5>
                                <h5>Matakuliah: {{ $matakuliah }}</h5>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai Akhir Tugas</label>
                                            <input class="form-control" type="text" name="tugas" value={{ $ntugas }}>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai Akhir UTS</label>
                                            <input class="form-control" type="text" name="uts" value={{ $nuts }}>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="usia">Nilai Akhir UAS</label>
                                            <input class="form-control" type="text" name="uas" value={{ $nuas }}>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="usia">Nilai Akhir</label>
                                    <input class="form-control" type="text" name="na" value={{ $na }}>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="usia">Nilai Huruf</label>
                                    <input class="form-control" type="text" name="huruf" value={{ $huruf }}>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <a href="/nilai"><input class="btn btn-primary" type="submit" value="Kembali"></a>
                                </div>
                        </form>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
		
	</div>
@endsection
