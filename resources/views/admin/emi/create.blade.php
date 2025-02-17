@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media print {
                .btn {
                    display: none;
                }

                .sorting {
                    display: none;
                }

                .dataTables_length {
                    display: none;
                }

                .dataTables_filter {
                    display: none;
                }

                .dataTables_info {
                    display: none;
                }

                .dataTables_paginate {
                    display: none;
                }

                .n {
                    display: none;
                }

            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5>લોન EMI ફોર્મ</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>સભ્યપદ તા.</th>
                                        <th>શ્રીમાન:</th>
                                        <th>નંબર</th>
                                        <th>ગામ</th>
                                        <th>જિલ્લો</th>
                                        <th>સોસાયટી</th>

                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($EMILoan as $EMILoans)
                                        <tr>
                                            <td>{{ $EMILoans->id }}</td>
                                            <td>{{ $EMILoans->member_no }}</td>
                                            <td>{{ $user->where('id', '=', $EMILoans->login_id)->first()->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($EMILoans->member_date)) }}</td>
                                            <td>{{ $EMILoans->mr }}</td>
                                            <td>{{ $EMILoans->mobile_no_1 }}</td>
                                            <td>{{ $EMILoans->village }}</td>
                                            <td>{{ $EMILoans->city }}</td>
                                            <td>{{ $EMILoans->taluk }}</td>

                                            <td class="n">
                                                @if (Auth::user()->role_as == '1')
                                                    <a href="{{ url('admin/emi/' . $EMILoans->id . '/edit') }}"
                                                        class="btn btn-success">Edit</a>
                                                @else
                                                    &nbsp;
                                                @endif
                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/view') }}"
                                                    class="btn btn-primary">View</a>
                                                @if (Auth::user()->role_as == '1')
                                                    <a href="{{ url('admin/emi/' . $EMILoans->id . '/destroy') }}"
                                                        onClick="return confirm('શું તમે ખરેખર કાઢી નાખવા માંગો છો?')"
                                                        class="btn btn-danger">Delete</a>
                                                @else
                                                    &nbsp;
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
