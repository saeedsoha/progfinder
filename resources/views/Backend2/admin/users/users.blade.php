@extends('Backend/admin/index_master')
@section('admin')

    <div class="row">
        <div class="col-lg-12  grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Users Table</h4>
                <p class="card-description"> All Users <code> {{$usersCount}} </code>
                </p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Profile</th>
                        <th>VatNo.</th>
                        <th>Created</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)                        
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->created_at->format('d M Y')}}</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                         @endforeach


                      <tr>
                        <td>Messsy</td>
                        <td>53275532</td>
                        <td>15 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>53275533</td>
                        <td>14 May 2017</td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>53275534</td>
                        <td>16 May 2017</td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>20 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>




      
@endsection