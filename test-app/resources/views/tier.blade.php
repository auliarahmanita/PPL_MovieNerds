@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/tierlist.css') }}">
<section class="peringkat">
        <div class="my-width">
            <div class="title-section">
                <p>Peringkat</p>
            </div>
            <div class="garis-section"></div>
            <div class="karesel">
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>Pengguna</th>
                                <th>Poin</th>
                                <th>Tingkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$user->name }}</td>
                                <td>{{ $user->exp }}</td>
                                <td>{{ $user->tier->tier_name }}</td>
                            </tr>
                            @endforeach 
                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection