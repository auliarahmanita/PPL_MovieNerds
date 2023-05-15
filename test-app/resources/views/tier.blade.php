@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman Tier</h1> --}}
    <h1 class="mb-5">{{ $title }}</h1>
        <div class="container">
            <div class="row">
                <table>
                    <tr>
                        <th>Tier</th>
                        <th>Name</th>
                        <th>Exp</th>
                    </tr>
                    @foreach ($tier as $tier_user)
                    <tr>
                        <td>
                                {{ $tier_user->tier->tier_name }}
                        </td>
                        <td>
                                {{ $tier_user->user->name }}
                        </td>
                        <td>
                                {{ $tier_user->exp }}
                        </td>
                    </tr>
                    @endforeach  
                </table>
            </div>
        </div>
@endsection