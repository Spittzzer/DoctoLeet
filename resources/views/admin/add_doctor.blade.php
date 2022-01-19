<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            padding-left: 50px;
        }

        .upload {
            padding: 15px;
            margin-top: 10px;
            display: inline;
            margin-left: 110px;
        }

        input[type="submit"] {
            margin-left: 70px;
        }

        form {
            margin-right: 200px;
        }
    </style>

    @include('admin.css')

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">









            <div class="container" align="center" style="padding-top:100px">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}



                </div>








                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label for="name">Doctor Name</label>
                        <input id="name" type="text" name="name" placeholder="Doctor's Name" style="color:black" required>




                    </div>
                    <div style="padding:15px;">
                        <label for="number">phone Number</label>
                        <input id="number" type="number" name="number" placeholder="Phone Number" style="color:black" required>




                    </div>
                    <div style="padding:15px;">
                        <label for="speciality">Speciality</label>
                        <select name="speciality" id="" style="color: black;width:220px" required>
                            <option value="">--Select--</option>
                            <option value="General-Health">General Health</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Dental">Dental</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Orthopaedics">Orthopaedics</option>


                        </select>




                    </div>
                    <div style="padding:15px;">
                        <label for="">Room Number</label>
                        <input id="room" type="number" name="room" placeholder="Room Number" style="color:black" required>




                    </div>
                    <div class="upload" style="padding:15px;">
                        <label for="file">Doctor Image</label>
                        <input id="file" type="file" name="file" required>




                    </div>
                    <div style="padding:15px;">

                        <input type="submit" class="btn btn-success">




                    </div>




                </form>






            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.scripts')
        <!-- End custom js for this page -->
</body>

</html>