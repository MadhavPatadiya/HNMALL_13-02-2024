@extends('layouts.admin')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin/assets/css/boot.css">
        <title></title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
        <style>
            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #g2 {
                padding-left: 0%;
                border: 5px solid black;
            }

            #g1 {
                padding-left: 0%;
                border: 5px solid black;
            }

            .h3 {
                border: 3px solid black;
                border-radius: 30px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 30px;
                font-weight: 700;
            }

            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 5px;

            }

            #i1 img {
                margin-left: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 0px;

            }

            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
            }

            .r-f {
                text-align: center;
                padding-right: 100px;
            }

            .p2 {
                text-align: end;
            }

            #w2 {
                font-size: 21px;
                font-weight: 900;
            }

            .p3 {
                font-size: 20px;
                text-align: center;
                font-weight: 700;
            }

            #heading {
                border-bottom: 3px solid black;
            }

            #w3 {
                font-size: 13px;
                font-weight: 400px;

            }

            h1 {
                text-align: center;
                font-size: 70px;
                /* border: 1px solid black; */
                /* border-radius: 20px; */
                /* background-color: black; */
                color: black;
                font-weight: 1000;
            }

            h4 {
                text-align: center;
                border: 1px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                margin-bottom: 35px;
                margin-top: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .img-fit {
                width: 60%;
                height: 220px;
                object-fit: cover;
                object-position: center;
            }

            .dis-member_no {
                border: 3px solid black;
                border-radius: 10px;
                text-align: center;
                justify-content: center;
                width: 100%;
                margin-left: 7PX;
                font-size: 30px;

                font-weight: 900;
            }

            .dis-member_date {
                border: 3px solid black;
                border-radius: 10px;
                text-align: center;
                justify-content: center;
                width: 100%;
                margin-left: 7PX;
                font-size: 22px;

                font-weight: 900;
            }

            .h-f {
                font-size: 20px;
                margin-bottom: 0px;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 85%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-age {
                border: none;
                border-bottom: 1px solid black;
                width: 30%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 81%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 70%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-member_business {
                border: none;
                border-bottom: 1px solid black;
                width: 58%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-mobile_no_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 84%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-mobile_no_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 84%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 74%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-jaminu_nam {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-mobile_no_3 {
                border: none;
                border-bottom: 1px solid black;
                width: 55%;
                /* margin-left: 10PX; */
                font-size: 20px;
                font-weight: 800;
            }

            .dis-jamin_member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 52%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-product_name {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-price {
                border: none;
                border-bottom: 1px solid black;
                width: 82%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-down_payment {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-loan_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-loan_time_period {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-Interest_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-total_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 58%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-monthly_emi {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            /* cash */
            .dis-loan_amount_cash {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-loan_time_period_cash {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-Interest_amount_cash {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-total_amount_cash {
                border: none;
                border-bottom: 1px solid black;
                width: 57%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-monthly_emi_cash {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .sign1 {
                width: 100px;
                height: 50px;
                object-position: center;
            }

            .fonts {
                font-size: 20px;
                font-weight: 800;
            }

            .fonts2 {
                font-size: 19px;
                font-weight: 800;
            }

            #sahi {
                margin-top: 15px;

            }

            .border-t {
                border-top: 2px solid black;
                margin-top: 3px;
            }

            .bbb {
                text-align: center;

            }

            .custom-line {
                border-top: 4px solid black;
            }

            .line1 {
                border-bottom: 3px solid black;

            }

            .line2 {
                border-top: 3px solid black;

            }

            .page-body {
                background-color: white;
            }

            @media print {
                .but {
                    display: none;
                }

                .tap-top {
                    display: none !important;
                }

                .page-body {
                    margin: 10px 0px 0px 0px !important;
                }

            }
        </style>

    </head>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ - View</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/emi/create') }}">લોન EMI ફોર્મ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ - View </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="">
                            <div class="">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-6 mt-1">
                                            <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                        </div>

                                    </div>
                                    <div class="row" id="heading">
                                        <div class="col-3" id="i1"> <img
                                                src="{{ asset('admin/assets/images/image.jpg') }}" height="120px"
                                                width="90px"></div>

                                        <div class="col-6">
                                            <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}" width="100%">

                                            {{-- <h1>
                                                <b class="fonts">એચ.એન.મોલ</b>
                                            </h1> --}}
                                            <b class="fonts">
                                                <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                    મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                            </b>
                                        </div>
                                        <div class="col-3" id="i2"> <img
                                                src="{{ asset('admin/assets/images/HN.jpg') }}" height="120px"
                                                width=""></div>
                                    </div>
                                    <center>
                                        <h4 class="h3 mt-2">લોન EMI ફોર્મ</h4>
                                    </center>

                                    <div class="row">
                                        <div class="col-2">
                                            <div class="row row-1">
                                                <div class="col-12">
                                                    <label class="l-1" style="width: 100%">
                                                        <p class="h-f" style="text-align: center" id="w2">
                                                            <b class="fonts">સભ્યપદ
                                                                નં.</b>
                                                        </p>
                                                        <input class="dis-member_no" readonly type="text"
                                                            value="{{ $EMILoan->member_no }}">
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12"><label class="l-1" style="width: 100%">
                                                        <p class="h-f" style="text-align: center" id="w2">
                                                            <b class="fonts">સભ્યપદ
                                                                તા.</b>
                                                        </p>
                                                        <input class="dis-member_date" readonly type="text"
                                                            value="{{ date('d/m/Y', strtotime($EMILoan->member_date)) }}">
                                                    </label><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="row photo justify-content-center">
                                                    <div class="col-4" id="photo1">
                                                        @if ($EMILoan->member_image)
                                                            <img src="{{ asset('uploads/emi/member_image/' . $EMILoan->member_image) }}"
                                                                width="150px" class="img-fit" id="g1" />
                                                        @else
                                                            <img src="{{ asset('assets/white.png') }}" class="img-fit"
                                                                id="g2">
                                                        @endif
                                                        <p class="r-f" id="w3"><b class="fonts">સભ્યનો ફોટો</b>
                                                        </p>
                                                    </div>
                                                    <div class="col-4" id="photo1">
                                                        @if ($EMILoan->heir_image)
                                                            <img src="{{ asset('uploads/emi/heir_image/' . $EMILoan->heir_image) }}"
                                                                width="150px" class="img-fit" id="g2" />
                                                        @else
                                                            <img src="{{ asset('assets/white.png') }}" class="img-fit"
                                                                id="g2">
                                                        @endif
                                                        <p class="r-f" id="w3"><b class="fonts2">વારસદારનો
                                                                ફોટો</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row line2">
                                        <div class="col-6 mt-2">
                                            <label style="width: 100%"><b class="fonts">શ્રી,</b> <input class="dis-mr"
                                                    readonly type="text" value="{{ $EMILoan->mr }}">
                                            </label>
                                        </div>
                                        <div class="col-2 mt-2">
                                            <label style="width: 100%"><b class="fonts">ઉંમર:</b><input class="dis-age"
                                                    readonly type="text" value="{{ $EMILoan->age }}">
                                            </label>
                                        </div>
                                        <div class="col-4 mt-2">
                                            <label style="width: 100%"><b class="fonts">ગામ:</b><input
                                                    class="dis-village" readonly type="text"
                                                    value="{{ $EMILoan->village }}">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row A">
                                        <div class="col-4 mt-2">
                                            <label style="width: 100%"><b class="fonts">સરનામુ: </b> <input
                                                    class="dis-address" readonly type="text"
                                                    value="{{ $EMILoan->address }}">
                                            </label>
                                        </div>
                                        <div class="col-4 mt-2">
                                            <label style="width: 100%"><b class="fonts">સોસાયટી: </b> <input
                                                    class="dis-taluk" readonly type="text"
                                                    value="{{ $EMILoan->taluk }}">
                                            </label>
                                        </div>
                                        <div class="col-4 mt-2">
                                            <label style="width: 100%"><b class="fonts">જીલ્લો: </b><input
                                                    class="dis-city" readonly type="text"
                                                    value="{{ $EMILoan->city }}"></label>
                                        </div>
                                    </div>

                                    <div class="row A mt-2">
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts">સભ્યનો ધંધો:</b> <input
                                                    class="dis-member_business" readonly type="text"
                                                    value="{{ $EMILoan->member_business }}">
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts">મો:</b> <input
                                                    class="dis-mobile_no_1" readonly type="text"
                                                    value="{{ $EMILoan->mobile_no_1 }}">
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts">મો:</b> <input
                                                    class="dis-mobile_no_2" readonly type="text"
                                                    value="{{ $EMILoan->mobile_no_2 }}">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row line1 mt-2">
                                        <div class="col-6 mb-2">
                                            <label style="width: 100%"><b class="fonts">જામીનું નામ :</b>
                                                <input class="dis-jaminu_nam" readonly type="text"
                                                    value="{{ $EMILoan->jaminu_nam }}">
                                            </label>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <label style="width: 100%"> <b class="fonts">મો :</b>
                                                <input class="dis-mobile_no_3" readonly type="text"
                                                    value="{{ $EMILoan->mobile_no_3 }}">
                                            </label>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <label style="width: 100%"><b class="fonts">સભ્યપદ નં.</b>
                                                <input class="dis-jamin_member_no" readonly type="text"
                                                    value="{{ $EMILoan->jamin_member_no }}">
                                            </label>
                                        </div>
                                    </div>
                                    <h2 class="mt-2"> <b class="fonts">લોન</b>
                                    </h2>

                                    <div class="row line2 mb-2">
                                        <div class="col-6 mt-2"
                                            style="{{ $EMILoan->product_name === null ? 'display: none;' : '' }}">
                                            <label style="width: 100%"><b class="fonts">Product Name :</b>
                                                <input class="dis-product_name" readonly type="text"
                                                    value="{{ $EMILoan->product_name }}">
                                            </label>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <label style="width: 100%"> <b class="fonts">કિંમત :</b>
                                                <input class="dis-price" readonly type="text"
                                                    value="{{ $EMILoan->price }}">
                                            </label>
                                        </div>

                                        <div class="col-6 mt-2"
                                            style="{{ $EMILoan->down_payment === null ? 'display: none;' : '' }}">
                                            <label style="width: 100%"><b class="fonts">ડાઉન પેમેન્ટ :
                                                </b> <input class="dis-down_payment" readonly type="text"
                                                    value="{{ $EMILoan->down_payment }}">
                                            </label>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <label style="width: 100%"><b class="fonts">લોનની રકમ :
                                                </b> <input class="dis-loan_amount" readonly type="text"
                                                    value="{{ $EMILoan->loan_amount }}">
                                            </label>
                                        </div>
                                        {{-- <div class="col-6 mt-2">
                                            <label style="width: 100%"><b class="fonts"> લોનનો સમયગાળો :</b>
                                                <input class="dis-loan_time_period" readonly type="text"
                                                    value="{{ $EMILoan->loan_time_period }}">
                                            </label>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <label style="width: 100%"><b class="fonts">વ્યાજ :
                                                </b> <input class="dis-Interest_amount" readonly type="text"
                                                    value="{{ $EMILoan->Interest_amount }}">
                                            </label>
                                        </div>
                                        <div class="col-6 mt-2 mb-2">
                                            <label style="width: 100%"><b class="fonts">લોનની રકમ + વ્યાજ :</b>
                                                <input class="dis-total_amount" readonly type="text"
                                                    value="{{ $EMILoan->total_amount }}">
                                            </label>
                                        </div>

                                        <div class="col-6 mt-2 mb-2">
                                            <label style="width: 100%"><b class="fonts">માસિક EMI :</b>
                                                <input class="dis-monthly_emi" readonly type="text"
                                                    value="{{ $EMILoan->monthly_emi }}">
                                            </label>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="custom-line"></div>
                                            <div style="font-weight: 500; border-bottom: 1px solid black;">Cash Loan
                                            </div>
                                            <div class="row">
                                                <div class="col-6 mt-2 mb-2">
                                                    <label style="width: 100%">લોનની રકમ :
                                                        <input class="dis-loan_amount_cash" readonly type="text"
                                                            value="{{ $EMILoan->loan_amount_cash }}">
                                                    </label>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <label style="width: 100%">લોનનો સમયગાળો :
                                                        <input class="dis-loan_time_period_cash" readonly type="text"
                                                            value="{{ $EMILoan->loan_time_period_cash }}">
                                                    </label>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <label style="width: 100%">વ્યાજ :
                                                        <input class="dis-Interest_amount_cash" readonly type="text"
                                                            value="{{ $EMILoan->Interest_amount_cash }}">
                                                    </label>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <label style="width: 100%">લોનની રકમ + વ્યાજ :
                                                        <input class="dis-total_amount_cash" readonly type="text"
                                                            value="{{ $EMILoan->total_amount_cash }}">
                                                    </label>
                                                </div>
                                                <div class="col-6 mt-2 mb-2">
                                                    <label style="width: 100%">માસિક EMI :
                                                        <input class="dis-monthly_emi_cash" readonly type="text"
                                                            value="{{ $EMILoan->monthly_emi_cash }}">
                                                    </label>
                                                </div>
                                            </div> --}}




                                    {{-- <div class="custom-line"></div> --}}

                                    <div class="row bbb custom-line">
                                        <div class="col-4 mt-2">
                                            @if ($EMILoan->member_sign_image)
                                                <img src="{{ asset('uploads/emi/member_sign_image/' . $EMILoan->member_sign_image) }}"
                                                    width="100px" class="sign1" /><br>
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            <label class="border-t" id="w3">
                                                <b class="fonts">સભ્યની સહી</b>
                                            </label>

                                        </div>
                                        <div class="col-4 mt-2">
                                            @if ($EMILoan->jamin_sign_image)
                                                <img src="{{ asset('uploads/emi/jamin_sign_image/' . $EMILoan->jamin_sign_image) }}"
                                                    width="100px" class="sign1" /><br>
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            <label class="border-t" id="w3">
                                                <b class="fonts">વારસદારની સહી</b>
                                            </label>
                                        </div>
                                        <div class="col-4 mt-2">
                                            @if ($EMILoan->jjg_sign_image_2)
                                                <img src="{{ asset('uploads/emi/jjg_sign_image_2/' . $EMILoan->jjg_sign_image_2) }}"
                                                    width="100px" class="sign1" /><br>
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            <label class="border-t" id="w3">
                                                <b class="fonts">એચ.એન.મોલ વતી</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="but">
                                <center> <button style="width:100px" class="btn btn-sm btn-success but m-3"
                                        onclick="window.print();return false;">Print</button> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
