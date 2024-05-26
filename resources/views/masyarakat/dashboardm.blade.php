@extends('masyarakat.template')

@section('content')

<div class="card">
    <div class="card-header">
        
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <section class="description" style="background-color: #ecf0f1;padding: 20px;border-radius: 8px;">
            <h2 style="background-color: #1b3b40;color: white;padding: 10px;margin: 0 -20px 20px -20px;
            border-top-left-radius: 8px;border-top-right-radius: 8px;">Deskripsi</h2>
            <div class="info-box" style="background-color: white;padding: 20px;border: 1px solid #bdc3c7; border-radius: 8px;
            display: grid;grid-template-columns: auto 1fr;grid-row-gap: 10px;align-items: center;">
                <div class="info-row" style="display: contents;"><strong style="justify-self: end;margin-right: 10px;">Nama:</strong> EntFla</div>
                <div class="info-row" style="display: contents;"><strong style="justify-self: end;margin-right: 10px;">Email:</strong> EntFladda@gmail.com</div>
                <div class="info-row" style="display: contents;"><strong style="justify-self: end;margin-right: 10px;">Username:</strong> EntFladda</div>
                <div class="info-row" style="display: contents;"><strong style="justify-self: end;margin-right: 10px;">Role:</strong> Masyarakat</div>
            </div>
        </section>
    </div>
</div>
@endsection