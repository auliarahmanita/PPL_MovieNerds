@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman Tier</h1> --}}
    <h1>Leaderboard</h1>
        <div class="container">
            <div class="row">
                <table>
                    <tr>
                        <th>Peringkat</th>
                        <th>Name</th>
                        <th>Poin</th>
                        <th>Tingkat</th>

                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                                {{$user->name }}
                        </td>
                        <td>
                                {{ $user->exp }}
                        </td>
                        <td>
                            {{ $user->tier->tier_name }}
                        </td>
                    </tr>
                    @endforeach  
                </table>
            </div>
        </div>
@endsection