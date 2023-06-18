<x-app-layout>
    <x-slot name="slot">
        <div class="breadcrumb">
            <h1>AR Rajab Bekam</h1>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li>Dashboard</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-lg-7 col-md-12">
                <!-- CARD ICON -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-Doctor"></i>
                                <p class="text-muted mt-2 mb-2">Total Pasien</p>
                                <p class="text-primary text-24 line-height-1 m-0"> {{$patientData->count()}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-Files"></i>
                                <p class="text-muted mt-2 mb-2">Total Rekam Medis</p>
                                <p class="text-primary text-24 line-height-1 m-0"> {{ $medicalRecordData->count() }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-Money-2"></i>         
                                <p class="text-muted mt-2 mb-2">Total Pembayaran</p>
                                <p class="text-primary text-24 line-height-1 m-0">Rp {{ $medicalRecordPaymentToday }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-Business-ManWoman"></i>                    
                                <p class="text-muted mt-2 mb-2">Pasien Hari ini</p>
                                <p class="text-primary text-24 line-height-1 m-0">{{$patientToday}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-File-Cloud"></i>                    
                                <p class="text-muted mt-2 mb-2">Rekam Medis Hari ini</p>
                                <p class="text-primary text-24 line-height-1 m-0">{{$medicalRecordToday}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-icon mb-4">
                            <div class="card-body text-center">
                                <i class="i-Money-2"></i>                    
                                <p class="text-muted mt-2 mb-2">Total Pembayaran Hari ini</p>
                                <p class="text-primary text-24 line-height-1 m-0">Rp {{$medicalRecordPaymentToday}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Rekapan Bulan Lalu - {{ Carbon\Carbon::now()->subMonth()->format("M") }}</div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead class="card-header">
                                        <tr>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pasien</td>
                                            <td class="font-weight-bold text-success">{!! $patientMonth !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Rekam Medis</td>
                                            <td class="font-weight-bold  text-success">{!! $medicalRecordMonth !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Biaya Konsultasi</td>
                                            <td class="font-weight-bold  text-success">Rp {!! $medicalRecordPaymentMonth !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of row-->
        <div class="row">
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header">
                        <h3 class="w-50 float-start card-title m-0">Pasien Baru Hari ini</h3>
                        <div class="dropdown dropleft text-end w-50 float-end">
                            <button class="btn bg-gray-700" type="button" id="dropdownMenuButton_table2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon i-Gear-2"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table2">
                                <a class="dropdown-item" href="#">Add new user</a>
                                <a class="dropdown-item" href="#">View All users</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="table-responsive">

                            <table id="user_table" class=" table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No Telp</th>
                                        <th scope="col">Umur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($patientDataToday as $patient)
                                    <tr>
                                        <th scope="row">{{$patient->id}}</th>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->phoneNo}}</td>
                                        <td>{{$patient->age}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->

            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header">
                        <h3 class="w-50 float-start card-title m-0">Rekam Medis Hari Ini</h3>
                        <div class="dropdown dropleft text-end w-50 float-end">
                            <button class="btn bg-gray-700" type="button" id="dropdownMenuButton_table_1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon i-Gear-2"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table_1">
                                <a class="dropdown-item" href="#">Add new user</a>
                                <a class="dropdown-item" href="#">View All users</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="table-responsive">

                            <table id="sales_table" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Pasien</th>
                                        <th scope="col">Terapis</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($medicalRecordDataToday as $medicalRecord)
                                    <tr>
                                        <th scope="row">{{$patient->id}}</th>
                                        <td>{{$medicalRecord->patient->name}}</td>
                                        <td>{{$medicalRecord->terapis}}</td>
                                        <td>{{$medicalRecord->action}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <!-- end of row-->
    </x-slot>
    <x-slot name="pagejs">
        <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
        <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
        <script src="{{asset('assets/js/es5/dashboard.v2.script.js')}}"></script>
    </x-slot>
    <x-slot name="pagecss">
    </x-slot>
    <x-slot name="bottomjs">
    </x-slot>
</x-app-layout>