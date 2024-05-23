@extends('layouts.app')

@section('content')
  
    <!-- /.content-header -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Employee Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary"  style="margin-left:250px; margin-right:250px;">
              <div  style="Background-color:lightblue; color:black" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form  style="padding:20px; " method="POST" action="{{ url('employee') }}">
              {{ csrf_field() }}
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fname">
                    @error ('firstname') <span class="text-danger">{{ $message }}</span>  @enderror
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="mname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" required autocomplete="lname" id="exampleInputPassword1" name="lname">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="address" >
                  </div>

                  <div class="form-group">

                  <label for="exampleInputPassword1">Country</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="country"  placeholder="Please select your Country">
                    <option>Please select your Country</option>
                    <option>Philippines</option>
                    <option>China</option>
                  </select>

                  </div>


                  <div class="form-group">

                  <label for="exampleInputPassword1">State</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"  name="state" placeholder="Please select your State">
                    <option>Please select your State</option>
                    <option>Manila</option>
                    <option>Bangkok</option>
                  </select>

                  </div>


                  <div class="form-group">

                  <label for="exampleInputPassword1">City</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="city"   placeholder="Please select your City">
                    <option>Please select your City</option>
                    <option>Mald</option>
                    <option>Sanfernando</option>
                  </select>

                  </div> 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="zip">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="age">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" name="bdate">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="Date"  class="form-control" id="exampleInputPassword1" name="dhired">
                  </div>



                  
                  <div class="form-group">

                  <label for="exampleInputPassword1">Department</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="dept"  placeholder="General Management">
                    <option>General Management</option>
                    <option>IT</option>
                    <option>HM</option>

                  </select>

                  
                  <label for="exampleInputPassword1">Division</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder" name="div"  placeholder="General Management">
                  <option>Division</option>
                    <option>City</option>
                    <option>Like</option>

                  </select>

                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
@endsection