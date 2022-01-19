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
            <div align="center" style="padding-top:50px">


                <table>

                    <tr>

                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Patient_Name</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Email</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Phone</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Doctor_Name</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Date</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Message</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Status</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Approved</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Canceled</th>
                        <th style="padding:20px ;border-bottom:1px solid grey;color:grey">Send Mail</th>
                    </tr>

                    @foreach($data as $appoint)

                    <tr align="left">
                        <td style="padding:20px;border-bottom:1px solid grey">{{$appoint->name}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->email}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->phone}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->doctor}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->date}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->message}} </td>
                        <td style="padding:20px ;border-bottom:1px solid grey">{{$appoint->status}} </td>

                        <td style="padding:20px ;border-bottom:1px solid grey"><a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a> </td>
                        <td style="padding:20px ;border-bottom:1px solid grey"> <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger">Canceled</a> </td>
                        <td style="padding:20px ;border-bottom:1px solid grey"> <a href="{{url('emailview',$appoint->id)}}" class="btn btn-primary">Send Mail</a> </td>



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