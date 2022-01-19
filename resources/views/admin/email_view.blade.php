<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
            padding-left: 70px;
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
                <form action="{{url('sendemail',$data->id)}}" method="POST">
                    @csrf
                    <div style="padding:15px;">
                        <label for="name">Greeting</label>
                        <input id="name" type="text" name="name" placeholder="Greetings" style="color:black" required>




                    </div>
                    <div style="padding:15px;">
                        <label for="number">Body</label>
                        <input id="number" type="text" name="body" placeholder="body" style="color:black" required>




                    </div>

                    <div style="padding:15px;">
                        <label for="">Action Text</label>
                        <input id="room" type="text" name="actiontext" placeholder="Action Text" style="color:black" required>




                    </div>
                    <div style="padding:15px;">
                        <label for="">Action Url</label>
                        <input id="room" type="text" name="actionurl" placeholder="Action Url" style="color:black" required>




                    </div>

                    <div style="padding:15px;">
                        <label for="">End Part</label>
                        <input id="room" type="text" name="endpart" placeholder="End Part" style="color:black" required>




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