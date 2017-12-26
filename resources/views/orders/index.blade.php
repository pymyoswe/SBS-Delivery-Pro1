@extends('layouts.app')
@section('title')
    Order
    @endsection
@section('content')
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive jTable">
            <thead>
            <!--test sample data-->
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Warehouse</th>
                    <th>Destination</th>
                    <th>Order Series</th>
                    <th>Region To</th>
                    <th>Dispatch Date</th>
                    <th>Complete Date</th>
                    <th>Order Item</th>
                    <th>View Detail</th>
                    <!--<th>Item Description</th>
                    <th>Quantity</th>
                    <th>Weight</th>
                    <th>Total Weight</th>
                    <th>Full</th>
                    <th>Loose</th>
                    <th>Pic</th>
                    <th>Remark</th>-->
                </tr>
            </thead>
            <tbody>
            <!--foreach()-->
                    <tr>
                        <td>10013138271</td>
                        <td>Aung Min Myat</td>
                        <td>YGN</td>
                        <td>Pakokku</td>
                        <td>1</td>
                        <td>U</td>
                        <td>1/Dec/17</td>
                        <td></td>
                        <td>600000000-00002</td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">More Info</button>
                        </td>
                    </tr>

                    <tr>
                        <td>10013138271</td>
                        <td>Aung Min Myat</td>
                        <td>YGN</td>
                        <td>Pakokku</td>
                        <td>1</td>
                        <td>U</td>
                        <td>1/Dec/17</td>
                        <td></td>
                        <td>600000000-00003</td>
                        <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">More Info</button></td>
                    </tr>

                    <tr>
                        <td>10013138719</td>
                        <td>Aung Ko Thet</td>
                        <td>YGN</td>
                        <td>Mawlamyine</td>
                        <td>1</td>
                        <td>L</td>
                        <td>1/Dec/17</td>
                        <td></td>
                        <td>600000000-00003</td>
                        <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">More Info</button></td>
                    </tr>
            </tbody>
        </table>
    </div>


    <!--foreach()-->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    @endsection