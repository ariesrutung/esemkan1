<section class="content">
    <div class="container-fluid">
        <div class="row">
            @foreach ($sections as $name => $section)
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ ucfirst($name) }}</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.home.updateSection', ['section' => $name]) }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach ($section as $key => $value)
                                <div class="col-md-6 mb-3">
                                    <label for="{{ $key }}" class="form-label">{{ ucfirst(str_replace('_', ' ', $key))
                                        }}</label>
                                    <input type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}"
                                        class="form-control">
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan {{ ucfirst($name) }}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>