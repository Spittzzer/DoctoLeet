<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    <style>
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

        .labelupload {
            padding-left: 0px;
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
            <div class="container" align="center" style="padding-top: 20px;">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{session()->get('message')}}



                </div>








                @endif

                <div class="container" align="center" style="">

                    <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <div style="padding:15px">
                            <label for="">Doctor's_Name</label>
                            <input type="text" name="name" value="{{$data->name}}" style="color:black">
                        </div>
                        <div style="padding:15px">
                            <label for="">Phone</label>
                            <input type="number" name="phone" value="{{$data->phone}}" style="color:black">
                        </div>
                        <div style="padding:15px">
                            <label for="">Speciality</label>
                            <input type="text" name="speciality" value="{{$data->speciality}}" style="color:black">
                        </div>
                        <div style="padding:15px">
                            <label for="">Room</label>
                            <input type="number" name="room" value="{{$data->room}}" style="color:black">
                        </div>
                        <div style="padding:15px; margin-left:200px">
                            <label class="labelupload" for="">Old Image</label>
                            <img src="doctorimg/{{$data->image}}" alt="Doctor" height="150" width="150">
                        </div>

                        <div style="margin-left:130px">
                            <label class="upload" for="">Change Image</label>
                            <input type="file" name="file">


                        </div>
                        <div style="margin-left:50px;margin-top:20px">

                            <input type="submit" value="Sumbit" class="btn btn-primary">


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