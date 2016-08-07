<!DOCTYPE html>
<html>
    <head>
        <title>ajax</title>
        <script type="text/javascript" src="{{asset( 'resources/views/style/js/jquery.js' )}}"></script>
    </head>
    <body>
        <button type="button" onclick="changeit()">Click Me!</button>

    <script>
        function changeit(){
            $.ajax({
                type: 'POST',
                url: "{{url('count')}}",
                data: {'_token':'{{csrf_token()}}',
                        'project_id':'1',
                }
            });
        }
    </script>

    </body>
</html>
