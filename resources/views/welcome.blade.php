<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col"> Allergies</th>
                    <th scope="col"> Category</th>
                </tr>
                </thead>
                <tbody id="tbody">
                {{--                                        @foreach($foods as $key=>$food)--}}
                {{--                                            <tr>--}}
                {{--                                                <th>{{$key+1}}</th>--}}
                {{--                                                <td>{{$food->name}}</td>--}}
                {{--                                                <td>{{$food->price}}</td>--}}
                {{--                                                <td>--}}
                {{--                                                    @foreach($food->allergies as $allergies)--}}
                {{--                                                        <img src="{{$allergies->image}}"/>--}}
                {{--                                                    @endforeach--}}
                {{--                                                </td>--}}
                {{--                                                <td>--}}
                {{--                                                    @foreach($food->categories as $category)--}}
                {{--                                                        <a class="btn btn-success">{{$category->name}}</a>--}}
                {{--                                                    @endforeach--}}
                {{--                                                </td>--}}
                {{--                                            </tr>--}}
                {{--                                        @endforeach--}}


                </tbody>
            </table>
        </div>


    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


<script>
    $(document).ready(function () {
        // $("button").click(function(){
        //     $("p").hide();
        // });


        //$("body").onload(alert('i am faisal'));
        getData();

        function getData() {
            var a=whichIsVisible();
            +0+
            $.ajax({
                url: '/foods',
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    //console.log(response.categories);
                    var html = "";
                    $.each(response, function (key, data) {


                        html += '<tr>' +
                            '<th scope="row">' + data.id + '</th>' +
                            '<td>' + data.name + '</td>' +
                            ' <td>' + data.price + '</td>' +
                        //     ' <td>' +
                        //     $.each(data['allergies'], function (key, allergie) {
                        //         console.log(data.id, allergie.image)
                        //         '<img src ="' + allergie.image + '" alt="' + allergie.image + '" >'
                        //     });
                        // '</td>'
                        ' <td>' +
                        $.each(data['categories'], function (key, category) {
                            console.log(data.id, whichIsVisible(category.category))
                            // '<a>' + category.name + ' </a>'
                            // '<img src ="'+allergie.image+'" alt="'+allergie.image+'" >'
                        });
                        '</td>'
                        // '<td><a class=" edit_btn btn btn-warning" href="">Edit</a></td>' +
                        // '<td><a class=" delete_btn btn btn-danger" href="">Edit</a></td>' +
                        '</tr>'
                    })
                    $('#tbody').html(html);


                }
            });
        }

    });
</script>

</body>
</html>

