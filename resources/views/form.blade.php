<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="test" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div>
                <label for="">name</label>
                <input type="text" name="name"/>
            </div>
            <div>
                <label for="">age</label>
                <input type="text" name="age"/>
            </div>
            <button type="submit">OK</button>
        </form>
    </body>
</html>
