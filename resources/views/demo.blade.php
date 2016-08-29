<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <script type="text/javascript" src="{{asset( 'resources/views/style/js/jquery.js' )}}"></script>
    </head>
    <body>
        <p>计数器演示</p>
        <button type="button" onclick="changeit()">请点击此按钮</button>

    <script>
        function changeit(){
            $.ajax({
                type: 'POST',
                url: "{{url('index')}}",
                data: {'_token':'{{csrf_token()}}',
                       'article_id':'5',
                       'article_name':'吴亦凡',
                },
                success:function(data) {
                    alert(data.msg);
                    alert(data.count)
                },
            });
        }
    </script>

    </body>
</html>
