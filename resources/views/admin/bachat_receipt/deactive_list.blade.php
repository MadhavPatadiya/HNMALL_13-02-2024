@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત નિષ્ક્રિય એકાઉન્ટ સૂચિ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક બચત
                                    પહોંચ

                                </a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત નિષ્ક્રિય એકાઉન્ટ સૂચિ
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <style>
                                .ani {
                                    box-shadow: inset 0 0 0 0 #000000;
                                    color: #000000;
                                    padding: 0 .25rem;
                                    margin: 0 -.25rem;
                                    transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
                                }

                                .ani:hover {
                                    color: #fff;
                                    box-shadow: inset 250px 0 0 0 #000000;
                                }

                                /* Presentational styles */
                                .ani {
                                    color: #000000;
                                    font-family: 'Poppins', sans-serif;
                                    font-size: 27px;
                                    font-weight: 500;
                                    line-height: 2;
                                    text-decoration: none;
                                }
                            </style>
                            <div class="col-12">
                                <h5 class="ani">માસિક બચત નિષ્ક્રિય એકાઉન્ટ સૂચિ
                                </h5>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>નામ</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($bachats as $bachat)
                                        <tr>
                                            <td>{{ $bachat->id }}</td>
                                            <td>{{ $bachat->member_no }}</td>
                                            <td>{{ $user->where('id', '=', $bachat->login_id)->first()->name }}</td>
                                            <td>{{ $bachat->mr }}</td>
                                            <td>{{ $bachat->status }}</td>
                                            <td>
                                                <a href="{{ url('admin/bachat/' . $bachat->id . '/view') }}"
                                                    class="btn btn-primary">View</a>
                                                <a href="{{ url('admin/debit-receipt/' . $bachat->id . '/view') }}"
                                                    class="btn btn-primary">પહોંચ </a>
                                                <a href="{{ url('admin/bachat-receipt/' . $bachat->id . '/deactived_receipt') }}"
                                                    class="btn btn-primary">રદ પહોંચ </a>
                                                <a href="{{ url('admin/bachat-receipt/' . $bachat->id . '/joining_fees') }}"
                                                    class="btn btn-dark">Joining Fees</a>
                                                <a href="{{ url('admin/bachat-receipt/' . $bachat->id . '/statement') }}"
                                                    class="btn btn-info">Statements</a>
                                                @if (Auth::user()->role_as == '1')
                                                    <a href="{{ url('admin/bachat/' . $bachat->id . '/delete') }}"
                                                        onClick="return confirm('શું તમે ખરેખર કાઢી નાખવા માંગો છો?')"
                                                        class="btn btn-danger">Delete</a>
                                                @else
                                                    &nbsp;
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No Account's Available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
