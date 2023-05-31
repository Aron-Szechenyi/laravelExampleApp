@extends('layout')
@section('title')
    Company grid
@endsection



@section('header')
    <x-logout-form/>
@endsection

@section('content_left')
    @isset($feedback)
        <h5 class="text-center text-success">{{$feedback}}</h5>
    @endisset
    <div>
        <form action="{{route('companyGetForm')}}" method="get">
            <input class="btn-success" type="submit" value="Create new">
        </form>
    </div>
    <table class="table text-white table-borderless">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Tax number</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{$company->id}}</th>
                <td>{{$company->companyName}}</td>
                <td>{{$company->taxNumber}}</td>
                <td>
                    <form action="{{route('companyList',['company'=>$company->id])}}" method="post">
                        @csrf
                        <input class="btn-secondary" type="submit" value="Details">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


@section('content_right')
    <div class="container-fluid">
        @isset($companyDetails)
            <div class="bg-black m-lg-5 p-4">
                @if($errors->any())
                    <div class="text-danger text-start">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        @endisset
                        <form method="post" action="{{route('companyUpdate')}}">
                            @csrf
                            <table class="table table-borderless text-white">
                                <tbody>
                                <x-table-row name="companyName" type="text" max="30"
                                             th="Company name">{{old('companyName',$companyDetails->companyName)}}</x-table-row>
                                <x-table-row name="taxNumber" type="text" max="25"
                                             th="Tax number">{{old('companyName',$companyDetails->taxNumber)}}</x-table-row>
                                <x-table-row name="phoneNumber" type="tel" max="20"
                                             th="Phone number">{{old('phoneNumber',$companyDetails->phoneNumber)}}</x-table-row>
                                <x-table-row name="emailAddress" type="email" max="30"
                                             th="Email address">{{old('emailAddress',$companyDetails->emailAddress)}}</x-table-row>
                                </tbody>
                            </table>
                            <input type="hidden" value="{{$companyDetails->id}}" name="Id">
                            <input class="btn-warning" type="submit" value="Update">
                        </form>
                        <form class="mt-2" method="post" action="{{route('companyDelete')}}">
                            @csrf
                            <input type="hidden" value="{{$companyDetails->id}}" name="Id">
                            <input class="btn-danger" type="submit" value="delete"
                                   onclick="return confirm('are you really want to delete this?')">
                        </form>
                    </div>
            </div>
        @endisset
        @isset($newCompany)
            <div class="bg-black m-lg-5 p-4">
                @if($errors->any())
                    <div class="text-danger text-start">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endisset
                <form method="post" action="{{route('companyCreate')}}" class="">
                    @csrf
                    <table class="table table-borderless text-white">
                        <tbody>
                        <x-table-row name="companyName" type="text" max="30"
                                     th="Company name">{{old('companyName')}}</x-table-row>
                        <x-table-row name="taxNumber" type="text" max="25"
                                     th="Tax number">{{old('taxNumber')}}</x-table-row>
                        <x-table-row name="phoneNumber" type="tel" max="20"
                                     th="Phone number">{{old('phoneNumber')}}</x-table-row>
                        <x-table-row name="emailAddress" type="email" max="30"
                                     th="Email address">{{old('emailAddress')}}</x-table-row>
                        <td>
                            <input class="btn-success" type="submit" value="Create">
                        </td>
                        </tbody>
                    </table>
                </form>
            </div>
    @endisset
@endsection
