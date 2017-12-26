 <div class="col-md-3">
     <div class="sideBar">
         <div class="panel-group" id="accordion">
             @role('Admin')
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span> Account</a>
                     </h4>
                 </div>
                 <div id="collapseOne" class="panel-collapse collapse">
                     <div class="panel-body">
                         <table class="table">
                             <tr>
                                 <td>
                                     <a href="{{route('users.index')}}"><span class="fa fa-users"></span> View Users</a>
                                 </td>
                             </tr>
                                 <tr>
                                     <td>
                                         <a href="{{route('users.create')}}"><span class="fa fa-user-plus"></span> Add New User</a>
                                     </td>
                                 </tr>
                             <tr>
                                 <td>
                                     <a href="{{route('permissions.index')}}"><span class="fa fa-key"></span> Permissions</a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <a href="{{route('permissions.create')}}"><span class="fa fa-plus-circle"></span> Add New Permission</a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <a href="{{route('roles.index')}}"><span class="fa fa-ticket"></span> Roles</a>
                                 </td>
                             </tr>
                                 <tr>
                                     <td>
                                         <a href="{{route('roles.create')}}"><span class="fa fa-plus-circle"></span> Add New Role</a>
                                     </td>
                                 </tr>
                         </table>
                     </div>
                 </div>
             </div>
             @endrole

             @role('Warehouse')
             <div class="panel panel-primary">
                 <div class="panel-heading">
                     <h4 class="panel-title">
                         <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-shopping-bag">
                            </span> Orders</a>
                     </h4>
                 </div>
                 <div id="collapseOne" class="panel-collapse collapse">
                     <div class="panel-body">
                         <table class="table">
                             <tr>
                                 <td>
                                     <a href="{{route('orders.index')}}"><span class="fa fa-eye"></span> View Orders</a>
                                 </td>
                             </tr>
                         </table>
                     </div>
                 </div>
             </div>
             @endrole

         </div>
     </div>
 </div>
