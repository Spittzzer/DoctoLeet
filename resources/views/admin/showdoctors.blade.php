<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

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
            <div align="center" style="padding:100px 200px 200px 0px;">

                <table>

                    <tr align="left">

                        <th style="border-bottom:1px solid grey;color:grey">Doctor_Name</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Phone</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Speciality</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Room</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Image</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Delete</th>
                        <th style="padding:50px ;border-bottom:1px solid grey;color:grey">Update</th>

                    </tr>

                    @foreach($data as $doctor)
                    <tr align="left">
                        <td style="padding:20px;border-bottom:1px solid grey">{{$doctor->name}}</td>
                        <td style="padding:20px;border-bottom:1px solid grey">{{$doctor->phone}}</td>
                        <td style="padding:20px;border-bottom:1px solid grey">{{$doctor->speciality}}</td>
                        <td style="padding:20px;border-bottom:1px solid grey">{{$doctor->room}}</td>
                        <td style="padding:20px;border-bottom:1px solid grey"> <img src="doctorimg/{{$doctor->image}}" height="100" width="100" alt="doctors"> </td>
                        <td style="padding:20px;border-bottom:1px solid grey"><a onclick="return confirm('Are you sure?')" href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger">Delete</a></td>
                        <td style="padding:20px;border-bottom:1px solid grey"><a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary">Update</a></td>

                    </tr>

                    @endforeach






                </table>



            </div>


        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.scripts')
        <!-- End custom js for this page -->
</body>

</html>