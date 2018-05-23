<div class="form-title-row">
    <h1>Surat Rekomendasi Pengajuan Magang</h1>
</div>
<div class="form-row">
    <div class="form-group{{ $errors->has('tujuan') ? ' has-error' : '' }}">
        <label for="nama" class="col-md-12 control-label">Surat Ditujukan Kepada</label>
        <div class="col-md-6">
            <input id="tujuan" type="text" class="form-control" name="tujuan" placeholder="Jabatan">
        </div>
    </div>
    <div class="form-group{{ $errors->has('nama_per') ? ' has-error' : '' }}">
        <label for="" class="col-md-12 control-label">Nama Perusahaan</label>
        <div class="col-md-6">
            <input id="" type="text" class="form-control" name="nama_per">
        </div>
    </div>
    <div class="form-group{{ $errors->has('alamat_per') ? ' has-error' : '' }}">
        <label for="" class="col-md-12 control-label">Alamat Perusahaan</label>
        <div class="col-md-12">
            <input id="" type="text" class="form-control" name="alamat_per">
        </div>
    </div>
    <input type="hidden" name="status" value="1">
</div>
<div class="form-row">
    <button type="next" style="cursor: pointer;">Send</button>
</div>