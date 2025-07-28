<div class="form-group">
    <label>Judul</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $project->title ?? '') }}" required>
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control" rows="4" required>{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>Lokasi</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $project->location ?? '') }}" required>
</div>

<div class="form-group">
    <label>Jenis Kontrak</label>
    <input type="text" name="contract_type" class="form-control" value="{{ old('contract_type', $project->contract_type ?? '') }}" required>
</div>

<div class="form-group">
    <label>Periode Kontrak</label>
    <input type="text" name="contract_period" class="form-control" value="{{ old('contract_period', $project->contract_period ?? '') }}" required>
</div>

<div class="form-group">
    <label>Tahun</label>
    <input type="number" name="year" class="form-control" value="{{ old('year', $project->year ?? '') }}" required>
</div>

<div class="form-group">
    <label>Logo Klien</label>
    <input type="file" name="client_logo" class="form-control-file">
    @if (!empty($project->client_logo))
        <img src="{{ asset('storage/' . $project->client_logo) }}" alt="Logo" width="100" class="mt-2">
    @endif
</div>
<div class="form-group">
    <label>Nama Klien</label>
    <input type="text" name="client_name" class="form-control" value="{{ old('client_name', $project->client_name ?? '') }}">
</div>


<div class="form-group">
    <label>Gambar Project</label>
    <input type="file" name="image" class="form-control-file">
    @if (!empty($project->image))
        <img src="{{ asset('storage/' . $project->image) }}" alt="Gambar" width="100" class="mt-2">
    @endif
</div>
