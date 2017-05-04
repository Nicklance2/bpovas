@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group col-sm-12 col-md-5">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Search
                                </button>
                            </span>
                        </div>
                        <div class="text-center m-t-lg">
                           <div class="ibox float-e-margins">
                               <div class="ibox-title">
                                   <h5>Order History</h5>
                                   <div class="ibox-tools">

                                   </div>
                               </div>
                               <div class="ibox-content">

                                   <div class="table-responsive">
                                       <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                           <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                           <thead>
                                           <tr role="row">
                                               <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 289px;">Order #</th>
                                               <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 356px;">Address</th>
                                               <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 322px;">Company</th>
                                               <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 250px;">Order Type</th>
                                               <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 180px;">Order Fee</th></tr>
                                           </thead>
                                           <tbody class="text-left">
                                           <tr class="gradeA odd" role="row">
                                               <td class="sorting_1">BPO0000001</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Altisource</td>
                                               <td class="center">Interior</td>
                                               <td class="center">$9.00</td>
                                           </tr><tr class="gradeA even" role="row">
                                               <td class="sorting_1">BPO0000002</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Equator</td>
                                               <td class="center">Interior</td>
                                               <td class="center">$9.00</td>
                                           </tr><tr class="gradeA odd" role="row">
                                               <td class="sorting_1">BPO0000003</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Powerlink</td>
                                               <td class="center">Exterior</td>
                                               <td class="center">$7.00</td>
                                           </tr><tr class="gradeA even" role="row">
                                               <td class="sorting_1">BPO0000004</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Powerlink</td>
                                               <td class="center">Exterior</td>
                                               <td class="center">$7.00</td>
                                           </tr><tr class="gradeA odd" role="row">
                                               <td class="sorting_1">BPO0000005</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Single Source</td>
                                               <td class="center">Rental Addendum</td>
                                               <td class="center">$5.00</td>
                                           </tr><tr class="gradeA even" role="row">
                                               <td class="sorting_1">BPO0000006</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Consolidated</td>
                                               <td class="center">Rush (5 HRS)</td>
                                               <td class="center">$2.00</td>
                                           </tr><tr class="gradeA odd" role="row">
                                               <td class="sorting_1">BPO0000007</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>Consolidated</td>
                                               <td class="center">Rental Addendum</td>
                                               <td class="center">$5.00</td>
                                           </tr><tr class="gradeA even" role="row">
                                               <td class="sorting_1">BPO0000008</td>
                                               <td>Jefferson City, Alabama USA</td>
                                               <td>PCVM</td>
                                               <td class="center">Rush (5 HRS)</td>
                                               <td class="center">$2.00</td>
                                           </tr>
                                           </tbody>

                                       </table>

                                       </div>
                                   </div>

                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
