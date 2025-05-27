@extends('wp-admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Identitas SMK Negeri 1 Manokwari</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sch.identity.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            @foreach ($identity->chunk(4) as $row)
                            <div class="row">
                                @foreach ($row as $key => $value)
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                                    <input type="text" name="identity[{{ $key }}]" value="{{ $value }}"
                                        class="form-control">
                                </div>
                                @endforeach
                            </div>
                            @endforeach

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection